<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Esnbc extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // print_r($request->certification);exit;
        // return parent::toArray($request);
        return [
            'batches_info' => $this->batches_info,
            'product_id' => $this->product_id,
            'product_name' => $this->product_name,
            'certification' => $this->certification,
            'supplier' => $this->supplier,
            'origin' => $this->origin,
            'price' => $this->price,
            'update_type' => $this->update_type,
            'is_updated_to_fabric' => $this->is_updated_to_fabric,
        ];
    }
}
