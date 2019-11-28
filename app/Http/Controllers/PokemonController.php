<?php

namespace App\Http\Controllers;

use App\Pokemon;
use App\AbilityPokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pokemons= Pokemon::all();
        return view("pokemon.index")->with(['pokemons' => Pokemon::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pokemon.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate( $request, [
            "nombre"=>"required",
            "peso"=>"required",
            "estatura"=>"required",
            "imagen"=>"required"
        ]);
        $pokemon = new Pokemon([
            "nombre" => $request->get("nombre"),
            "peso" => $request->get("peso"),
            "estatura" => $request->get("estatura"),
            "imagen" => $request->get("imagen")
        ]);
        $pokemon->save();
        // return redirect()->route('pokemon.create')->with("success", "Pokemon Añadido");
        return redirect()->route('pokemon.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pokemon = Pokemon::find($id);

        $pokemons2 = AbilityPokemon::all();
        $aux = [];
        $a=0;
        foreach ($pokemons2 as $pokemon3) {
            if ($pokemon3->idpokemon==$id) {
                $aux[$a]=$pokemon3;
                $a++;
            }
        }
        return view ("pokemon.show",compact("pokemon","aux"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function edit(Pokemon $pokemon)
    {
        $poke=Pokemon::find($pokemon);
        return view("pokemon.edit",compact("poke"));
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, Pokemon $pokemon)
    {
        $this->validate($request,[
            "nombre" => "required",
            "peso" => "required",
            "estatura" => "required",
            "imagen" => "required",
        ]);
        $pokemon = Pokemon::find($id);
        $pokemon->nombre=$request->get("nombre");
        $pokemon->peso=$request->get("peso");
        $pokemon->estatura=$request->get("estatura");
        $pokemon->imagen=$request->get("imagen");
        $pokemon->save();
        return redirect()->route("pokemon.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pokemon $id)
    {
        $aux = Pokemon::find($id);
        $aux->delete();
        // return redirect()->route('pokemon.index');
    }
}
