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
            'ID' => $this->id,
            'Batches Info' => $this->batches_info_id,
            'Production Date' => $this->production_date,
            'Best Before Date' => $this->best_before_date,
            'Net Weight(Kg)' => $this->net_weight,
            'Dimensions(m)' => $this->dimensions,
            'Customer Purchase Order Number' => $this->customer_purchase_order_number,
            'Shipment Tracking Number' => $this->shipment_tracking_number,
            'Product ID' => $this->esnbc->product_id,
            'Product Name' => $this->esnbc->product_name,
            'Certification' => $this->esnbc->certification,
            'Supplier' => $this->esnbc->supplier,
            'Origin' => $this->esnbc->origin,
            'Price' => $this->esnbc->price,
        ];        
    }
}
