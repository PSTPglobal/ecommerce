<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    //
    protected $primaryKey='idDirection';
    protected $fillable = [
        'street',
        'number',
        'colony',
        'city',
        'state',
        'idUser'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
