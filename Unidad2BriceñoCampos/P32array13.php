<?php
/* CBTIS 89
programa que almacena datos en un arreglo
y luego los imprime y despues agrega mas datos y los ordena de forma ascendente y descendente
Angel Gabriel Briceño Campos
3ºA programacion Matutino
*/
$ropa = array(1,"camisas",2,"pantalon",3,"cinturon");
foreach ($ropa as $prenda) {	
	echo $prenda. "<br>";
}
echo "<br>";
foreach ($ropa as $prenda) {	
sort($ropa);
echo $prenda. "<br>";
}
echo "<br>";
array_push($ropa,"gorra","calcetines");
foreach ($ropa as $prenda) {	
rsort($ropa);
echo $prenda. "<br>";}
