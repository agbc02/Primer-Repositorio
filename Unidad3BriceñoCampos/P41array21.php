<?php
/* CBTIS 89
P41array21.php
Programa que almacena en un arreglo llamado $Compras el valor de 6 compras, posteriormente en otros arreglos se debe almacenar informacion de acuerdo a las siguientes condiciones:
El contenido del arreglo $Descuentos se llenarà de la siguiente manera:
Compra menor 300 = 0
Compra mayor 300 y menor o igual 1000 = 10%
Compra mayor 1000 y menor o igual 2500 = 10%
Compra mayor 2500 y menor o igual 5000 = 10%
compra mayor a 5000 = 25%
Briceño Campos Angel Gabriel
Programacion 3ºA T.M
*/
$Compras = array(800,150,2700,1900,7600);
$Descuentos = array();
$Total = array();
$Porcentaje = array();
$longitud=count($Compras);

for($i=0;$i<$longitud;$i++){
	if ($Compras[$i]<300){
		$Descuentos[]=$Compras[$i]*0;
		$Total[]=$Compras[$i]-$Descuentos[$i];
		$Porcentaje[]="0%";
	}
	elseif($Compras[$i]>300 && $Compras[$i]<=1000){
		$Descuentos[]=$Compras[$i]*0.10;
		$Total[]=$Compras[$i]-$Descuentos[$i];
		$Porcentaje[]="10%";
	}
	elseif ($Compras[$i]>1000 && $Compras[$i]<=2500) {
		$Descuentos[]=$Compras[$i]*0.15;
	$Total[]=$Compras[$i]-$Descuentos[$i];
	$Porcentaje[]="15%";
}
		elseif ($Compras[$i]>2500 && $Compras[$i]<=5000) {
			$Descuentos[]=$Compras[$i]*0.20;
			$Total[]=$Compras[$i]-$Descuentos[$i];
			$Porcentaje[]="20%";
		}
		else{
			$Descuentos[]=$Compras[$i]*0.25;
			$Total[]=$Compras[$i]-$Descuentos[$i];
			$Porcentaje[]="25%";
		}
	}
	echo "Compras-- "," Descuentos---- "," Total-- "," Porcentaje","<br>";
	for($j=0;$j<$longitud;$j++)
		echo "---".$Compras[$j]."------------".$Descuentos[$j]."------------".$Total[$j]."------------".$Porcentaje[$j]."<br>";
?>