<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Esnbc extends Model
{
    protected $table = 'esnbcs';
    protected $primaryKey = 'batches_info';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'batches_info', 
        'product_id', 'product_name', 'certification', 'supplier', 'origin', 'price', 'update_type'
        , 'is_updated_to_fabric'
    ];

    public function esnbc_subsets()
    {
        return $this->hasMany('App\EsnbcSubset', 'batches_info_id', 'batches_info');
    }
}
