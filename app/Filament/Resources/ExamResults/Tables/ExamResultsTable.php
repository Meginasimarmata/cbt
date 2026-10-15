<?php

namespace App\Filament\Resources\ExamResults\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ExamResultsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student.name')
                    ->label('Siswa')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('exam.title')
                    ->label('Ujian')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('finished_at')
                    ->label('Tanggal Ujian')
                    ->dateTime('d F Y, H:i')
                    ->sortable(),

                TextColumn::make('correct')
                    ->label('Benar')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('wrong')
                    ->label('Salah')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('score')
                    ->label('Nilai')
                    ->numeric()
                    ->sortable(),
            ])
            ->defaultSort('finished_at', 'desc');
    }
}