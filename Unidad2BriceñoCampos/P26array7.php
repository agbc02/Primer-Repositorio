<?php
/* CBTIS 89
programa que almacena datos en un arreglo
y luego los imprime por medio de un ciclo
Angel Gabriel Briceño Campos
3ºA programacion Matutino
*/
   $datos = array(
   array(0, 0, 0),array(1, 1, 1),array(2, 2, 2));

   foreach($datos as $datos2){
      foreach($datos2 as $dato){
         echo "$dato ";
      }
      echo "<br>"; 
   }
?>