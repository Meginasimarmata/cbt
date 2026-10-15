<?php

namespace App\Filament\Resources\HistoriPelajarans;

use App\Filament\Resources\HistoriPelajarans\Pages\ViewHistoriPelajaran;
use App\Filament\Resources\HistoriPelajarans\Pages\ListHistoriPelajarans;
use App\Filament\Resources\HistoriPelajarans\Tables\HistoriPelajaransTable;
use App\Models\ExamAnswer;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use UnitEnum;

class HistoriPelajaranResource extends Resource
{
    protected static ?string $model = ExamAnswer::class;

    protected static string|BackedEnum|null $navigationIcon =
        Heroicon::OutlinedBookOpen;

    protected static string|UnitEnum|null $navigationGroup = 'Basis Data';

    protected static ?string $modelLabel = 'Histori Pelajaran';

    protected static ?string $navigationLabel = 'Histori Pelajaran';

    protected static ?string $recordTitleAttribute = 'id';

    public static function infolist(Schema $schema): Schema
{
    return $schema
        ->components([
            \Filament\Infolists\Components\TextEntry::make('student_name')
                ->label('Siswa'),

            \Filament\Infolists\Components\TextEntry::make('subject_name')
                ->label('Mata Pelajaran'),

            \Filament\Infolists\Components\TextEntry::make('exam_title')
                ->label('Ujian'),

            \Filament\Infolists\Components\TextEntry::make('correct')
                ->label('Benar'),

            \Filament\Infolists\Components\TextEntry::make('wrong')
                ->label('Salah'),

            \Filament\Infolists\Components\TextEntry::make('score')
                ->label('Nilai'),

            \Filament\Infolists\Components\TextEntry::make('finished_at')
                ->label('Tanggal Ujian')
                ->dateTime('d F Y, H:i'),
        ]);
}
    public static function form(Schema $schema): Schema
    {
        return $schema;
    }

    public static function table(Table $table): Table
    {
        return HistoriPelajaransTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

   public static function getPages(): array
    {
         return [
            'index' => ListHistoriPelajarans::route('/'),
            'view' => ViewHistoriPelajaran::route('/{record}'),
        ];
    }
    public static function getRecordRouteKeyName(): ?string
{
    return 'exam_answers.id';
}

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->join(
                'exam_results',
                'exam_answers.exam_result_id',
                '=',
                'exam_results.id'
            )
            ->join(
                'students',
                'exam_results.student_id',
                '=',
                'students.id'
            )
            ->join(
                'exams',
                'exam_results.exam_id',
                '=',
                'exams.id'
            )
            ->join(
                'questions',
                'exam_answers.question_id',
                '=',
                'questions.id'
            )
            ->join(
                'subjects',
                'questions.subject_id',
                '=',
                'subjects.id'
            )
            ->selectRaw('
                MIN(exam_answers.id) as id,
                students.name as student_name,
                subjects.name as subject_name,
                exams.title as exam_title,
                SUM(CASE WHEN exam_answers.is_correct = 1 THEN 1 ELSE 0 END) as correct,
                SUM(CASE WHEN exam_answers.is_correct = 0 THEN 1 ELSE 0 END) as wrong,
                ROUND(
                    (
                        SUM(CASE WHEN exam_answers.is_correct = 1 THEN 1 ELSE 0 END)
                        / COUNT(exam_answers.id)
                    ) * 100
                ) as score,
                exam_results.finished_at as finished_at
            ')
            ->groupBy(
                'exam_results.id',
                'students.name',
                'subjects.name',
                'exams.title',
                'exam_results.finished_at'
            );
    }
}