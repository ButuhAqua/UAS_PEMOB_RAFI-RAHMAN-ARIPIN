<?php

namespace App\Filament\Admin\Resources\JadwalResource\Api\Handlers;

use App\Filament\Admin\Resources\JadwalResource;
use App\Filament\Admin\Resources\JadwalResource\Api\Transformers\JadwalTransformer;
use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use Spatie\QueryBuilder\QueryBuilder;

class DetailHandler extends Handlers
{
    public static ?string $uri = '/{id}';

    public static ?string $resource = JadwalResource::class;

    /**
     * Show Jadwal
     *
     * @return JadwalTransformer
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

        return new JadwalTransformer($query);
    }
}
