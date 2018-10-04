<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>pizza</title>
</head>
<body>
	<div>
		<h2>Pizza Seleccion:</h2>
		<form action="" method="post" id="myform" name="myForm">
			<label>Seleciona una Massa la </label>
			<select name="mySelect" id="">
				<optgroup label="Massas">
					<option value="Pan">
						Pan
					</option>
					<option value="Fina">
						Fina
					</option>
					<option value="Normal" selected="selected">
						Normal
					</option>
				</optgroup>
			</select>
			</br><h3>Ingredientes:</h3>
			<input type="radio" name="myRadio" value="Jamon" />Jamon
			<input type="radio" name="myRadio" value="Oregano"/>Oregano
			<input type="radio" name="myRadio" value="Pina">Piña
			</br>
			<button type="submit" id="myButton" >Calcular Precio
			</button>
		</form>
	</div>
	<div>
		<?php
		$the_request;
		$ingredientes;
		switch($_SERVER['REQUEST_METHOD'])
		{
			case 'POST': 
				$the_request = &$_POST; 
			break;
			
			default:

			break;
		}
		foreach ($the_request as $key => $value) {
			if($key=="mySelect"){
				foreach ($value as $i ) {
					echo "Massa Seleccionada : $i";
				}
			}
		}

		?>
	</div>
</body>
</html>