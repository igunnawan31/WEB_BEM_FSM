<?php

namespace App\Filament\Resources\IgpostResource\Pages;

use App\Filament\Resources\IgpostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIgposts extends ListRecords
{
    protected static string $resource = IgpostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
