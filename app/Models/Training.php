<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;
    public function team()
    {
        return $this->belongsTo('App\Models\Team','team_id');
    }
    public function user()
    {
       return $this->belongsToMany('App\Models\User','training_users','training_id','user_id')->withPivot('is_active');
    }
    public function task()
    {
        return $this->hasMany('App\Models\Task','training_id');
    }
}
