<?php

namespace App\Filament\Admin\Resources\CatatanResource\Api\Handlers;

use App\Filament\Admin\Resources\CatatanResource;
use App\Filament\Admin\Resources\CatatanResource\Api\Transformers\CatatanTransformer;
use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use Spatie\QueryBuilder\QueryBuilder;

class DetailHandler extends Handlers
{
    public static ?string $uri = '/{id}';

    public static ?string $resource = CatatanResource::class;

    /**
     * Show Catatan
     *
     * @return CatatanTransformer
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

        return new CatatanTransformer($query);
    }
}
