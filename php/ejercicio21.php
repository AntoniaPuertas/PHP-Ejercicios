<?php
/**
 * Crear un programa que tenga un array con 10 números
 * 	Recorrer el array y mostrarlo
 * 	Ordenarlo y mostrarlo
 * 	Mostrar su longitud
 * 	Buscar un elemento que llega por get
 */
 //imprime un array con el formato clave => valor
 print_r($_GET);
 echo "<hr>";
//Declaración del array
 //$numeros = array(2,3,1,7,5,9,6,44,33,12);
 $numeros = [2,3,1,7,5,9,6,44,33,12];

 echo "<p>Recorrer el array y mostrarlo</p>";
 echo mostrarArray($numeros);
 echo "<hr>";

 echo "<p>Ordenar el array y mostrarlo</p>";
 //sort() ordena los elementos de un array
 sort($numeros);
 echo mostrarArray($numeros);
 echo "<hr>";

 //count() devuelve la longitud de un array
 //sizeof() devuelve la longitud de un array
 //count() y sizeof() son alias, iguales
 $longitud = count($numeros);
 $longitud2 = sizeof($numeros);

echo "<p>Longitud del array con count(): $longitud</p>";
echo "<p>Longitud del array con sizeof(): $longitud2</p>";


 //función para mostrar el array
 function mostrarArray($numeros){
    $texto = "";
    foreach($numeros as $numero){
        $texto.= "$numero <br>";  
    }
    return $texto;
 }

 //buscar un elemento dentro del array
if(isset($_GET['numero1'])){
    $buscar = $_GET['numero1'];
    //array_search() permite buscar valores dentro de un array
    $busqueda = array_search($buscar, $numeros);
    //var_dump($busqueda);
    if($busqueda){
        echo "<p>El elemento se encuentra en la posición $busqueda</p>";
    }else{
        echo "<p>El elemento no se encuentra en el array</p>";
    }
}else{
    echo "<p>Pasa un parámetro para buscar</p>";
}
echo "<hr>";
echo "<h1>Fin del ejercicio &#129409;</h1>";
echo "<h1>Nos vamos a tomar &#127866;</h1>";
 