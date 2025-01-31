<?php

namespace App\Filament\Admin\Resources\CatatanResource\Api\Handlers;

use App\Filament\Admin\Resources\CatatanResource;
use App\Filament\Admin\Resources\CatatanResource\Api\Requests\CreateCatatanRequest;
use Rupadana\ApiService\Http\Handlers;

class CreateHandler extends Handlers
{
    public static ?string $uri = '/';

    public static ?string $resource = CatatanResource::class;

    public static function getMethod()
    {
        return Handlers::POST;
    }

    public static function getModel()
    {
        return static::$resource::getModel();
    }

    /**
     * Create Catatan
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(CreateCatatanRequest $request)
    {
        $model = new (static::getModel());

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, 'Successfully Create Resource');
    }
}
