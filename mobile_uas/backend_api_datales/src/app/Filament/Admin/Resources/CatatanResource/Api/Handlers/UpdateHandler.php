<?php

namespace App\Filament\Admin\Resources\CatatanResource\Api\Handlers;

use App\Filament\Admin\Resources\CatatanResource;
use App\Filament\Admin\Resources\CatatanResource\Api\Requests\UpdateCatatanRequest;
use Rupadana\ApiService\Http\Handlers;

class UpdateHandler extends Handlers
{
    public static ?string $uri = '/{id}';

    public static ?string $resource = CatatanResource::class;

    public static function getMethod()
    {
        return Handlers::PUT;
    }

    public static function getModel()
    {
        return static::$resource::getModel();
    }

    /**
     * Update Catatan
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function handler(UpdateCatatanRequest $request)
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
