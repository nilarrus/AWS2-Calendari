<?php
$d = new DateTime();
$tipus_de_d = gettype( $d );
$class_t = get_class($d);
echo "Que retorna la invocació del mètode format de la classe datetime?
<br> La variable \$d conté el valor " . $d->format( "d/m/Y") . " i és del tipus $tipus_de_d";

echo "<br> 6.Seria interessant, ara que sabem que la variable és de tipus objecte, conèixer de quina classe és aquell objecte.
<br> Això ho podem fer amb la funció get_class().
<br> Una pista: \$classe_de_d = get_class( \$d )";
echo "<br> La variable \$d es un : $class_t";
?>
