<?php
/**
 * Crear un programa que reciba un parámetro por get y lo limpie de caracteres especiales. Funciones a utilizar:
 * Trim()	Limpia los espacios en blanco al principio y al final de una cadena
 * Stripslashes() Elimina la barra de escape \ para caracteres
 * Htmlspecialchars() Convierte las etiquetas html en caracteres
 */
if(isset($_GET['nombre'])){
    $cadenaRecibida = $_GET['nombre'];

    echo "<p>Se ha recibido el valor $cadenaRecibida</p>";
   
    //le quito los espacios en blanco al principio y al final
    $cadenaSinEspacios = trim($cadenaRecibida);
    echo "<p>Sin espacios $cadenaSinEspacios</p>";
   
    //le quito las barras de escape \
    $cadenaSinEscapes = stripcslashes($cadenaSinEspacios);
    echo "<p>Sin barras de escape $cadenaSinEscapes</p>";
   
    //le quito las etiquetas html
    $cadenaSinHtml = htmlspecialchars($cadenaSinEscapes);
    echo "<p>Sin etiquetas html $cadenaSinHtml</p>";
}else{
    echo "<p>No se ha recibido ningún parámetro</p>";
}

print_r($_SERVER);


