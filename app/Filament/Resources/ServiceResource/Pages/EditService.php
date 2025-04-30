<?php

namespace App\Filament\Resources\ServiceResource\Pages;

use App\Filament\Resources\ServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\Promotion_service;

class EditService extends EditRecord
{
    protected static string $resource = ServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        $formData = $this->form->getState();

        // Hapus relasi lama
        Promotion_service::where('service_id', $this->record->id)->delete();

        // Tambah ulang
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
