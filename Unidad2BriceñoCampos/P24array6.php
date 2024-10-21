 <?php
 /* CBTIS 89
programa que almacena datos en un arreglo
y luego los imprime por medio de un ciclo
Angel Gabriel Briceño Campos
3ºA programacion Matutino
*/
$info = array("Juan"=>'CBTIS 89 la carrera de Mecatronica',"Pedro"=>'CBTIS 110 la carrera de Informatica',"Alejandro"=>'CBTIS 130 la carrera de Arquitectura',"Angel"=>'CBTIS 89 la carrera de Programacion');
echo "** INFORMACION DE ALUMNOS **","<br>","<br>";

foreach($info as $Alumno=>$Escuela)
{
echo "El Alumno ",$Alumno . " estudia en el ". $Escuela;
echo "<br>","<br>";
}
?>