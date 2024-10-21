<?php
/* CBTIS 89
programa que almacena datos en un arreglo
y luego los imprime por medio de un ciclo
Angel Gabriel Briceño Campos
3ºA programacion Matutino
*/
$precios = array("manzana"=>'25',"mango"=>'40',"limon"=>'35',"naranja"=>'20');
echo "** FRUTERIA DEL SUR **","<br>","<br>";
foreach($precios as $fruta=>$precio)
{
echo "El kilo de ",$fruta . " cuesta ". $precio;
echo "<br>","<br>";
}
?>