<?php
/* Calcular el factorial de 10 números diferentes cuyos valores se leen.  */

for ($i = 1; $i <= 10; $i++) {

    $N = readline("Ingrese un numero:");

    $resultado = 1;

    for ($aux =1; $aux <= $N ; $aux++) { 
        $resultado *= $aux; 
    }

echo $resultado .PHP_EOL;
}
