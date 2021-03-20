<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery_rider_report extends Model
{
    use HasFactory;
    public function rider()
    {
        return $this->belongsTo('App\Models\Employee_profile','rider_id');
    }
}
