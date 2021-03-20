<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task_point extends Model
{
    use HasFactory;
    public function employee()
    {
        return $this->belongsTo('App\Models\Employee_profile','employee_id');
    }
}
