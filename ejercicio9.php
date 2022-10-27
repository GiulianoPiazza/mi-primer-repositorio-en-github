<?php

/* Imprimir los números de 1 a N (siendo N un número que se lee) cada uno con su respectivo factorial. */

$N = readline("Ingrese un numero entero: ");
$resultado = 1;


for ($aux = 1; $aux <= $N; $aux++) {

   $resultado *= $aux;
   echo $aux. "!=".  $resultado . PHP_EOL;
}
