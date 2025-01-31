<?php

namespace App\Filament\Admin\Resources\JadwalResource\Api;

use App\Filament\Admin\Resources\JadwalResource;
use Rupadana\ApiService\ApiService;

class JadwalApiService extends ApiService
{
    protected static ?string $resource = JadwalResource::class;

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
