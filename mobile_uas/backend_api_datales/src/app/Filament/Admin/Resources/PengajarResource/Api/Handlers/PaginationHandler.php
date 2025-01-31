<?php

namespace App\Filament\Admin\Resources\PengajarResource\Api\Handlers;

use App\Filament\Admin\Resources\PengajarResource;
use Illuminate\Support\Facades\Auth;
use App\Filament\Admin\Resources\PengajarResource\Api\Transformers\PengajarTransformer;
use Illuminate\Http\Request;
use Rupadana\ApiService\Http\Handlers;
use Spatie\QueryBuilder\QueryBuilder;

class PaginationHandler extends Handlers
{
    public static ?string $uri = '/';

    public static ?string $resource = PengajarResource::class;

    /**
     * List of Pengajar
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function handler()
    {
        $query = static::getEloquentQuery();

        $query = QueryBuilder::for($query->where('user_id', Auth::id()))
        ->with(['user'])
            ->allowedFields($this->getAllowedFields() ?? [])
            ->allowedSorts($this->getAllowedSorts() ?? [])
            ->allowedFilters($this->getAllowedFilters() ?? [])
            ->allowedIncludes($this->getAllowedIncludes() ?? [])
            ->paginate(request()->query('per_page'))
            ->appends(request()->query());

        return PengajarTransformer::collection($query);
    }
}
