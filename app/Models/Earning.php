<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Earning extends Model
{
    use HasFactory;
    public function employee()
    {
      return $this->belongsTo('App\Models\Employee_profile','employee_id');
    }
    public function team()
    {
      return $this->belongsTo('App\Models\Team','team_id');
    }
}
