<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer_payment extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function shop()
    {
        return $this->belongsTo('App\Models\Shop','shop_id');
    }
    public function order()
    {
        return $this->belongsTo('App\Models\Order','order_id');
    }
    public function return()
    {
        return $this->hasOne('App\Models\Customer_purchase_return','return_id');
    }
    public function easy_order()
    {
        return $this->belongsTo('App\Models\Easy_order','easy_order_id');
    }
    public function credit()
    {
        return $this->belongsTo('App\Models\Credit','credit_id');
    }
    public function customer_invoice()
    {
        return $this->hasOne('App\Models\Customer_payment','payment_id');
    }
}
