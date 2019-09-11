<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use App\Models\Superhero;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class PictureController extends Controller
{


    /**
     * @param Request $request
     * @param Picture $pictures
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index(Request $request, Picture $pictures)
    {
        return view('pictures.index',[
            'pictures' => $pictures->paginate(8),
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pictures.create');
    }

    /**
     * @param Request $request
     * @param Picture $picture
     * @param ImageConfig $config
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
     * Display the specified resource.
     *
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function show(Picture $picture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function edit(Picture $picture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Picture $picture)
    {
        //
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
