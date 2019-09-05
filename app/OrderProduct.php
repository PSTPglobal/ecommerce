<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    //
    protected $primaryKey='idOrderProduct';
    protected $fillable = [
        'idProduct',
        'idUser',
        'idPayment',
        'total',
        'date',
        'status',
        'quantity'
    ];
    public function payment()
    {
        return $this->belongsTo('App\Payment');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
