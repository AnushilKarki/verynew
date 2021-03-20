<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Browsing_history extends Model
{
    use HasFactory;
    public function product()
    {
    return $this->belongsTo('App\Models\Product','product_id');
    }
    public function shop()
    {
    return $this->belongsTo('App\Models\Shop','shop_id');
    }
    public function user()
    {
    return $this->belongsTo('App\Models\User','user_id');
    }
    public function post()
    {
        return $this->belongsTo(Voyager::modelClass('Post'),'post_id');
    }
}
