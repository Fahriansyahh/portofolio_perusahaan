<?php

namespace App\Filament\Resources;


use Filament\Tables;
use App\Models\Service;
use Filament\Forms\Form;
use App\Models\Promotion;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\Promotion_service;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\PromotionServiceResource\Pages;


class PromotionServiceResource extends Resource
{
    protected static ?string $model = Promotion_service::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('service_id')
                    ->label('Service')
                    ->options(Service::all()->pluck('title', 'id'))
                    ->live()->required(),
                Select::make('promotion_id')
                    ->label('Service')
                    ->options(Promotion::all()->pluck('title', 'id'))
                    ->live()->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('promotion.title')
                    ->label('Judul Promo')
                    ->searchable(),

                TextColumn::make('service.title')
                    ->label('Nama Service')
                    ->searchable(),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y H:i'),

                TextColumn::make('updated_at')
                    ->label('Diupdate')
                    ->dateTime('d M Y H:i'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPromotionServices::route('/'),
            'create' => Pages\CreatePromotionService::route('/create'),
            'edit' => Pages\EditPromotionService::route('/{record}/edit'),
        ];
    }
}
