<?php
/* CBTIS 89
programa que almacena datos en un arreglo
y luego los imprime 
Angel Gabriel Briceño Campos
3ºA programacion Matutino
*/
$equipo = array("portero"=>'Julio','defensa'=>'Diego','medio'=>'Jair','delantero'=>'Rafa');
echo "** SELECCION NACIONAL **","<br>","<br>";
foreach($equipo as $posicion=>$jugador)
{echo "El jugador ". $jugador . " es el ".$posicion;
echo "<br>","<br>";
}
?>