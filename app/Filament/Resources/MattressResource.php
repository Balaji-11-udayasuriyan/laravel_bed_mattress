<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MattressResource\Pages;
use App\Filament\Resources\MattressResource\RelationManagers;
use App\Models\Mattress;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MattressResource extends Resource
{
    protected static ?string $model = Mattress::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('size_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('unit_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('thickness_id')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('size_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('unit_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('thickness_id')
                    ->numeric()
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
            'index' => Pages\ListMattresses::route('/'),
            'create' => Pages\CreateMattress::route('/create'),
            'edit' => Pages\EditMattress::route('/{record}/edit'),
        ];
    }
}
