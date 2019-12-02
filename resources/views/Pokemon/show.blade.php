@extends('layouts.app')
@section("aquiva")
<div class="container">
   <div class="row">
      <div class="col-12">
   <title>Document</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
   <img style="height:100px; width:100px; margin:20;" src:"">
<h1>{{$pokemon->nombre}}</h1>
<a>Peso : {{$pokemon->peso}}</a><br><br>
<a>Estatura : {{$pokemon->estatura}}</a><br><br>
<a>Id : {{$pokemon->id}}</a><br><br>


<h2>Habilidades</h2>

<table class="table">
   <tr>
      <th>Id pokemon</th>
      <th>Id habilidad</th>
   </tr>
@foreach ($aux as $pokemon)
   <tr>
      <td>{{$pokemon->idpokemon}}</td>
      <td>{{$pokemon->idability}}</td>
   </tr>
@endforeach
</table>

<br>
<h3>Añadir Habilidad</h3>
<br>
<form method="post" action="{{url('abilitypokemon')}}">
@csrf
<div class="form-group">
      <input type="text" name="idability" class="form-control" placeholder="Id Habilidad"/>
</div>

<div id="test" class="form-group">
<input type="text" name="idpokemon" class="form-control" hidden value="{{$pokemon->id}}"/>
</div>

<div class="form-group">
   <input type="submit" class="btn btn-primary"/>
</div>
</form>
@endsection