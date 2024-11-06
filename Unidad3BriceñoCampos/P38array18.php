  <?php
  /*
  Programa que almacena datos en un arreglo multidimensional y posteriormente los imprime en diferentes posiciones
  */
  $datos = array(array(10,20,30),array(40,50,60),array(70,80,90));

  echo "NORMAL";
  echo "<br>";
  for($i=0;$i<3;$i++)
  	{ for($j=0;$j<3;$j++)
  		{echo $datos[$i][$j]." ";
  	}
  	echo "<br>";
  }
  echo "<br>","<br>","<br>";
  echo "FILAS A COLUMNAS","<br>";
for($i=0;$i<3;$i++)
  	{ for($j=0;$j<3;$j++)
  		{echo $datos[$j][$i]." ";
  	}
  	echo "<br>";
  }
  echo "<br>","<br>","<br>";
  echo "COLUMNAS INVERSAS","<br>";
  for($i=0;$i<3;$i++)
  	{ for($j=2;$j>=0;$j--)
  		{echo $datos[$i][$j]." ";
  	}
  	echo "<br>";
  }
  echo "<br>","<br>","<br>";
  echo "ESPEJO INVERSO","<br>";
  for($i=2;$i>=0;$i--)
  	{ for($j=2;$j>=0;$j--)
  		{echo $datos[$i][$j]." ";
  	}
  	echo "<br>";
  }
 echo "<br>","<br>","<br>";
 echo "FILAS INVERSAS","<br>";
 rsort($datos);
  for($i=0;$i<3;$i++)
  	{ for($j=0;$j<3;$j++)
  		{echo $datos[$i][$j]." ";
  	}
  	echo "<br>";
  }
