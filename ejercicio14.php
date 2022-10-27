<?php

/* Leer 10 valores desde teclado y mostrar la media de los pares y la media de los impares. Hacer tres 
versiones, con un bucle: para, mientras y repetir. Repetir el ejercicio considerando que el número de 
valores se le solicita al usuario. */


$cantPar = 0;
$cantImpar = 0;
$sumaPares = 0;
$sumaImpares = 0;

for ($i=1; $i <=10 ; $i++) { 

    $a = readline("Ingresa un numero:");

    if ($a % 2 == 0) {
    
        $cantPar ++; 
        $sumaPares += $a;
    }
    else {
        $cantImpar++;
        $sumaImpares += $a;
    }

}
echo "El promedio de los pares es: ". $sumaPares / $cantPar .PHP_EOL;
echo "El promedio de los negativos es: ". $sumaImpares/ $cantImpar .PHP_EOL;
