<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery_package extends Model
{
    use HasFactory;
    public function delivery_package()
    {
        return $this->hasOne('App\Models\Delivery_package','delivery_package_id');
    }

}
