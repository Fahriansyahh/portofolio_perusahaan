<?php

namespace App\Filament\Resources\PromotionServiceResource\Pages;

use App\Filament\Resources\PromotionServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPromotionServices extends ListRecords
{
    protected static string $resource = PromotionServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
