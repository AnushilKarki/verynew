<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer_service_head_task extends Model
{
    use HasFactory;
    public function head()
    {
       return $this->belongsTo('App\Models\Employee_profile','head_id');
    }
    public function employee()
    {
        return $this->belongsTo('App\Models\Employee_profile','emp_id');
    }
    public function service()
    {
        return $this->belongsTo('App\Models\Service','service_id');
    }
    public function shop()
    {
       return $this->belongsTo('App\Models\Shop','shop_id');
    }
}
