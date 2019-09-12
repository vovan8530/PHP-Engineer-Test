<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PictureController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('pictures.create');
    }

    /**
     * @param Request $request
     * @param Picture $picture
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Picture $picture)
    {
        if($request->has('file')){
            $picture->insertPicture($request->file('file'));
        }
        return redirect()->back();
    }


    /**
     * @param Picture $picture
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Picture $picture)
    {
        $picture->delete();
        $picture_path= substr($picture->path,8);
        $picture_thumbnail= substr($picture->thumbnail,8);
        Storage::disk('public')->delete($picture_path,$picture_thumbnail);
        return redirect()->back();
    }
}
