<?php
/* CBTIS 89
P21Array3.php
programa que almacena losnombres de 6 personas en un arreglo
y luego los imprime por medio de un ciclo
Angel Gabriel Briceño Campos
3ºA programacion Matutino
*/
$arraynombres = array("sebastian","andres","juan","pedro","angel","luis", "casa",);
//Se obtiene el numero de elementos
$longitud = count($arraynombres);
for ($i=0; $i<$longitud; $i++)
{//Se obtiene el valor de cada elemento
echo $arraynombres[$i];
echo "<br>";
}
?>