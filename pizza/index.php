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
			<select name="Massa" id="">
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
			<input type="checkbox" name="ingrediente[]" value="Jamon"  />Jamon
			<input type="checkbox" name="ingrediente[]" value="Oregano" checked />Oregano
			<input type="checkbox" name="ingrediente[]" value="Piña">Piña
			<input type="checkbox" name="ingrediente[]" value="Hamburgesa">Hamburgesa
			</br>
			<button type="submit" id="myButton" >Calcular Precio
			</button>
		</form>
	</div>
	<div>
	<?php
		$pFinal=5;
		$con=1;
		$noHay=0;
		if((gettype($_POST['ingrediente'])=="NULL")&&(gettype($_POST['Massa'])=="NULL")){

		}else{
			echo "<p>La Massa seleccionada es: ".$_POST['Massa']."</p>";
			$ingredientes= $_POST['ingrediente'];
			echo "Ingredientes seleccionados son: ";
			foreach ($ingredientes as $key) {
				if ($key =="Oregano") {
					$noHay=1;
				}
				echo "$key  ";
				$con++;
			}
			if($noHay==0){
				echo"<h1 style='color:red'>Falta seleccionar el Oregano</h1>";		
			}else{
				$pFinal = $pFinal +(0.5*$con);
				echo "<hr>";
				echo "</br><h3 style='color:green'> Precio Final: $pFinal €</h3>";
		}
			
		}
		?>
		</div>
</body>
</html>