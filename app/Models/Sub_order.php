<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_order extends Model
{
    use HasFactory;
    public function order()
    {
        return $this->belongsTo('App\Models\Order','order_id');
    }
    public function shop()
    {
        return $this->belongsTo('App\Models\Shop','shop_id');
    }
    public function sub_order_items()
    {
       return $this->belongsToMany('App\Models\Product','sub_order_items','sub_order_id','product_id')->withPivot('quantity','price');
    }
}
