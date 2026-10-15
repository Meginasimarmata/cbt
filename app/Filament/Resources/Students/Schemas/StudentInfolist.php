<?php

namespace App\Filament\Resources\Students\Schemas;

use App\Models\Student;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class StudentInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('reg_year')
                    ->label('Tahun Masuk'),

                TextEntry::make('nis')
                    ->label('Nomor Induk Siswa'),

                TextEntry::make('name')
                    ->label('Nama Lengkap'),

                TextEntry::make('gender')
                    ->label('Jenis Kelamin')
                    ->formatStateUsing(
                        fn ($state) => $state
                            ? 'Laki-Laki'
                            : 'Perempuan'
                    ),

                TextEntry::make('status')
                    ->badge(),

                TextEntry::make('deleted_at')
                    ->dateTime()
                    ->visible(
                        fn (Student $record): bool => $record->trashed()
                    ),

                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),

                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}