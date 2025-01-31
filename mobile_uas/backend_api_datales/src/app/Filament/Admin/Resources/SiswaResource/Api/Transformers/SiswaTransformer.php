<?php

namespace App\Filament\Admin\Resources\SiswaResource\Api\Transformers;

use App\Models\Siswa;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property Siswa $resource
 */
class SiswaTransformer extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->resource->toArray();
    }
}
