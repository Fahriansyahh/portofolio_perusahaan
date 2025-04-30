<?php

namespace App\Filament\Resources\SeriviceResource\Pages;

use App\Filament\Resources\SeriviceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSerivices extends ListRecords
{
    protected static string $resource = SeriviceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
