<?php
$d = new DateTime();
$tipus_de_d = gettype( $d );
echo "2. De quin tipus és la variable \$d?<br>
La variable \$d
      conté el valor " . $d->format( "d/m/Y") .
      " i és del tipus $tipus_de_d";
      echo"<br>Es de tipus object --> $tipus_de_d";
?>
