<?php

namespace App\Filament\Resources\MattressResource\Pages;

use App\Filament\Resources\MattressResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMattress extends EditRecord
{
    protected static string $resource = MattressResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
