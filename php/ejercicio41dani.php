<?php

//Crea un array con el nombre de varias frutas.
//Muestra el array en pantalla ordenado alfabéticamente en orden creciente y después en orden decreciente


$frutas = array("uva", "manzana", "pera" , "mango", "sandía", "melón");
echo "<h2> Array ordenado de manera creciente con sort() </h2>";
 
sort($frutas);
  print_r($frutas);
 echo"<br>";
 
 
 echo "<h2> Array ordenado de manera decreciente con rsort() </h2>";
 
 rsort($frutas);
  print_r($frutas);
 echo "<br>";

 /*Crea un array asociativo con varios valores con la clave de una especie de animales  y valor un animal. Ejemplo: ave => paloma
  *Muestra el array en pantalla ordenado alfabéticamente en orden creciente y después en orden decreciente
  *Elimina un elemento del array y vuelve a mostrarlo*/

  $animales =[
      "ave" => "paloma",
      "pez" => "sardina",
      "reptil" => "serpiente",
      "mamifero" => "elefante" 
  ];
 
  echo "<h2> array asociativo ordenado creciente y decreciente </h2>";
 
  sort($animales);
  echo mostrarArray($animales);
  
  echo "<br>";
  
  rsort($animales);
  echo mostrarArray($animales);
  echo "<br>";
 
  //borra un elemento del array
  unset($animales['ave']);
  unset($animales['reptil']);
  echo mostrarArray($animales);

  function mostrarArray($array){
      $texto = "<hr>";
      foreach($array as $clave=>$valor){
          $texto.= "{$clave} : {$valor} <br>";
      }
      $texto .= "<hr>";
      return $texto;
  }