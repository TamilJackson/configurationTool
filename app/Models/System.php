<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'is_active'
    ];
    
    public function product() {
        return $this->hasMany('App\Models\Product');
    }
    public function apiset() {
        return $this->hasMany('App\Models\Apiset');
    }

}
