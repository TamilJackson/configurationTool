<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apiset extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'api',
        'system_id',
        'product_id',
        'group_name',
        'parent_api_id',
        'values_to_replace',
        'order_by',
        'is_active',
    ];

    public function system() {
        return $this->belongsTo('App\Models\System');
    }
    public function product() {
        return $this->belongsTo('App\Models\Product');
    }

}
