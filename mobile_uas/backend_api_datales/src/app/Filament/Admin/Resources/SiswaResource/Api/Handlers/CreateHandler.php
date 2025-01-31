<?php

namespace App\Filament\Admin\Resources\SiswaResource\Api\Handlers;

use App\Filament\Admin\Resources\SiswaResource;
use App\Filament\Admin\Resources\SiswaResource\Api\Requests\CreateSiswaRequest;
use Rupadana\ApiService\Http\Handlers;

class CreateHandler extends Handlers
{
    public static ?string $uri = '/';

    public static ?string $resource = SiswaResource::class;

    public static function getMethod()
    {
        return Handlers::POST;
    }

    public static function getModel()
    {
        return static::$resource::getModel();
    }

    /**
     * Create Siswa
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(CreateSiswaRequest $request)
    {
        $model = new (static::getModel());

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, 'Successfully Create Resource');
    }
}
