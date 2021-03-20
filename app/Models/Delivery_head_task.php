<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery_head_task extends Model
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
    public function delivery()
    {
        return $this->belongsTo('App\Models\Delivery','delivery_id');
    }
    public function shop()
    {
       return $this->belongsTo('App\Models\Shop','shop_id');
    }
}
