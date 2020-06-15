<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EsnbcSubset extends Model
{
    protected $table = 'esnbc_subsets';
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 
        'batches_info_id',
        'production_date',
        'best_before_date',
        'net_weight',
        'dimensions',
        'customer_purchase_order_number',
        'shipment_tracking_number',
        'update_type',
        'is_updated_to_fabric'
    ];

    public function esnbc()
    {
        return $this->belongsTo('App\Esnbc', 'batches_info_id', 'batches_info');
    }
}
