<?php

namespace App\Filament\Resources\ServiceResource\Pages;

use App\Filament\Resources\ServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Models\Promotion_service;

class CreateService extends CreateRecord
{
    protected static string $resource = ServiceResource::class;
    protected function afterCreate(): void
    {
        $formData = $this->form->getState();

        foreach ($formData['promotionServices'] ?? [] as $promo) {
            if (!empty($promo['promotion_id'])) {
                Promotion_service::create([
                    'promotion_id' => $promo['promotion_id'],
                    'service_id' => $this->record->id,
                ]);
            }
        }
    }
}
