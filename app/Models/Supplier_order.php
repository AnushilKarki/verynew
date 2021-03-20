<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier_order extends Model
{
    use HasFactory;
    public function supplier()
    {
        return $this->belongsTo('App\Models\Supplier','supplier_id');
    }
    public function supplier_product()
    {
        return $this->belongsTo('App\Models\Supplier_product','supplier_product_id');
    }
    public function supplier_payment()
    {
        return $this->hasMany('App\Models\Supplier_payment','supplier_order_id');
    }
}
