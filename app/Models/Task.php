<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    public function marketing()
    {
        return $this->belongsTo('App\Models\Marketing','marketing_id');
    }
    public function service()
    {
        return $this->belongsTo('App\Models\Service','service_id');
    }
    public function training()
    {
        return $this->belongsTo('App\Models\Training','training_id');
    }
    public function finance()
    {
        return $this->belongsTo('App\Models\Finance','finance_id');
    }
    public function delivery()
    {
        return $this->belongsTo('App\Models\Delivery','delivery_id');
    }
    public function employee_payment()
    {
        return $this->hasMany('App\Models\Employee_payment','task_id');
    }
}
