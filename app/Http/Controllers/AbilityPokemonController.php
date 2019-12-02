<?php

namespace App\Http\Controllers;

use App\AbilityPokemon;
use Illuminate\Http\Request;
use Auth;

class AbilityPokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("abilitypokemon.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()) {

            $this->validate( $request, [
                "idability"=>"required",
            ]);
      
            $comment = new AbilityPokemon([
                "idability" => $request->get("idability"),
                "idpokemon" => $request->get("idpokemon"),
            ]);
            $comment->save();
            return redirect()->route('pokemon.index');
        
        }
        else {
            return "Tienes que estar logeado para poder añadir habilidad";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AbilityPokemon  $abilityPokemon
     * @return \Illuminate\Http\Response
     */
    public function show(AbilityPokemon $abilityPokemon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AbilityPokemon  $abilityPokemon
     * @return \Illuminate\Http\Response
     */
    public function edit(AbilityPokemon $abilityPokemon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AbilityPokemon  $abilityPokemon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AbilityPokemon $abilityPokemon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AbilityPokemon  $abilityPokemon
     * @return \Illuminate\Http\Response
     */
    public function destroy(AbilityPokemon $abilityPokemon)
    {
        //
    }
}
