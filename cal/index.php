<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Calendari</title>
	<link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body>
<?php 
	$mes = date("m");
	$ano = date("Y");
	$diaDeLaSemana = date('w', mktime (0,0,0, $mes, 1, $ano));
	$ultimoDiaMes = date("t"); 
	echo "\tUltimo Dia".$ultimoDiaMes;
	echo "\n Dia de la semana:".$diaDeLaSemana;

	echo "<caption>".date('F')."</caption>\n";
	$fecha = date("D");
	$diasOrdinales  = array(1=>"Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
	echo "\n<table>";
	foreach ($diasOrdinales as $dia) {
		echo "\t<th>".$dia."</th>";
	}
	$d = 1;
		for ($i=1; $i < 6; $i++) { 
			echo "\n\t<tr>";
			for ($j=1; $j < 8; $j++) { 
				echo "\n\t\t<td>";
				if($j==$diaDeLaSemana){
					echo "$d";
					$d=$d+1;
				}					
				echo "</td>";
				

			}
			echo "\n\t</tr>";
		}

	echo "\n</table>";
?>
</body>
</html>

 