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
<h1>{{$post->subject}}</h1>
<a>{{$post->content}}</a><br><br>
<a>id Pokemon : {{$post->idpokemon}}</a><br><br>
<div align="right">
      <a href="{{route('comment.create')}}">Comentar</a>
      {{-- <td><a href="{{action("CommentController@create",$post->idpost)}}">Comentar</a></td> --}}
</div>
<h2>Comentarios</h2>

<table>
   <tr>
      <th>Idpost</th>
      <th>idUsuario</th>
      <th>content</th>
   </tr>
@foreach ($aux as $comment)
   <tr>
      <td>{{$comment->idpost}}</td>
      <td>{{$comment->idusuario}}</td>
      <td>{{$comment->content}}</td>
   </tr>
@endforeach
</table>
</body>
</html>