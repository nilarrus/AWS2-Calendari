<?php 

	$mes = date("m");
	$ano = date("Y");
	$diaActual = date("j");

	$diaDeLaSemana = date('w', mktime (0,0,0, $mes, 1, $ano));
	
	$ultimoDiaMes = date("t"); 
	
	$diasOrdinales  = array(1=>"Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
	
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Calendari</title>
	<link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body>
	<?php 
	$ultimaCelda = $diaDeLaSemana+$ultimoDiaMes;
	/*echo "\tUltimo Dia".$ultimoDiaMes;
	echo "\n Dia de la semana:".$diaDeLaSemana;*/
	echo "\n<table class =calendar>";
	echo "\n<caption><h1>".date('F')." ".date('Y')."</h1></caption>\n";
	echo "\n\t<tr>\n";
	foreach ($diasOrdinales as $dia) {
		echo "\t<th>".$dia."</th>";
	}
	echo "\n\t</tr>";
	echo "\n<tr id=1>\n";
	for($i=1;$i<=42;$i++){
		if($i==$diaDeLaSemana){
			$day=1;
		}
		if($i<$diaDeLaSemana || $i>=$ultimaCelda){
			echo "\t<td></td>";
		}else{
			if($day==$diaActual){
				echo "\t<td class='hoy'>$day</td>";
			}else{
				echo "\t<td class='dia'>$day</td>";
			}
			$day++;
		}
		if($i%7==0){
			echo "\n</tr>\n<tr id=2>\n";
		}
	}
	echo "\t</tr>";
	echo "\n</table>";
	?>

</body>
</html>

 