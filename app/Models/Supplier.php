<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function product()
    {
        return $this->hasMany('App\Models\Supplier_product','supplier_id');
    }
    public function branch()
    {
        return $this->hasMany('App\Models\Supplier_branch','supplier_id');
    }
    public function delivery()
    {
        return $this->hasMany('App\Models\Delivery_parcel','supplier_id');
    }
    public function supplier_report()
    {
        return $this->hasMany('App\Models\Supplier_report','supplier_id');
    }
    public function supplier_order()
    {
        return $this->hasMany('App\Models\Supplier_order','supplier_id');
    }
    public function shop_credit()
    {
        return $this->hasMany('App\Models\Shop_credit','supplier_id');
    }
    public function supplier_payment()
    {
        return $this->hasMany('App\Models\Supplier_payment','supplier_id');
    }
    public function supplier_invoice()
    {
        return $this->hasMany('App\Models\Supplier_invoice','supplier_id');
    }
    public function notice()
    {
        return $this->hasMany('App\Models\Notice','supplier_id');
    }
    public function meeting()
    {
        return $this->hasMany('App\Models\Meeting','supplier_id');
    }
}
