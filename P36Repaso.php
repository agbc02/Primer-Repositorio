<?php
/* CBTIS 89
P36Repaso.php  
Programa que almacena en un arreglo los nombres de peliculas de un cine y la hora de su funcion
y en otro los productos que se venden en una dulceria y sus precios, los imprime por medio de un ciclo
Angel Gabriel Briceño Campos
3ºA programaciòn matutino
*/
echo "<b><marquee>***CINE DURANGO***</b></marquee>","<br>","<br>";
echo "<b>FUNCIONES</b>","<br>","<br>";
$arraypeliculas = array ("Sonrie 2 " => " 13:50 --- 14:40 --- 19:20","A cielo abierto"=>"14:20 --- 16:30 --- 20:00","Guason 2"=>"15:30 --- 17:20 --- 19:50","Robot Salvaje"=>"13:10 --- 15:50 --- 18:20");
foreach ($arraypeliculas as $Funcion => $Horas) {
	echo $Funcion ."----->".$Horas;
	echo "<br>";
}
$arraydulces = array (" Palomitas Grandes " => " $60.00 ","Palomitas medianas " => " $45.00 ", "Palomitas chicas "=>" $30.00 ");
echo "<br>";
echo "DULCERIA","<br>","<br>";
foreach ($arraydulces as $Comida => $precio) {
	echo $Comida ." ".$precio;
	echo "<br>";
}
unset($arraydulces[0],$arraydulces[1],$arraydulces[2]);
array_push($arraydulces, "Refresco Grande $40.00 ","Refresco mediano $33.00 "," Refresco Chico $25.00");

for ($i=0; $i <=2; $i++) { 
	echo $arraydulces[$i];
	echo "<br>";
}
	?>
