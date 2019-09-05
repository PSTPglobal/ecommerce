<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    //
    protected $primaryKey='idOpinion';
    public $table = "opinion";
    protected $fillable = [
        'opinion',
        'qualification',
        'idProduct'
    ];
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
