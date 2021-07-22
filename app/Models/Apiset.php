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
        'name',
        'system_id',
        'product_id',
        'is_active'
    ];

    public function system() {
        return $this->belongsTo('App\Models\System');
    }
    public function product() {
        return $this->belongsTo('App\Models\Product');
    }

}
