<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Superhero;



class Picture extends Model
{
    protected $with = [
        'superhero'
    ];

    const PICTURE_PATH="storage/images";

    public function superhero(){
        return $this->belongsTo(Superhero::class)->without('pictures');
    }

    protected $fillable=['path','superhero_id'];

    /**
     * @param $file
     * @param $superhero
     * @return bool
     */
    public function insertPicture($file){
        if($file->storeAs('public/images', $file->getClientOriginalName())){
            $this->create([
                'path' => static::PICTURE_PATH.$file->getClientOriginalName(),
                'superhero_id' => 1,
            ]);
            return true;
        }
        return false;
    }

}

