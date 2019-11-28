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
   <img style="height:100px; width:100px; margin:20;" src:"">
<h1>{{$pokemon->nombre}}</h1>
<a>Peso : {{$pokemon->peso}}</a><br><br>
<a>Estatura : {{$pokemon->estatura}}</a><br><br>


<h2>Habilidades</h2>

<table>
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
</body>
</html>