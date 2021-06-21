<?php
/**
 * Realizar un programa que compruebe que tipo de navegador realiza la petición al servidor
 *Cuando se realiza una petición al servidor se envía un string que php guarda en la variable $_SERVER[‘HTTP_USER_AGENT’]

 */

 //prueba el resultado en diferentes navegadores

 print_r($_SERVER['HTTP_USER_AGENT']);

 print "<br>";
 print_r($_GET);
 print "<br>";

 //print_r($_POST);