<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categ extends Model
{
    //
    protected $primaryKey='idCategory';
    protected $fillable = [
        'category'
    ];
    public function product()
    {
        return $this->hasMany('App\Product');
    }
}
