<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EsnbcSubsetForQRCode extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // print_r($this->esnbc->product_id);exit;
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'batches_info_id' => $this->batches_info_id,
            'production_date' => $this->production_date,
            'best_before_date' => $this->best_before_date,
            'net_weight' => $this->net_weight,
            'dimensions' => $this->dimensions,
            'customer_purchase_order_number' => $this->customer_purchase_order_number,
            'shipment_tracking_number' => $this->shipment_tracking_number,
            'product_id' => $this->esnbc->product_id,
            'product_name' => $this->product_name,
            'certification' => $this->certification,
            'supplier' => $this->supplier,
            'origin' => $this->origin,
            'price' => $this->price,
        ];        
    }
}
