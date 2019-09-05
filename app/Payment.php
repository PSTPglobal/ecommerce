<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $primaryKey='idPayment';
    protected $fillable = [
        'payment',
    ];
    public function order_product()
    {
        return $this->hasOne('App\OrderProduct');
    }
}
