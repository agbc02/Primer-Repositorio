<?php
/* CBTIS 89
programa que almacena datos en un arreglo
y luego indica si el nombre seleccionado esta en el arreglo
Angel Gabriel Briceño Campos
3ºA programacion Matutino
*/
$Name=0;
$nombre = "Angel";
$nombres = array ("Juan","Pedro","Benito","Manuel","Gilberto","Nestor","Angel","Julio");
foreach ($nombres as $Persona) {

if ($Persona==$nombre){
	$Name=1;
echo "El nombre ".$nombre." esta en el array";
}

}
if($Name==0){
	echo "El nombre ".$nombre." no esta en el array";	
}



?>