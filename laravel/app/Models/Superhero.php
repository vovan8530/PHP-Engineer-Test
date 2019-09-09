<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \App\Models\Picture;

class Superhero extends Model
{

    protected $fillable = [
        "nickname",
        "real_name",
        "origin_description​",
        "superpowers",
        "catch_phrase",
    ];

//    protected $with = [
//        'pictures'
//    ];

//    public function getRouteKeyName()
//    {
//        return 'id';
//    }
//
//    public function pictures(){
//        return $this->hasMany(Picture::class);
//    }

}
