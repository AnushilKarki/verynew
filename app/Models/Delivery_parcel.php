<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery_parcel extends Model
{
    use HasFactory;
    public function shop()
    {
        return $this->belongsTo('App\Models\Shop','shop_id');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function supplier()
    {
        return $this->belongsTo('App\Models\Supplier','supplier_id');
    }
    public function order()
    {
        return $this->belongsTo('App\Models\Order','order_id');
    }

    public function supplier_payment()
    {
        return $this->hasMany('App\Models\Supplier_payment','delivery_id');
    }
    public function delivery_task()
    {
        return $this->hasOne('App\Models\Delivery_task','delivery_id');
    }
    public function delivery_package()
    {
        return $this->belongsTo('App\Models\Delivery_package','delivery_package_id');
    }
}
