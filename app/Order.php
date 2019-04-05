<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function users()
    {
        return $this->belongsTo('App\User','user_id');

    }

    public function payments()
    {
        return $this->belongsTo('App\Payment','payment_id');
        
    }
   
    public function products()
    {
        return $this->belongsTo('App\Product','product_id');
        
    }

}
