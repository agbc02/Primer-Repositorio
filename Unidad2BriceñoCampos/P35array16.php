<?php
/* CBTIS 89
programa que almacena datos en dos arreglos para despues hacer operaciones
y luego almacenar los resultados en un arreglo y por ultimo imprimirlos
Angel Gabriel Briceño Campos
3ºA programacion Matutino
*/
$array1 = array(1,7,10,22,15);
$array2 = array(6,10,23,2,7);
$sum = array ();
$res = array ();
$Mult = array();
$div = array();
echo "<b>SUMA ENTRE ARREGLOS</b>","<br>";
for($i=0; $i<=4; $i++)
{ 
 $sum[]=$array1[$i]+$array2[$i];
 echo $array1[$i] ."+". $array2[$i] ."=",$sum[$i];
 echo"<br>";
	
}
echo "<b>RESTA ENTRE ARREGLOS</b>","<br>";
for($i=0; $i<=4; $i++)
{ 
 $res[]=$array1[$i]-$array2[$i];
 echo $array1[$i] ."-". $array2[$i] ."=",$res[$i];
 echo"<br>";
	
}
echo "<b>MULTIPLICACION ENTRE ARREGLOS</b>","<br>";
for($i=0; $i<=4; $i++)
{ 
 $Mult[]=$array1[$i]*$array2[$i];
 echo $array1[$i] ."x". $array2[$i] ."=",$Mult[$i];
 echo"<br>";
	
}
echo "<b>DIVISION ENTRE ARREGLOS</b>","<br>";
for($i=0; $i<=4; $i++)
{ 
 $div[]=$array1[$i]/$array2[$i];
 echo $array1[$i] ."/". $array2[$i] ."=",$div[$i];
 echo"<br>";
	
}
?>