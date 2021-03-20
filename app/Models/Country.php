<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    public function currency()
    {
        return $this->hasOne('App\Models\Currency','country_id');
    }
    public function tax()
    {
        return $this->hasOne('App\Models\Tax','country_id');
    }
    public function vat()
    {
        return $this->hasOne('App\Models\Vat','country_id');
    }
}
