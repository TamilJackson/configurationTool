<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'system_id',
        'is_active'
    ];

    public function system() {
        return $this->belongsTo('App\Models\System');
    }
    public function apiset() {
        return $this->hasMany('App\Models\Apiset');
    }

}
