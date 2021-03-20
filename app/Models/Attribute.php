<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;
    public function product()
    {
    return $this->belongsToMany('App\Models\Product');
    }
    public function attribute()
    {
        return $this->hasOne('App\Models\Order_attribute','attribute_id');
    }
}
