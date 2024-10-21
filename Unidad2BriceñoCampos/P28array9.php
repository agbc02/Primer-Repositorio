<?php
/* CBTIS 89
programa que almacena datos de una tienda de prendas en un arreglo
y luego los imprime por medio de un ciclo
Angel Gabriel Briceño Campos
3ºA programacion Matutino
*/
$ropa = array("Playeras " => "$100","Camisas " => "$100","Pantalones de mezclilla " =>"$300",
	"Bermudas " => "$200");
foreach ($ropa as $prenda => $precio) {
	echo "La prenda ".$prenda."Tiene un precio de ".$precio."<br>";
}
?>