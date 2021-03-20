<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier_product extends Model
{
    use HasFactory;
    public function supplier()
    {
        return $this->belongsTo('App\Models\Supplier','supplier_id');
    }
    public function supplier_order()
    {
        return $this->hasMany('App\Models\Supplier_order','supplier_product_id');
    }
}
