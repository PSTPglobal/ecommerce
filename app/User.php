<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey='idUser';
    protected $fillable = [
        'name',
        'email',
        'password',
        'idRol'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function rol()
    {
        return $this->belongsTo('App\Rol');
    }
    public function direction()
    {
        return $this->hasMany('App\Direction');
    }
    public function order_product()
    {
        return $this->hasMany('App\OrderProduct');
    }
}
