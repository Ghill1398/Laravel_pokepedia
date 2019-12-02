@extends('layouts.app')
@section("aquiva")
<div class="container">
   <div class="row">
      <div class="col-4">
         <h3>  Lista Habilidades </h3>
         <br>
         <div align="right">
         <a href="{{route('ability.create')}}">Crear</a>
         </div>
         <table class="table">
            <tr>
               <th>Id</th>
               <th>Habilidad</th>
            </tr>
         @foreach ($abilities as $ability)
            <tr>
               <td>{{$ability["id"]}}</td>
               <td>{{$ability["habilidad"]}}</td>
            </tr>
         @endforeach
         </table>
       </div>
    </div>
@endsection