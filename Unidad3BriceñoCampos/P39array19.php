<?php
/*
P39array19.php
Programa que almacena información de 6 personas y dependiendo de su edad los contabiliza en diversos arreglos 
Angel Gabriel Briceño Campos
3°A Programación Matutino */

$nombre=array("Juan","Paco","Lalo","Rosi","Beto","Paty");
$edad=array(15,28,14,68,53,13);
$Grupo1=array();
$Grupo2=array();
$Grupo3=array();
$longitud=count($nombre)-1;

echo "Nombre -- Edad -- Grupo1 -- Grupo2 -- Grupo 3","<br>";
for($i=0;$i<$longitud;$i++)
{
	if($edad[$i]<18){
	$Grupo1[]=1;
	$Grupo2[]=0;
	$Grupo3[]=0;}
 else if ($edad[$i]>18 && $edad[$i]<49){
	$Grupo1[]=0;
	$Grupo2[]=1;
	$Grupo3[]=0;
}
else {
	$Grupo1[]=0;
	$Grupo2[]=0;
	$Grupo3[]=1;
}
}
for($j=0;$j<$longitud;$j++)
{
	echo $nombre[$j]." -------- ".$edad[$j]." ------- ".$Grupo1[$j]." --------- ".$Grupo2[$j]." ---------- ".$Grupo3[$j];
echo "<br>";
}
