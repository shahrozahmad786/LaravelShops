<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use SoftDeletes;
    protected $guarded= [];
    protected $dates=['deleted_at'];

    
    public function users()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
