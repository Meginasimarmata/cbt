<?php

namespace App\Filament\Test\Resources\Exams\Pages;

use App\Filament\Test\Resources\Exams\ExamResource;
use App\Models\Answer;
use App\Models\Exam;
use App\Models\ExamAnswer;
use App\Models\ExamResult;
use App\Models\Student;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\Page;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StartingExam extends Page
{
    protected static string $resource = ExamResource::class;

    protected string $view = 'filament.test.resources.exams.pages.starting-exam';

    public array $collections = [];

    public array $answers = [];

    public int $examId;

    public function mount(Exam $record): void
    {
        $this->examId = $record->id;

        $pelajarans = $record->subjects;

        foreach ($pelajarans as $mapel) {
            $this->collections[] = [
                'id' => $mapel->id,
                'name' => $mapel->name,
                'soals' => $mapel
                    ->questions()
                    ->where('is_active', true)
                    ->with([
                        'answers' => fn ($query) => $query
                            ->where('is_active', true)
                            ->inRandomOrder(),
                    ])
                    ->inRandomOrder()
                    ->limit($mapel->pivot->qty)
                    ->get()
                    ->toArray(),
            ];
        }
    }

    public function submitExam(): void
    {
        $student = Student::where(
            'user_id',
            Auth::id()
        )->first();

        if (!$student) {
            Notification::make()
                ->title('Data siswa tidak ditemukan')
                ->danger()
                ->send();

            return;
        }

        $exam = Exam::findOrFail($this->examId);

        DB::transaction(function () use ($student, $exam) {

            $examResult = ExamResult::create([
                'student_id' => $student->id,
                'exam_id' => $exam->id,
                'score' => 0,
                'correct' => 0,
                'wrong' => 0,
                'started_at' => now(),
                'finished_at' => now(),
            ]);

            $totalQuestions = 0;
            $correctAnswers = 0;

            foreach ($this->collections as $pelajaran) {

                foreach ($pelajaran['soals'] as $pertanyaan) {

                    $totalQuestions++;

                    $questionId = $pertanyaan['id'];

                    $selectedAnswerId =
                        $this->answers[$questionId] ?? null;

                    $selectedAnswer = null;

                    if ($selectedAnswerId) {
                        $selectedAnswer = Answer::query()
                            ->where('id', $selectedAnswerId)
                            ->where('question_id', $questionId)
                            ->where('is_active', true)
                            ->first();
                    }

                    $isCorrect =
                        $selectedAnswer?->is_correct ?? false;

                    if ($isCorrect) {
                        $correctAnswers++;
                    }

                    ExamAnswer::create([
                        'exam_result_id' => $examResult->id,
                        'question_id' => $questionId,
                        'answer_id' => $selectedAnswer?->id,
                        'is_correct' => $isCorrect,
                    ]);
                }
            }

            $wrongAnswers =
                $totalQuestions - $correctAnswers;

            $score = $totalQuestions > 0
                ? round(
                    ($correctAnswers / $totalQuestions) * 100
                )
                : 0;

            $examResult->update([
                'score' => $score,
                'correct' => $correctAnswers,
                'wrong' => $wrongAnswers,
            ]);
        });

        Notification::make()
            ->title('Ujian berhasil dikumpulkan')
            ->success()
            ->send();

        $this->redirect(
            ExamResource::getUrl('index')
        );
    }
}