@extends('layouts.app')
@section("aquiva")
<div class="container">
   <div class="row">
      <div class="col-12">
            <h3>  Lista pokemon </h3>
            <br>
            <div align="right">
            <a href="{{route('pokemon.create')}}">Crear</a>
            </div>
            <table class="table">
               <tr>
                  <th>Nombre</th>
                  <th>Peso</th>
                  <th>Estatura</th>
                  <th>Imagen</th>
                  <th>Ver</th>
               </tr>
            @foreach ($pokemons as $pokemon)
               <tr>
                  <td>{{$pokemon->nombre}}</td>
                  <td>{{$pokemon->peso}}</td>
                  <td>{{$pokemon->estatura}}</td>
                  <td>{{$pokemon->imagen}}</td>
               <td><a href="{{route('pokemon.show',$pokemon->id)}}">Ver</a></td>
               </tr>
            @endforeach
            </table>
            </div>
      </div>
   </div>
</div>
@endsection