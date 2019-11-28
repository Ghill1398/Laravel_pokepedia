<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   
</head>
<body>
   <div class="row">
      <div class="column">
         <br>
         <h3>Añadir comentario</h3>
         <br>
         
      <form method="post" action="{{url('post')}}">
         @csrf

         <div class="form-group">
            <input type="text" name="content" class="form-control" placeholder="Comentario"/>
         </div>
         <div class="form-group">
            <input type="submit"/>
         </div>
      </form>
      </div>
   </div>
</body>
</html>