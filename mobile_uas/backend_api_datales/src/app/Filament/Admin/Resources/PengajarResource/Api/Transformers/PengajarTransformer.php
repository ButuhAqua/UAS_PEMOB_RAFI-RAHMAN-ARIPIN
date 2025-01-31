<?php

namespace App\Filament\Admin\Resources\PengajarResource\Api\Transformers;

use App\Models\Pengajar;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property Pengajar $resource
 */
class PengajarTransformer extends JsonResource
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
