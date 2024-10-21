<?php
/* CBTIS 89
programa que almacena datos en un arreglo
y luego los ordena de forma ascendente y descendente, despues los imprime 
Angel Gabriel Briceño Campos
3ºA programacion Matutino
*/
$arraynumerico = array(1, 3, 2, 5, 4, 7, 6);

//orden ascendente
sort($arraynumerico);
var_export($arraynumerico);

echo "<p>";

//orden descendente
rsort($arraynumerico);
var_export($arraynumerico);
?>