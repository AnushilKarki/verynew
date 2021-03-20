<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financial_task extends Model
{
    use HasFactory;
    public function head()
    {
       return $this->belongsTo('App\Models\Employee_profile','head_id');
    }
    public function army()
    {
        return $this->belongsTo('App\Models\Employee_profile','army_id');
    }
    public function finance()
    {
        return $this->belongsTo('App\Models\Finance','finance_id');
    }
}
