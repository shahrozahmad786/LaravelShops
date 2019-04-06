<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait { restore as private restoreA; }
     use SoftDeletes { restore as private restoreB; }

     public function restore()
    {
        $this->restoreA();
        $this->restoreB();
    }
    
    protected $dates=['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'email', 'password','role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function profiles()
    {
      
        return $this->hasMany('App\Profile');

    }


    public function orders()
    {
      
        return $this->hasMany('App\Order');

    }


}
