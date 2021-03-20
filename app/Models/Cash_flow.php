<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cash_flow extends Model
{
    use HasFactory;
    public function shop()
    {
        return $this->belongsTo('App\Models\Shop','shop_id');
    }
}
