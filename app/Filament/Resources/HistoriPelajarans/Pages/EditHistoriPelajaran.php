<?php

namespace App\Filament\Resources\HistoriPelajarans\Pages;

use App\Filament\Resources\HistoriPelajarans\HistoriPelajaranResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHistoriPelajaran extends EditRecord
{
    protected static string $resource = HistoriPelajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
