<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financial_report extends Model
{
    use HasFactory;
    public function finance()
    {
        return $this->belongsTo('App\Models\Employee_profile','army_id');
    }
}
