<?php

/* Realizar la operación de potenciación (ab), de dos valores enteros positivos, con multiplicaciones. */

$A = readline("Ingrese el valor de A positivo:");
$B = readline("Ingrese el valor de B positivo:");

for(  $suma = 1, $contador = 0  ; $contador < $A ; $contador++) {
    $suma *= $B; 
}

echo "$A * $B = $suma"; 

