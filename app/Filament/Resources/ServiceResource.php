<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Service;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\Promotion_service;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\ServiceResource\Pages;


class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required(),
                TextInput::make('price_range')
                    ->placeholder('Contoh: 2jt - 5jt')->helperText('Optional'),
                TextInput::make('estimated_time')
                    ->required()
                    ->placeholder('Contoh: 1-2 minggu'),
                Textarea::make('description')->required(),
                FileUpload::make('image')
                    ->disk('public')          // simpan di storage/app/public
                    ->directory('services')   // simpan di storage/app/public/services
                    ->visibility('public')->required(),

                // Repeater untuk memilih Promo
                Repeater::make('promotionServices')->afterStateHydrated(function (Forms\Components\Repeater $component, $state) {
                    $component->state(
                        Promotion_service::where('service_id', request()->route('record'))
                            ->get()
                            ->map(fn($promo) => ['promotion_id' => $promo->promotion_id])
                            ->toArray()
                    );
                })
                    ->label('Promosi Terkait')
                    ->schema([
                        Select::make('promotion_id')
                            ->label('Pilih Promo')
                            ->options(
                                \App\Models\Promotion::pluck('title', 'id')
                            )
                            ->required()
                    ])
                    ->defaultItems(1)
                    ->createItemButtonLabel('Tambah Promo'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->limit(30),

                TextColumn::make('price_range')
                    ->label('Harga'),

                TextColumn::make('estimated_time')
                    ->label('Estimasi'),

                ImageColumn::make('image')
                    ->label('Gambar')
                    ->disk('public'),

                // Kolom Ceklis atau Silang jika ada promosi
                IconColumn::make('promotions')
                    ->label('Ada Promo?')
                    ->boolean()
                    ->getStateUsing(fn($record) => $record->promotions->isNotEmpty())
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger'),
                TextColumn::make('promotion_titles')
                    ->label('Judul Promo')
                    ->getStateUsing(fn($record) => $record->promotions->pluck('title')->join(', '))
                    ->wrap()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
