<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductVariantResource\Pages;
use App\Filament\Resources\ProductVariantResource\RelationManagers;
use App\Models\ProductVariant;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductVariantResource extends Resource
{
    protected static ?string $model = ProductVariant::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('product_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('size_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('thickness_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('dimension_in_inches')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('dimension_in_feet')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('dimension_in_cm')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('product_variant_code')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('price')
                    ->numeric()
                    ->default(null)
                    ->prefix('$'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('product_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('size_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('thickness_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dimension_in_inches')
                    ->searchable(),
                Tables\Columns\TextColumn::make('dimension_in_feet')
                    ->searchable(),
                Tables\Columns\TextColumn::make('dimension_in_cm')
                    ->searchable(),
                Tables\Columns\TextColumn::make('product_variant_code')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListProductVariants::route('/'),
            'create' => Pages\CreateProductVariant::route('/create'),
            'edit' => Pages\EditProductVariant::route('/{record}/edit'),
        ];
    }
}
