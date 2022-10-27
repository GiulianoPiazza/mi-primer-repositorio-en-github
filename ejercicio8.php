<?php

/* Obtener el resto de la división entera a%b de dos números enteros positivos mediante restas. */

$A = readline("Ingrese el valor de A:");
$B = readline("Ingrese el valor de B:");

$contador = 0; 
$resta = $A;  // Lo que se resta lo va a ir almacenando A

while ( $resta >= $B) {// RESTA (A) mientras sea mayor o igual a B 
 $resta -= $B; // a RESTA (A) le voy a restar la variable (B)
$contador++;  // como se pudo restar anteriormente, a la variable contadora se le suma 1....

}

echo " Resto = $resta";