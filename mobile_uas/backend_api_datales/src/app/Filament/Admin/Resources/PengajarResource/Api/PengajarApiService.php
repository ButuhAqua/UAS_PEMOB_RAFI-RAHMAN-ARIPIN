<?php

namespace App\Filament\Admin\Resources\PengajarResource\Api;

use App\Filament\Admin\Resources\PengajarResource;
use Rupadana\ApiService\ApiService;

class PengajarApiService extends ApiService
{
    protected static ?string $resource = PengajarResource::class;

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
