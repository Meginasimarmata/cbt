<?php

namespace App\Filament\Test\Resources\Exams;

use App\Filament\Test\Resources\Exams\Pages\ManageExams;
use App\Filament\Test\Resources\Exams\Pages\StartingExam;
use App\Models\Exam;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class ExamResource extends Resource
{
    protected static ?string $model = Exam::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedPencilSquare;

    protected static ?string $navigationLabel = 'Sesi Ujian';

    protected static ?string $modelLabel = 'Ujian';

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(function (Builder $query) {
                $now = now();

                $query
                    ->where('is_available', true)
                    ->where(function (Builder $query) use ($now) {
                        $query
                            // Ujian dengan waktu tepat: tampil sampai waktu selesai
                            ->where(fn (Builder $query) => $query
                                ->where('exact_time', true)
                                ->whereRaw(
                                    'DATE_ADD(started_at, INTERVAL duration MINUTE) >= ?',
                                    [$now]
                                ))
                            // Ujian dengan batas kadaluarsa
                            ->orWhere(fn (Builder $query) => $query
                                ->whereNotNull('expired_at')
                                ->where('expired_at', '>=', $now));
                    });
            })
            ->recordTitleAttribute('title')
            ->columns([
                TextColumn::make('title')
                    ->label('Ujian')
                    ->searchable(),
                TextColumn::make('duration')
                    ->label('Durasi')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('threshold')
                    ->label('Min. Score')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('started_at')
                    ->label('Mulai')
                    ->dateTime('d F Y, H:i:s')
                    ->sortable(),
            ])
            ->recordActions([
                Action::make('start')
                    ->label('Mulai Ujian')
                    ->icon(Heroicon::OutlinedPaperAirplane)
                    ->color('primary')
                    ->button()
                    // Nonaktif selama waktu mulai belum tiba
                    ->disabled(fn ($record) => $record->started_at > now())
                    ->url(fn ($record) => ExamResource::getUrl('mulai', ['record' => $record,]))

            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageExams::route('/'),
            'mulai' => StartingExam::route('/{record}/mulai')

        ];
    }
}