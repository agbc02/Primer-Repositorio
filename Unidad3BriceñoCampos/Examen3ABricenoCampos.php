<?php
/*Programa que almacena el nombre de cuatro articulos en un arreglo llamado $productos y en otro arreglo multidimensional llamado $precios almacena los precios correspondientes de 3 meses, esto se hace por medio de filas y columnas
Briceño Campos Angel Gabriel
Programacion 3ºA T.M
*/
$Productos=array("Vestido","Pantalon","Cinturon","Camiseta");
$Precios=array(array(500,600,550),array(800,700,600),array(400,200,300),array(500,200,500));
$Subtotal=array();
$Promedio=array();
$Total;

for ($i=0; $i<4 ; $i++) { 
	$Total=0;
for ($j=0; $j<3 ; $j++) { 
	$Total=$Total+$Precios[$i][$j];
}
$Promedio[]=$Total/3;
$Subtotal[]=$Total;
}
echo "<b>TIENDA DE ROPA</b>","<br>","<br>";
echo "Productos "," Subtotal "," Promedio","<br>";
for ($i=0; $i<4; $i++) { 
	echo $Productos[$i]."-------".$Subtotal[$i]."-------".$Promedio[$i];
	echo "<br>";
}
echo "<br>","<br>";
for ($j=0; $j<4; $j++) { 
	for ($k=0; $k<3 ; $k++) { 
		echo $Precios[$j][$k]." ";
	}
	echo "<br>";
}