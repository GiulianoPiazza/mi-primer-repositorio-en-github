<?php
/* Hacer los algoritmos que calculen el promedio de una serie de notas hasta que se ingrese una nota 
negativa, utilizar las tres estructuras repetitivas. ¿Cuál no se puede utilizar? */

echo "--------CALCULADOR DE PROMEDIOS--------" . PHP_EOL;
echo " Para finalizarlo, ingresa un numero negativo." . PHP_EOL;


$suma = 0;              //se le da valores iniciales
$contador = 0;         //se le da valores iniciales
$nota = readline("Ingrese una nota: ");


/* while ($nota >= 0) {
$suma+= $nota;
$contador++;
$nota = readline("Ingrese una nota: ");
} */

if ($nota >= 0){
    do {
        $suma += $nota;
        $contador++;
        $nota = readline("Ingrese una nota: ");
    } while ($nota >= 0);

}

$promedio = ($contador) ? $suma / $contador : "Error";

echo "Tu promedio es de:" . $promedio;



/* NO SE PUEDE REALIZAR CON UN "FOR" POR Q NO SE SABE LAS CANTIDADES DE NOTA
QUE VA A INGRESAR EL ALUMNO */
