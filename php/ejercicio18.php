<?php
//Programa que muestre todos los números entre dos números que nos llegan por GET
echo "<h2>Recibe dos números por url y muestra una lista de los números desde el primero hasta el segundo</h2>";
$texto = "";
if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $num1 = $_GET['numero1'];
    $num2 = $_GET['numero2'];
    
    if($num1 < $num2){
        
        for($i = $num1 ; $i <= $num2 ; $i++){
            $texto.= "$i ";
        }
        
    }else{
        $texto = "<p>El segundo parámetro tiene que ser mayor que el primero</p>";
    }

}else{
    $texto = "<p>Introduce dos parámetros: numero1 y numero2 por la url</p>";
}

echo $texto;

