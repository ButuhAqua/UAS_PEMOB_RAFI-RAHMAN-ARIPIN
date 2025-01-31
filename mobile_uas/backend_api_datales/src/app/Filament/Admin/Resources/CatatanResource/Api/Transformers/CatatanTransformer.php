<?php

namespace App\Filament\Admin\Resources\CatatanResource\Api\Transformers;

use App\Models\Catatan;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property Catatan $resource
 */
class CatatanTransformer extends JsonResource
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
