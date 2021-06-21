<?php
/**
*   Realizar un programa que reciba por get una dirección de correo y compruebe si es correcta. 
*   Realizar la validación en una función
*   Se puede utilizar la función filter_var()
 */

 //funcion que valida si una dirección de correo es correcta
 function esCorreoValido($correo){
     $correcto = false;
     if(!empty($correo) && filter_var($correo, FILTER_VALIDATE_EMAIL)){
         $correcto = true;
     }
     return $correcto;
 }

 //compruebo que me llega por get una variable correo
 if(isset($_GET['correo'])){
     $correo = $_GET['correo'];
     if(esCorreoValido($correo)){
         echo "La dirección de correo $correo es válida";
     }else{
        echo "La dirección de correo $correo no es válida";
     }
 }else{
     echo "No se ha recibido ningún correo";
 }