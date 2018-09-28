<?php
$d = new DateTime();
$tipus_de_d = gettype( $d );
echo "Que retorna la invocació del mètode format de la classe datetime?
<br> La variable \$d
      conté el valor " . $d->format( "d/m/Y") .
      " i és del tipus $tipus_de_d";
      echo "Retorna object"

?>
