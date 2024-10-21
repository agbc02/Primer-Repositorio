<?php
/* CBTIS 89
programa que almacena datos en un arreglo luegos los imprime de forma ascendente, despues elimina 2 datos, posteriormente agrega 4 datos y por ultimo los imprime de forma descendente
y luego los imprime 
Angel Gabriel Briceño Campos
3ºA programacion Matutino
*/
echo "<b>Datos del arreglo ordenados de forma ascendente por medio de un ciclo for </b>";
echo "<br>";
$arraynombres = array("Angel","Salvador","Jose","Diego","Rodrigo","Juan");
sort($arraynombres);
for ($i=0; $i<=5; $i++){
	echo $arraynombres[$i];
    echo "<br>";}

echo "<br>";
unset($arraynombres[1]);
unset($arraynombres[2]);
array_push($arraynombres,"Cesar","Erick","Ulises","Brayan");
rsort($arraynombres);
for ($i=0; $i<=7; $i++){
	echo $arraynombres[$i];
    echo "<br>";}



