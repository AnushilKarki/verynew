<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team_goal extends Model
{
    use HasFactory;
    public function team()
    {
        return $this->belongsTo('App\Models\Team','team_id');
    }
}
