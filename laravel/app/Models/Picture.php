<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Intervention\Image\ImageManager as Image;


class Picture extends Model
{

    const PICTURE_URL="storage/images/";
    const PICTURE_PATH="public/images/";

    const THUMBNAIL_URL="storage/thumbnail/";
    const THUMBNAIL_PATH="public/thumbnail/";

    protected $fillable=['superhero_id','path','thumbnail'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function superhero(){
        return $this->belongsTo('App\Models\Picture', 'superhero_id');
    }

    /**
     * @param UploadedFile $file
     * @return bool
     */
    public function insertPicture(UploadedFile $file){
        if($file->storeAs(static::PICTURE_PATH, $file->getClientOriginalName())){

            $fileName =$file->getClientOriginalName();

            $image= new Image();
            $imageData=$image->make(storage_path('app/'.self::PICTURE_PATH.$fileName));
            $imageData->fit(250);
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

