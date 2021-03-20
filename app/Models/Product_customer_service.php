<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_customer_service extends Model
{
    use HasFactory;
    public function product()
    {
        return $this->belongsTo('App\Models\Product','product_id');
    }
    public function customer()
    {
        return $this->belongsTo('App\Models\User','customer_id');
    }
    public function employee()
    {
        return $this->belongsTo('App\Models\User','employee_user_id');
    }
}
