<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier_payment extends Model
{
    use HasFactory;
    public function shop()
    {
        return $this->belongsTo('App\Models\Shop','shop_id');
    }
    public function supplier_order()
    {
        return $this->belongsTo('App\Models\Supplier_order','supplier_order_id');
    }
    public function supplier()
    {
        return $this->belongsTo('App\Models\Supplier','supplier_id');
    }
    public function supplier_delivery()
    {
        return $this->belongsTo('App\Models\Delivery_parcel','delivery_id');
    }
    public function shop_credit()
    {
        return $this->belongsTo('App\Models\Shop_credit','shop_credit_id');
    }
    public function supplier_invoice()
    {
        return $this->hasOne('App\Models\Supplier_invoice','supplier_payment_id');
    }
}
