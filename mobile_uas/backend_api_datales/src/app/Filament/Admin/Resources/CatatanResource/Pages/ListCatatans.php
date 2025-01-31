<?php

namespace App\Filament\Admin\Resources\CatatanResource\Pages;

use App\Filament\Admin\Resources\CatatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCatatans extends ListRecords
{
    protected static string $resource = CatatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
