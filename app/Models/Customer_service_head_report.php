<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer_service_head_report extends Model
{
    use HasFactory;
    public function service_head()
    {
        return $this->belongsTo('App\Models\Employee_profile','head_id');
    }
}
