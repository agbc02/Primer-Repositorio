  <?php
  /* CBTIS 89
programa que almacena datos en un arreglo
y luego los imprime, despues agrega màs datos al arreglo y luego los imprime 
Angel Gabriel Briceño Campos
3ºA programacion Matutino
*/
   $array_numerico_indexado = array(1, "Gato", 2, "Perro");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }

   array_push($array_numerico_indexado, 3, "Caballo");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }
?>
