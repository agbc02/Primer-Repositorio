<?php
/* CBTIS 89
programa que imprime los numeros impares del 1 al 100 por medio de un ciclo for 
Angel Gabriel Briceño Campos
3ºA programacion Matutino
*/
$num = array();
echo "<b>Numeros Pares</b>,","<br>";
for ($i = 1; $i <=100; $i++)
{
$num[]=$i;}
foreach($num as $valor1)
	if ($valor1%2==0){
	echo $valor1   ." ";
}
echo "<br>","<br>","<b>Numeros Impares</b>","<br>";
for ($j = 1;$j <=100; $j++)
	{$num[]=$j;}
foreach($num as $valor)
	if ($valor%2==1){
	echo $valor ." ";}
?>
