<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class Superhero extends Model
{
    protected $perPage = 5;

    protected $fillable = [
        "nickname",
        "real_name",
        "origin_description​",
        "superpowers",
        "catch_phrase",
    ];



}
