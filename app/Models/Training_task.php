<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training_task extends Model
{
    use HasFactory;
    public function employee()
    {
       return $this->belongsTo('App\Models\Employee_profile','emp_id');
    }
    public function intern()
    {
        return $this->belongsTo('App\Models\Employee_profile','intern_id');
    }
    public function training()
    {
        return $this->belongsTo('App\Models\Training','training_id');
    }
}
