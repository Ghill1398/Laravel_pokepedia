@extends('layouts.app')
@section("aquiva")
<div class="container">
   <div class="row">
      <div class="col-12">
         <h3>  Lista posts </h3>
         <br>
         <div align="right">
         <a href="{{route('post.create')}}">Crear</a>
         </div>
         <table class="table">
            <tr>
               <th>Id</th>
               <th>Subject</th>
               <th>idpokemon</th>
               <th>content</th>
               <th>Ver</th>
            </tr>
         @foreach ($posts as $post)
            <tr>
               <td>{{$post->id}}</td>
               <td>{{$post->subject}}</td>
               <td>{{$post->idpokemon}}</td>
               <td>{{$post->content}}</td>
            <td><a href="{{route('post.show',$post->id)}}">Ver</a></td>

            </tr>
         @endforeach
         </table>
       </div>
    </div>
@endsection