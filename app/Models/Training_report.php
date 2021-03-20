<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training_report extends Model
{
    use HasFactory;
    public function trainer()
    {
        return $this->belongsTo('App\Models\Employee_profile','emp_id');
    }
}
