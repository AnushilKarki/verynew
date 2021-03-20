<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    use HasFactory;
    public function product()
    {
       return $this->belongsToMany('App\Models\Product','gift_products','gift_id','product_id');
    }
    public function order()
    {
       return $this->belongsToMany('App\Models\Order','gift_order_details','gift_id','order_id');
    }
}
