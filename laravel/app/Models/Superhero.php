<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Superhero extends Model
{
    protected $fillable = [
        "nickname",
        "real_name",
        "origin_description​",
        "superpowers",
        "catch_phrase",
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pictures(){
        return $this->hasMany('App\Models\Picture');
    }

}
