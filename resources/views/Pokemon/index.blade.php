<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div>
       <div>
         <br>
         <h3>  Lista pokemon </h3>
         <br>
         <div align="right">
         <a href="{{route('pokemon.create')}}">Crear</a>
         </div>
         <table>
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
</body>
</html>