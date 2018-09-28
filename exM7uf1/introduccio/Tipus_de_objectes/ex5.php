<?php
echo "5.Prova a modificar el codi per a intentar mostrar $d tal com ho feiem a l'exercici anterior.
      <br>És a dir echo 'el valor de \$d' és $d.<br> Ha funcionat?";
$d = new DateTime();
$tipus_de_d = gettype( $d );
echo "Que retorna la invocació del mètode format de la classe datetime?
<br> La variable \$d conté el valor " . $d->format( "d/m/Y") . " i és del tipus $tipus_de_d";

echo "<br> -Si funciona por que con el format le damos un formato que pueda interpretar el html";
echo "<br> -Ejemplo: \$d->format('d/m/Y') ---> ". $d->format( "d/m/Y")."";
?>
