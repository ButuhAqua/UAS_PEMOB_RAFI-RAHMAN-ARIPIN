<?php

namespace App\Filament\Admin\Resources\PengajarResource\Api\Handlers;

use App\Filament\Admin\Resources\PengajarResource;
use App\Filament\Admin\Resources\PengajarResource\Api\Transformers\PengajarTransformer;
use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use Spatie\QueryBuilder\QueryBuilder;

class DetailHandler extends Handlers
{
    public static ?string $uri = '/{id}';

    public static ?string $resource = PengajarResource::class;

    /**
     * Show Pengajar
     *
     * @return PengajarTransformer
     */
    public function handler(Request $request)
    {
        $id = $request->route('id');

        $query = static::getEloquentQuery();

        $query = QueryBuilder::for(
            $query->where(static::getKeyName(), $id)
        )
            ->first();

        if (! $query) {
            return static::sendNotFoundResponse();
        }

        return new PengajarTransformer($query);
    }
}
