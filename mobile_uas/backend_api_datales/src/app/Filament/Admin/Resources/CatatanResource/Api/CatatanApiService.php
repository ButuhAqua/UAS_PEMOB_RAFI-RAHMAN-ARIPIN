<?php

namespace App\Filament\Admin\Resources\CatatanResource\Api;

use App\Filament\Admin\Resources\CatatanResource;
use Rupadana\ApiService\ApiService;

class CatatanApiService extends ApiService
{
    protected static ?string $resource = CatatanResource::class;

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
