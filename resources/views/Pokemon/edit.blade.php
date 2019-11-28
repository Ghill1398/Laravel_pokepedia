
<div>
   <div>

      <br>
      <h3>Editar</h3>
      <br>
      <form method="post" action="{{"PokemonController@update",$id}}">
         {{ csrf_field() }}
         <div>
               <input type="text" name="nombre" value="{{$pokemon->nombre}}" placeholder="Nombre"/>
         </div>

         <div>
               <input type="text" name="peso" value="{{$pokemon->peso}}" placeholder="Peso"/>
         </div>

         <div>
               <input type="text" name="estatura" value="{{$pokemon->estatura}}" placeholder="Estatura"/>
         </div>

         <div>
               <input type="text" name="imagen" value="{{$pokemon->imagen}}" placeholder="Imagen"/>
         </div>
         <div>
            <input type="submit" value="Confirmar"/>
         </div>
      </form>
   </div>
</div>