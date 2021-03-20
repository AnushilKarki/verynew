<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_review extends Model
{
    use HasFactory;
    public function post()
    {
       return $this->belongsTo(Voyager::modelClass('Post'),'post_id');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
