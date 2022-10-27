<?php

/* Imprimir los números pares desde N (siendo N un número par que se lee) en forma descendente 
hasta 2. */

$N = readline("ingrese un numero par: ");

if ($N % 2 == 0) {    // si N es par 

    while ($N >= 2) {    // mientras N sea mayor o igual a 2 

        echo " $N " . PHP_EOL;
        $N -= 2; // LE VAMOS RESTANDo DE A DOS A "N" para q se vayan mostrando los numeros pares

    }
} else {  // sino es impar 
    echo " Numero ingresado es impar. ";
}
