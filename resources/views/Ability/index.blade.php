<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
    <div>
       <div>
         <br>
         <h3>  Lista Habilidades </h3>
         <br>
         <div align="right">
         <a href="{{route('ability.create')}}">Crear</a>
         </div>
         <table>
            <tr>
               <th>Habilidad</th>
            </tr>
         @foreach ($abilities as $ability)
            <tr>
               <td>{{$ability["habilidad"]}}</td>
            </tr>
         @endforeach
         </table>
       </div>
    </div>
</body>
</html>