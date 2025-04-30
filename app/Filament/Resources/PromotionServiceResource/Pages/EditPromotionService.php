<?php

namespace App\Filament\Resources\PromotionServiceResource\Pages;

use App\Filament\Resources\PromotionServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPromotionService extends EditRecord
{
    protected static string $resource = PromotionServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
