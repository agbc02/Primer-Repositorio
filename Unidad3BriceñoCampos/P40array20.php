<?php
/*CBTIS 89
P40array20.php
Programa que almacena por medio de un ciclo los numeros del 150 al 200 de la siguiente manera:
En el $Arreglo1 van los numeros pares, en el $Arreglo2 van los numeros impares, en el Arreglo3 va la suma de los numeros correspondiente al mismo indice
Angel Gabriel Briceño Campos
Programacion 3ºA T.M*/

$Arreglo1 = array();
$Arreglo2 = array();
$Arreglo3 = array();

for ($i=150; $i<=201 ; $i++) { 
	$res=$i%2;
if ($res==0){
	$Arreglo1[]=$i;
}

else {
	$Arreglo2[]=$i;
}
}
for ($j=0; $j<26; $j++) { 
	
		$Arreglo3[]=$Arreglo1[$j]+$Arreglo2[$j];
	
	
}

echo "Arreglo1-----Arreglo2-----Arreglo3","<br>";
for ($j=0; $j<26 ; $j++) { 
	
	
	echo $Arreglo1[$j]."------------".$Arreglo2[$j]."-------------".$Arreglo3[$j],"<br>";}
	
?>