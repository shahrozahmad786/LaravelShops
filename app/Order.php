<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{

    use SoftDeletes;
    protected $guarded= [];
    protected $dates=['deleted_at'];


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
