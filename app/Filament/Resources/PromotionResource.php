<?php

namespace App\Filament\Resources;


use Filament\Tables;
use Filament\Forms\Get;
use Filament\Forms\Form;
use App\Models\Promotion;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\PromotionResource\Pages;


class PromotionResource extends Resource
{
    protected static ?string $model = Promotion::class;

    protected static ?string $navigationIcon = 'heroicon-o-gift'; // icon service (cog = roda gigi)
    protected static ?string $navigationGroup = 'Promotion';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required(),
                TextInput::make('discount_percent')
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(100)
                    ->suffix('%')
                    ->label('Diskon (%)')->helperText('Optional'),
                TextInput::make('price_after_discount')
                    ->numeric()
                    ->prefix('Rp')
                    ->label('Harga Setelah Diskon')->helperText('Optional'),
                DatePicker::make('start_date')
                    ->required()
                    ->label('Tanggal Mulai')
                    ->reactive()
                    ->afterStateUpdated(
                        fn($state, callable $set, Get $get) =>
                        $set('end_date', max($state, $get('end_date')))
                    )->required(),

                DatePicker::make('end_date')
                    ->label('Tanggal Selesai')
                    ->rules([
                        function (Get $get) {
                            return function ($attribute, $value, $fail) use ($get) {
                                $startDate = $get('start_date');
                                if ($startDate && $value < $startDate) {
                                    $fail('Tanggal selesai tidak boleh lebih awal dari tanggal mulai.');
                                }
                            };
                        }
                    ])->helperText('Optional'),
                Textarea::make('description')->required(),
                FileUpload::make('image')
                    ->directory('promos')
                    ->image()
                    ->imageEditor()

                    ->label('Gambar Promo')->helperText('Optional'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable(),
                TextColumn::make('discount_percent')->suffix('%')->searchable(),
                TextColumn::make('price_after_discount')->money('IDR')->searchable(),
                TextColumn::make('start_date')->date(),
                TextColumn::make('end_date')->date(),
                ImageColumn::make('image')->label('Gambar'),
                // ✅ Kolom centang jika ada relasi ke service
                IconColumn::make('has_services')
                    ->label('Ada Service?')
                    ->boolean()
                    ->getStateUsing(fn($record) => $record->services()->exists()),

                // ✅ Kolom untuk menampilkan daftar service title
                TextColumn::make('services_list')
                    ->label('Daftar Service')
                    ->getStateUsing(fn($record) => $record->services->pluck('title')->join(', '))
                    ->wrap(), // supaya teks panjang pindah baris
            ])
            ->filters([])
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
            'index' => Pages\ListPromotions::route('/'),
            'create' => Pages\CreatePromotion::route('/create'),
            'edit' => Pages\EditPromotion::route('/{record}/edit'),
        ];
    }
}
