<?php

namespace App\Models;


use http\Env\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Superhero;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager as Image;


class Picture extends Model
{
//    protected $guarded=[];


    const PICTURE_URL="storage/images/";
    const PICTURE_PATH="public/images/";

    const THUMBNAIL_URL="storage/thumbnail/";
    const THUMBNAIL_PATH="public/thumbnail/";

    public function superhero(){
        return $this->belongsTo('App\Models\Picture', 'superhero_id');
    }

    protected $fillable=['superhero_id','path','thumbnail'];

    /**
     * @param $file
     * @param $superhero
     * @return bool
     */
    public function insertPicture(UploadedFile $file){
        if($file->storeAs(static::PICTURE_PATH, $file->getClientOriginalName())){

            $fileName =$file->getClientOriginalName();

            $image= new Image();
            $imageData=$image->make(storage_path('app/'.self::PICTURE_PATH.$fileName));
            $imageData->fit(300);
            $imageData->save(storage_path('app/'.self::THUMBNAIL_PATH.$fileName));

            $this->create([
                'superhero_id' =>$_POST['superhero_id'],
                'path' => static::PICTURE_URL.$fileName,
                'thumbnail' => static::THUMBNAIL_URL.$fileName,

            ]);

            return true;
        }
        return false;
    }

}

