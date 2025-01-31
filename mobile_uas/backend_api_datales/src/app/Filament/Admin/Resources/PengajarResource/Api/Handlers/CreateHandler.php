<?php

namespace App\Filament\Admin\Resources\PengajarResource\Api\Handlers;

use App\Filament\Admin\Resources\PengajarResource;
use App\Filament\Admin\Resources\PengajarResource\Api\Requests\CreatePengajarRequest;
use Rupadana\ApiService\Http\Handlers;

class CreateHandler extends Handlers
{
    public static ?string $uri = '/';

    public static ?string $resource = PengajarResource::class;

    public static function getMethod()
    {
        return Handlers::POST;
    }

    public static function getModel()
    {
        return static::$resource::getModel();
    }

    /**
     * Create Pengajar
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(CreatePengajarRequest $request)
    {
        $model = new (static::getModel());

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, 'Successfully Create Resource');
    }
}
