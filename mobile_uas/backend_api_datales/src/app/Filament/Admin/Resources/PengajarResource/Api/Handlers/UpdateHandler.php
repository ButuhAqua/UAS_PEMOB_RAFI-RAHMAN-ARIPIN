<?php

namespace App\Filament\Admin\Resources\PengajarResource\Api\Handlers;

use App\Filament\Admin\Resources\PengajarResource;
use App\Filament\Admin\Resources\PengajarResource\Api\Requests\UpdatePengajarRequest;
use Rupadana\ApiService\Http\Handlers;

class UpdateHandler extends Handlers
{
    public static ?string $uri = '/{id}';

    public static ?string $resource = PengajarResource::class;

    public static function getMethod()
    {
        return Handlers::PUT;
    }

    public static function getModel()
    {
        return static::$resource::getModel();
    }

    /**
     * Update Pengajar
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(UpdatePengajarRequest $request)
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
