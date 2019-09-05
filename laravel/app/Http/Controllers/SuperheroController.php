<?php

namespace App\Http\Controllers;

use App\Models\Superhero;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    /**
     * @param Superhero $superheroes
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Superhero $superheroes)
    {
        return view('superheroes.index', [
            'superheroes' =>$superheroes->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @param Superhero $superhero
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Superhero $superhero)
    {
        return view('superheroes.show', [
            'superhero'=> $superhero
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Superhero  $superhero
     * @return \Illuminate\Http\Response
     */
    public function edit(Superhero $superhero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Superhero  $superhero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Superhero $superhero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Superhero  $superhero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Superhero $superhero)
    {
        $superhero->delete();
        return redirect()->route('superheroes.index');
    }
}
