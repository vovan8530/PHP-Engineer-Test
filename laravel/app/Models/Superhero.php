<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Superhero extends Model
{

    protected $guarded=[];

//    protected $fillable = [
//        "nickname",
//        "real_name",
//        "origin_description​",
//        "superpowers",
//        "catch_phrase",
//    ];

//    protected $with = [
//        'pictures'
//    ];
//

    public function pictures(){
        return $this->hasMany('App\Models\Picture');
    }

}
