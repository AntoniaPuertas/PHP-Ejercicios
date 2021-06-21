<?php
/**
 * Crea un programa en php que cree dos variables con el siguiente contenido:
* “Hola “ y “compañeros”
* Crea otra variable que concatene las cadenas anteriores y muestra el resultado por pantalla
 */
$saludo1 = "Hola ";
$saludo2 = "compañeros";
$saludoCompleto = $saludo1 . $saludo2;
echo $saludoCompleto;
//inserta un salto de línea
echo "<br>";

//otra forma de insertar un salto de línea
echo "\n"; //revisar esta opción

/*
*Hacer un programa que sume dos variables que almacenan dos números distintos
*/

$numero1 = 5;
$numero2 = 4;
$suma = $numero1 + $numero2;
//si ponemos comillas dobles, el programa interpreta las variables y muestra su valor
echo "La suma de $numero1 y $numero2 es $suma";
echo "<br>";
//si ponemos comillas simples, el programa imprime el texto tal cual
echo 'La suma de $numero1 y $numero2 es $suma';
echo "<br>";
echo "La suma de " . $numero1 . " y " . "$numero2" . " es " . $suma;
echo "<br>";

//Hacer un programa que muestre en pantalla la tabla del 10
$numero = 10;
echo "Tabla del $numero <br>";
for($i = 1 ; $i <= 10 ; $i++){
    $resultado = $numero * $i;
    echo "$numero X $i = $resultado <br>";
}
echo "<hr>";
echo "<h2>Ejercicio 5. Calcular potencias</h2>";
//Hacer un programa que muestre por pantalla las potencias de los números del 1 al 4. Utiliza la función pow() de PHP
//voy a hacer el ejemplo con el cuadrado
$min = 1;
$max = 4;
$exponente = 2;
for($i = $min ; $i <= $max ; $i++){
    $resultado = pow($i, $exponente);
    echo "$i elevado a $exponente es $resultado <br>";
}

//Mostrar todos los números pares del 1 al 100
echo "<hr>";
echo "<h2>Ejercicio 6. Números pares del 1 al 100</h2>";
//primera opción
/*
for($i = 0 ; $i <= 100 ; $i = $i + 2){
    echo "$i <br>";
}
*/
//segunda opción
$texto = "";
for($i = 0 ; $i <= 100 ; $i++){
    if($i % 2 == 0){
        $texto.= "$i, ";
    }
}
//le quito la última coma y el último espacio a $texto
$texto = substr($texto, 0, strlen($texto)-2);
echo $texto;
