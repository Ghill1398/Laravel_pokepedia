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
         
      <form method="post" action="{{url('ability')}}">
         @csrf

         <div class="form-group">
            <input type="text" name="habilidad" class="form-control" placeholder="Nombre"/>
         </div>
         <div class="form-group">
            <input type="submit" class="btn btn-primary"/>
         </div>
      </form>
      </div>
   </div>
@endsection