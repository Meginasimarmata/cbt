<?php

namespace App\Filament\Resources\ExamResults;

use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
use App\Filament\Resources\ExamResults\Pages\ListExamResults;
use App\Filament\Resources\ExamResults\Pages\ViewExamResult;
use App\Filament\Resources\ExamResults\Tables\ExamResultsTable;
use App\Models\ExamResult;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class ExamResultResource extends Resource
{
    protected static ?string $model = ExamResult::class;

    protected static string|BackedEnum|null $navigationIcon =
        Heroicon::OutlinedClipboardDocumentCheck;

    protected static string|UnitEnum|null $navigationGroup = 'Basis Data';

    protected static ?string $modelLabel = 'Rekap Ujian';

    protected static ?string $navigationLabel = 'Rekap Ujian';

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Schema $schema): Schema
    {
        return $schema;
    }

    public static function infolist(Schema $schema): Schema
{
    return $schema
        ->components([
            TextEntry::make('student.name')
                ->label('Siswa'),

            TextEntry::make('exam.title')
                ->label('Ujian'),

            TextEntry::make('finished_at')
                ->label('Tanggal Ujian')
                ->dateTime('d F Y, H:i'),

            TextEntry::make('score')
                ->label('Nilai'),

            TextEntry::make('correct')
                ->label('Benar'),

            TextEntry::make('wrong')
                ->label('Salah'),

            RepeatableEntry::make('answers')
                ->label('Detail Jawaban')
                ->schema([
                    TextEntry::make('question.playload')
                        ->label('Soal'),

                    TextEntry::make('answer.text')
                        ->label('Jawaban Siswa')
                        ->placeholder('Tidak dijawab'),

                    TextEntry::make('correctAnswer.text')
                        ->label('Kunci Jawaban'),

                    TextEntry::make('is_correct')
                        ->label('Hasil')
                        ->formatStateUsing(
                            fn ($state) => $state ? 'Benar' : 'Salah'
                        ),
                ])
                ->columnSpanFull(),
        ]);
}

    public static function table(Table $table): Table
    {
        return ExamResultsTable::configure($table);
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
            'index' => ListExamResults::route('/'),
            'view' => ViewExamResult::route('/{record}'),
        ];
    }
}