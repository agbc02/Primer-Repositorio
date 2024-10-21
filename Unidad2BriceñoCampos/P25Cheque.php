<?php
/* CBTIS 89
programa que calcula la cantidad de billetes necesarios para llegar al valor del cheque 
Angel Gabriel Briceño Campos
3ºA programacion Matutino
*/
$Vcheque=rand(1,10000);$cheque;
$billete10;$billete20;$billete50;$billete100;$billete200;$billete500;$billete1000;$moneda10;$moneda5;$moneda2;$moneda1;

$billete1000=floor($Vcheque/1000);
$cheque=$Vcheque%1000;

$billete500=floor($cheque/500);
$cheque=$cheque%500;

$billete200=floor($cheque/200);
$cheque=$cheque%200;

$billete100=floor($cheque/100);
$cheque=$cheque%100;

$billete50=floor($cheque/50);
$cheque=$cheque%50;

$billete20=floor($cheque/20);
$cheque=$cheque%20;

$moneda10=floor($cheque/10);
$cheque=$cheque%10;

$moneda5=floor($cheque/5);
$cheque=$cheque%5;

$moneda2=floor($cheque/2);
$cheque=$cheque%2;

$moneda1=floor($cheque/1);
$cheque=$cheque%1;

echo "<b>El valor del cheque es: </b>",$Vcheque;
echo "<br>","<br>";
echo "Tiene ". $billete1000 . " billetes de 1000";
echo "<br>";
echo "Tiene ". $billete500 . " billetes de 500";
echo "<br>";
echo "Tiene ". $billete200 . " billetes de 200";
echo "<br>";
echo "Tiene ". $billete100 . " illetes de 100";
echo "<br>";
echo "Tiene ". $billete50 . " billetes de 50";
echo "<br>";
echo "Tiene ". $billete20 . " billetes de 20";
echo "<br>";
echo "Tiene ". $moneda10 . " monedas de 10";
echo "<br>";
echo "Tiene ". $moneda5 . " monedas de 5";
echo "<br>";
echo "Tiene ". $moneda2 . " monedas de 2";
echo "<br>";
echo "Tiene ". $moneda1 . " monedas de 1";
?>