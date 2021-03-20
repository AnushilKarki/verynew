<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee_payment extends Model
{
    use HasFactory;
    public function shop()
    {
        return $this->belongsTo('App\Models\Shop','shop_id');
    }
    public function task()
    {
        return $this->belongsTo('App\Models\Task','task_id');
    }
    public function employee()
    {
        return $this->belongsTo('App\Models\Employee_profile','emp_id');
    }
}
