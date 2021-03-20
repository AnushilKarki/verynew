<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
class User extends \TCG\Voyager\Models\User
{
    use HasFactory, Notifiable,TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function shop()
    {
        return $this->hasOne('App\Models\Shop','user_id');
    }
    public function address()
    {
        return $this->hasOne('App\Models\Address','user_id');
    }
    public function comment()
     {
         return $this->hasMany('App\Models\Comment','user_id');
     }
     public function productrating()
     {
         return $this->hasMany('App\Models\Product_rating','user_id');
     }
     public function wishlist()
     {
         return $this->hasMany('App\Models\Wishlist','user_id');
     }
     public function product_customer_service()
     {
         return $this->hasMany('App\Models\Product_customer_service','customer_id');
     }
     public function product_employee_service()
     {
         return $this->hasMany('App\Models\Product_customer_service','employee_user_id');
     }
     public function customer_service()
     {
         return $this->hasMany('App\Models\Customer_service','customer_id');
     }
     public function employee_service()
     {
         return $this->hasMany('App\Models\Customer_service','employee_user_id');
     }
     public function product_review()
     {
         return $this->hasMany('App\Models\Product_review','user_id');
     }
     public function post_review()
     {
         return $this->hasMany('App\Models\Post_review','post_id');
     }
     public function complain()
     {
         return $this->hasMany('App\Models\Complain','user_id');
     }
     public function discount()
     {
         return $this->hasOne('App\Models\Discount','user_id');
     }
     public function browsing_history()
     {
         return $this->hasMany('App\Models\Browsing_history','user_id');
     }
     public function note()
     {
         return $this->hasMany('App\Models\Note','user_id');
     }
     public function credit()
     {
         return $this->hasMany('App\Models\Credit','user_id');
     }
     public function profile()
     {
         return $this->hasOne('App\Models\Profile','user_id');
     }
     public function order()
     {
         return $this->hasMany('App\Models\Order','user_id');
     }
     public function customer_purchase()
     {
         return $this->hasMany('App\Models\Customer_purchase','user_id');
     }
     public function order_point()
     {
         return $this->hasOne('App\Models\Order_point','user_id');
     }
     public function payment()
     {
         return $this->hasMany('App\Models\Customer_payment','user_id');
     }
     public function customer_invoice()
     {
         return $this->hasMany('App\Models\Customer_invoice','user_id');
     }
     public function supplier()
     {
         return $this->hasOne('App\Models\Supplier','user_id');
     }
     public function delivery()
     {
         return $this->hasMany('App\Models\Delivery_parcel','user_id');
     }
     public function team_leader()
     {
         return $this->hasMany('App\Models\Team','team_leader_id');
     }
     public function team()
     {
         return $this->belongsToMany('App\Models\Team');
     }
     public function notice()
     {
         return $this->hasMany('App\Models\Notice','user_id');
     }
     public function training()
     {
         return $this->belongsToMany('App\Models\Training');
     }
     public function meeting()
     {
         return $this->hasMany('App\Models\Meeting','user_id');
     }
     public function employee()
     {
         return $this->hasOne('App\Models\Employee_profile','user_id');
     }
     public function shop_rating()
     {
         return $this->hasMany('App\Models\Shop_rating','user_id');
     }
}
