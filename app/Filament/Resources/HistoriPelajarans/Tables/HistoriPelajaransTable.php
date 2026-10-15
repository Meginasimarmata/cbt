<?php

namespace App\Filament\Resources\HistoriPelajarans\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HistoriPelajaransTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student_name')
                    ->label('Siswa'),

                TextColumn::make('subject_name')
                    ->label('Mata Pelajaran'),

                TextColumn::make('exam_title')
                    ->label('Ujian'),

                TextColumn::make('correct')
                    ->label('Benar')
                    ->numeric(),

                TextColumn::make('wrong')
                    ->label('Salah')
                    ->numeric(),

                TextColumn::make('score')
                    ->label('Nilai')
                    ->numeric(),

                TextColumn::make('finished_at')
                    ->label('Tanggal')
                    ->dateTime('d F Y, H:i'),
            ])
            ->defaultSort('finished_at', 'desc')
            ->recordUrl(
    fn ($record) => \App\Filament\Resources\HistoriPelajarans\HistoriPelajaranResource::getUrl(
        'view',
        ['record' => $record]
    )
);
    }
}