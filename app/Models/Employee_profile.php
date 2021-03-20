<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee_profile extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function task_point()
    {
        return $this->hasOne('App\Models\Task_point','employee_id');
    }
    public function earning()
    {
        return $this->hasOne('App\Models\Earning','employee_id');
    }
    public function delivery_task()
    {
       return $this->hasMany('App\Models\Delivery_task','head_id');
    }
    public function delivery_rider()
    {
       return $this->hasMany('App\Models\Delivery_task','rider_id');
    }
    public function marketing_task()
    {
       return $this->hasMany('App\Models\Marketing_task','head_id');
    }
    public function marketing_army()
    {
       return $this->hasMany('App\Models\Marketing_task','army_id');
    }
    public function marketing_head_task()
    {
       return $this->hasMany('App\Models\Marketing_task','head_id');
    }
    public function marketing_head_employee()
    {
       return $this->hasMany('App\Models\Marketing_task','emp_id');
    }
    public function delivery_head_task()
    {
       return $this->hasMany('App\Models\Delivery_head_task','head_id');
    }
    public function delivery_head_employee()
    {
       return $this->hasMany('App\Models\Delivery_head_task','emp_id');
    }
    public function service_task()
    {
       return $this->hasMany('App\Models\Customer_service_task','head_id');
    }
    public function service_army()
    {
       return $this->hasMany('App\Models\Customer_service_task','army_id');
    }
    public function service_head_task()
    {
       return $this->hasMany('App\Models\Service_head_task','head_id');
    }
    public function service_head_employee()
    {
       return $this->hasMany('App\Models\Service_head_task','emp_id');
    }
    public function finance_task()
    {
       return $this->hasMany('App\Models\Financial_task','head_id');
    }
    public function finance_army()
    {
       return $this->hasMany('App\Models\Financial_task','army_id');
    }
    public function finance_head_task()
    {
       return $this->hasMany('App\Models\Financial_manager_task','head_id');
    }
    public function finance_head_employee()
    {
       return $this->hasMany('App\Models\Financial_manager_task','emp_id');
    }
    public function training_task()
    {
       return $this->hasMany('App\Models\Training_task','emp_id');
    }
    public function intern_task()
    {
       return $this->hasMany('App\Models\Training_task','intern_id');
    }
    public function delivery_rider_report()
    {
        return $this->hasMany('App\Models\Delivery_rider_report','rider_id');
    }
    public function delivery_head_report()
    {
        return $this->hasMany('App\Models\Delivery_head_report','head_id');
    }
    public function service_report()
    {
        return $this->hasMany('App\Models\Customer_service_report','army_id');
    }
    public function service_head_report()
    {
        return $this->hasMany('App\Models\Customer_service_head_report','head_id');
    }
    public function finance_report()
    {
        return $this->hasMany('App\Models\Financial_report','army_id');
    }
    public function finance_head_report()
    {
        return $this->hasMany('App\Models\Financial_head_report','head_id');
    }
    public function marketing_report()
    {
        return $this->hasMany('App\Models\Marketing_report','army_id');
    }
    public function marketing_head_report()
    {
        return $this->hasMany('App\Models\Marketing_head_report','head_id');
    }
    public function ceo_report()
    {
        return $this->hasMany('App\Models\Ceo_report','emp_id');
    }
    public function training_report()
    {
        return $this->hasMany('App\Models\Training_report','emp_id');
    }
    public function employee_payment()
    {
        return $this->hasMany('App\Models\Employee_payment','emp_id');
    }
    public function meeting()
    {
        return $this->hasMany('App\Models\Schedule_meeting','emp_id');
    }
}
