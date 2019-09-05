<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $primaryKey='idProduct';
    public $table = "product";
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'status',
        'idCategory'
    ];
    public function category()
    {
        return $this->belongsTo('App\Categ');
    }
    public function opinion()
    {
        return $this->hasMany('App\Opinion');
    }
    public function order_product()
    {
        return $this->hasMany('App\OrderProduct');
    }
}
