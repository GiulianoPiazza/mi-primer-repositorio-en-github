<?php

/* Realizar la multiplicación de dos números enteros A y B mediante sumas sucesivas, hacer tres 
algoritmos con cada estructura repetitiva.  */

// lo q nos pide es que: 6*4 = 6*6*6*6= 4*4*4*4*4*4 = 24
//                       A*B = A*A*A*A= B*B*B*B*B*B   

$A = readline("Ingrese el valor de A:");
$B = readline("Ingrese el valor de B:");
/* $suma = 0;
$contador = 0; */
/* 
if ($A < 0) {
    $B *= -1;
    $A *= -1;
} */

/* while ($contador < $A) {
    $suma += $B;
    $contador++;
} */

/* do{
    $suma += $B;
    $contador++;
} while ($contador < $A);
 */

for($suma = 0, $contador= 0; $contador< $A; $contador++ ) {
    $suma += $B;
}

echo " $A * $B = $suma";
