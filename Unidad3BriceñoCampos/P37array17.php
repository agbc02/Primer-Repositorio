<?php
$arraynumeros = array (-4,8,17,-11,-3,1,20,-30,21,50,-73,-7,-10,-8);
$arrayPositivos = array ();
$arrayNegativos = array ();
$TotalP=0;
$TotalN=0;
echo "<b>***NUMEROS POSITIVOS Y NEGATIVOS***</b>","<br>";
for ($i=0 ; $i<=13; $i++)
	{
	if ($arraynumeros[$i]>=0)
		$arrayPositivos[]=$arraynumeros[$i];
	else 
		$arrayNegativos[]=$arraynumeros[$i];
}
$longitud=count($arrayPositivos)-1;
for ($k=0;$k<=$longitud;$k++)
{
	echo $arrayPositivos[$k];
	$TotalP=$TotalP+$arrayPositivos[$k];
	echo "<br>";
}
echo "La suma de los numeros positivos es ",$TotalP,"<br>";
$longitudN=count($arrayNegativos)-1;
for ($j=0;$j<=$longitudN;$j++)
{
	echo $arrayNegativos[$j];
	$TotalN=$TotalN+$arrayNegativos[$j];
	echo "<br>";
}
echo "La suma de los numeros negativos es ",$TotalN,"<br>";

?>