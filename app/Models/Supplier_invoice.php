<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier_invoice extends Model
{
    use HasFactory;
    public function supplier()
    {
        return $this->belongsTo('App\Models\Supplier','supplier_id');
    }
    public function supplier_payment()
    {
        return $this->belongsTo('App\Models\Supplier_payment','supplier_payment_id');
    }
}
