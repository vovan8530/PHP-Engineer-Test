<?php

namespace App\Http\Controllers;


use App\Models\Picture;
use App\Models\Superhero;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SuperheroController extends Controller
{
    /**
     * @param Superhero $superheroes
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Superhero $superheroes)
    {
        return view('superheroes.index', [
            'superheroes' =>$superheroes->paginate(5)
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('superheroes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Picture $picture)
    {
        $superhero = new Superhero();
        $superhero->create($request->all());


        return redirect()->route('superheroes.index');

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
     * @param Superhero $superhero
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Superhero $superhero)
    {

        return view('superheroes.edit', ['superhero' => $superhero]);
    }

    /**
     * @param Request $request
     * @param Superhero $superhero
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Superhero $superhero)
    {
        $superhero->update($request->all());
        return redirect()->route('superheroes.index');
    }

    /**
     * @param Superhero $superhero
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Superhero $superhero)
    {
        $superhero->delete();
        return redirect()->back();
    }
}
