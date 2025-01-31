<?php

namespace App\Filament\Admin\Resources\JadwalResource\Api\Handlers;

use App\Filament\Admin\Resources\JadwalResource;
use App\Filament\Admin\Resources\JadwalResource\Api\Requests\UpdateJadwalRequest;
use Rupadana\ApiService\Http\Handlers;

class UpdateHandler extends Handlers
{
    public static ?string $uri = '/{id}';

    public static ?string $resource = JadwalResource::class;

    public static function getMethod()
    {
        return Handlers::PUT;
    }

    public static function getModel()
    {
        return static::$resource::getModel();
    }

    /**
     * Update Jadwal
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(UpdateJadwalRequest $request)
    {
        $id = $request->route('id');

        $model = static::getModel()::find($id);

        if (! $model) {
            return static::sendNotFoundResponse();
        }

        $model->fill($request->all());

        $model->save();

        return static::sendSuccessResponse($model, 'Successfully Update Resource');
    }
}
