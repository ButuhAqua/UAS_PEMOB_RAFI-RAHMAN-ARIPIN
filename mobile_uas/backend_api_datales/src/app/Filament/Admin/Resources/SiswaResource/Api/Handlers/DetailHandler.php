<?php

namespace App\Filament\Admin\Resources\SiswaResource\Api\Handlers;

use App\Filament\Admin\Resources\SiswaResource;
use App\Filament\Admin\Resources\SiswaResource\Api\Transformers\SiswaTransformer;
use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use Spatie\QueryBuilder\QueryBuilder;

class DetailHandler extends Handlers
{
    public static ?string $uri = '/{id}';

    public static ?string $resource = SiswaResource::class;

    /**
     * Show Siswa
     *
     * @return SiswaTransformer
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

        return new SiswaTransformer($query);
    }
}
