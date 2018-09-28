<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<pre>
	<?php
$the_request;
switch($_SERVER['REQUEST_METHOD'])
{
	case 'POST': 
		$the_request = &$_POST; 
	break;
	
	default:

	break;
}
print_r($the_request);
foreach ($the_request as $key => $value) {
	echo "Cosa: $key <br/>";
	if(gettype($value)=="array"){
		echo "Contenido(s): ";
		foreach ($value as $i){
			echo "$i, ";
		}
	}else{
		echo "Contenido: $value ";
	}
	echo "<br/>";
}
?>
</pre>
</body>
</html>
