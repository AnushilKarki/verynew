<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    use HasFactory;
    public function team()
    {
        return $this->belongsTo('App\Models\Team','team_id');
    }
    public function task()
    {
        return $this->hasMany('App\Models\Task','finance_id');
    }
    public function financial_task()
    {
        return $this->hasMany('App\Models\Financial_task','finance_id');
    }
    public function financial_manager_task()
    {
        return $this->hasMany('App\Models\Financial_manager_task','finance_id');
    }
}
