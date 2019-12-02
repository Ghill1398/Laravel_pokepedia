@extends('layouts.app')
@section("aquiva")
<div class="container">
   <div class="row">
      <div class="col-12">
   <title>Document</title>
   
</head>
<body>
   <div class="row">
      <div class="column">
         <br>
         <h3>Añadir post</h3>
         <br>
      <form method="post" action="{{url('post')}}">
         @csrf
         <div class="form-group">
            <input type="text" name="subject" class="form-control" placeholder="subject"/>
         </div>
         <div class="form-group">
            <input type="text" name="idpokemon" class="form-control" placeholder="idpokemon"/>
         </div>
         <div class="form-group">
               <input type="text" name="content" class="form-control" placeholder="content"/>
         </div>
         <div class="form-group">
            <input type="submit"/>
         </div>
      </form>
      </div>
   </div>
@endsection