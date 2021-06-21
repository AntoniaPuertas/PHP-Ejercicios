<?php
//Leer dos números que llegan por parámetro GET y mostrar la suma, resta, multiplicación y división de ambos
//$_GET es un array que guarda los valores que recibe por la url
//var_dump() muestra el tipo y contenido de una variable
echo var_dump($_GET);

echo "<hr>";
echo "<h2>Recibe dos parámetros por url: numero1 y numero2</h2>";
echo "<p>Muestra la suma, resta, multiplicación y división de ambos</p>";
//isset() comprueba si un valor existe
if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    echo "<p>Valores recibidos: $numero1 y $numero2</p>";  
    $resultado = $numero1 + $numero2;
    echo "<p>La suma es: $resultado</p>";
    $resultado = $numero1 - $numero2;
    echo "<p>La resta es: $resultado</p>";
    $resultado = $numero1 * $numero2;
    echo "<p>La multiplicación es: $resultado</p>";
    if($numero2 != 0){
        $resultado = $numero1 / $numero2;
        echo "<p>La división es: $resultado</p>";
    }else{
        echo "<p>No se puede realizar la división por 0</p>";
    }

}else{
    echo "Introduce parámetros válidos";
}
