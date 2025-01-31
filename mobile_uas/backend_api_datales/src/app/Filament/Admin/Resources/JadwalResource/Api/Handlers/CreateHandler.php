<?php

namespace App\Filament\Admin\Resources\JadwalResource\Api\Handlers;

use App\Filament\Admin\Resources\JadwalResource;
use App\Filament\Admin\Resources\JadwalResource\Api\Requests\CreateJadwalRequest;
use Rupadana\ApiService\Http\Handlers;

class CreateHandler extends Handlers
{
    public static ?string $uri = '/';

    public static ?string $resource = JadwalResource::class;

    public static function getMethod()
    {
        return Handlers::POST;
    }

    public static function getModel()
    {
        return static::$resource::getModel();
    }

    /**
     * Create Jadwal
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(CreateJadwalRequest $request)
    {
        $model = new (static::getModel());

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, 'Successfully Create Resource');
    }
}
