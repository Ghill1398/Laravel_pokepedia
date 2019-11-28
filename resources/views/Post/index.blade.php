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
         <h3>  Lista posts </h3>
         <br>
         <div align="right">
         <a href="{{route('post.create')}}">Crear</a>
         </div>
         <table>
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
</body>
</html>