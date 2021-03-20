<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer_service extends Model
{
    use HasFactory;
    public function shop()
    {
        return $this->belongsTo('App\Models\Shop','shop_id');
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
