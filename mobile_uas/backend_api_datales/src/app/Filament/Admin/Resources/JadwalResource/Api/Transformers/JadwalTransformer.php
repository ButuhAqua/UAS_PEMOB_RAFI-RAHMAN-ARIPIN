<?php

namespace App\Filament\Admin\Resources\JadwalResource\Api\Transformers;

use App\Models\Jadwal;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property Jadwal $resource
 */
class JadwalTransformer extends JsonResource
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
