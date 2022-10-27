<?php

/* Realizar la división entera a/b de dos valores enteros positivos mediante restas */

// 11/5 = 11 -5 -5 
// A/B = A -B -B -B  while (A >= B)

$A = readline("Ingrese el valor de A:");
$B = readline("Ingrese el valor de B:");

$contador = 0; 
$resta = $A;  // Lo que se resta lo va a ir almacenando A

while ( $resta >= $B) {// RESTA (A) mientras sea mayor o igual a B 
 $resta -= $B; // a RESTA (A) le voy a restar la variable (B)
$contador++;  // como se pudo restar anteriormente, a la variable contadora se le suma 1....

}

echo " $A / $B = $contador";
