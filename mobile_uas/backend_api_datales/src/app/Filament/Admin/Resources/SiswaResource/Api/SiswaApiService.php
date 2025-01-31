<?php

namespace App\Filament\Admin\Resources\SiswaResource\Api;

use App\Filament\Admin\Resources\SiswaResource;
use Rupadana\ApiService\ApiService;

class SiswaApiService extends ApiService
{
    protected static ?string $resource = SiswaResource::class;

    public static function handlers(): array
    {
        return [
            Handlers\CreateHandler::class,
            Handlers\UpdateHandler::class,
            Handlers\DeleteHandler::class,
            Handlers\PaginationHandler::class,
            Handlers\DetailHandler::class,
        ];

    }
}
