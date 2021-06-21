<?php
/**
 * Realizar un programa que muestre una lista con el nombre de los archivos que hay en el directorio imágenes 
 * Crear el directorio imágenes y colocar algunas imágenes dentro

 */
//sacar un listado de los archivos que hay en el directorio imagenes
//en la función opendir hay que poner la ruta al directorio al que queremos acceder
$gestorArchivos = opendir('imagenes');
if($gestorArchivos){
    while(false !== ($archivo = readdir($gestorArchivos))){
        echo $archivo . "<br>";
    }
}
closedir($gestorArchivos);

//el resultado anterior muestra un punto . que hace referencia al directorio y .. que hace referencia al directorio padre
//el mismo ejercicio pero filtrando el resultado para que no se muestren el . y el ..
echo "<hr>";
$gestorArchivos = opendir('imagenes');
if($gestorArchivos){
    while(false !== ($archivo = readdir($gestorArchivos))){
        if($archivo != "." && $archivo != ".."){
            echo $archivo . "<br>";
        }  
    }
}
closedir($gestorArchivos);