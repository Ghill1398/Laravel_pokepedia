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
         <h3>Añadir datos</h3>
         <br>
         
      <form method="post" action="{{url('pokemon')}}">
         @csrf

         <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre"/>
         </div>
         <div class="form-group">
               <input type="text" name="peso" class="form-control" placeholder="Peso"/>
         </div>
         <div class="form-group">
               <input type="text" name="estatura" class="form-control" placeholder="Estatura"/>
         </div>
         <div class="form-group">
               <input type="file" name="imagen" class="form-control" placeholder="Imagen"/>
         </div>
         <div class="form-group">
               <input type="submit"/>
         </div>
      </form>
      </div>
   </div>
@endsection