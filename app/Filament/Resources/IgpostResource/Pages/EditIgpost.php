<?php

namespace App\Filament\Resources\IgpostResource\Pages;

use App\Filament\Resources\IgpostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIgpost extends EditRecord
{
    protected static string $resource = IgpostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
