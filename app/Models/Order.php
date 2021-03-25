<?php

namespace App\Models;
use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function customer_purchase()
    {
        return $this->hasOne('App\Models\Customer_purchase','order_id');
    }
    public function attribute()
    {
        return $this->hasOne('App\Models\Order_attribute','order_id');
    }
    
    public function gift()
    {
        return $this->belongsToMany('App\Models\Gift');
    }
    public function sub_order()
    {
        return $this->hasMany('App\Models\Sub_order','order_id');
    }
    public function item()
     {
        return $this->belongsToMany('App\Models\Product','order_items','order_id','product_id')->withPivot('quantity','price');
     }
     public function delivery()
     {
         return $this->hasOne('App\Models\Delivery_parcel','order_id');
     }
     public function generateSubOrders()
     {
         $orderItems = $this->item;
 
         foreach($orderItems->groupBy('shop_id') as $shopId => $products) {
 
             $shop = Shop::find($shopId);
 
             $suborder = $this->sub_order()->create([
                 'order_id'=> $this->id,
                 'shop_id'=> $shop->user_id ?? 1,
                 'grand_total'=> $products->sum('pivot.price'),
                 'item_count'=> $products->count()
             ]);
 //shop id insub_order table refers to seller id sorry for error
             foreach($products as $product) {
                 $suborder->sub_order_items()->attach($product->id, ['price' => $product->pivot->price, 'quantity' => $product->pivot->quantity]);
             }
 
         }
 
     }
}
