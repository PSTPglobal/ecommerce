<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //
    protected $table='rol';
    protected $primaryKey='idRol';
    protected $fillable=[
        'idRol',
        'rol'
    ];
    public function user()
    {
        return $this->hasOne('App\User');
    }
}
