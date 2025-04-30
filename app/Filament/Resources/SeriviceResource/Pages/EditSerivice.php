<?php

namespace App\Filament\Resources\SeriviceResource\Pages;

use App\Filament\Resources\SeriviceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSerivice extends EditRecord
{
    protected static string $resource = SeriviceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
