<?php
/**
 * 5.	Crear un array con siguiente contenido relativo a videojuegos
*       ACCION	AVENTURA	DEPORTES
*       GTA		ASSASINS	FIFA 19
*       COD		CRASH		PES 19
*       PUGB	PRINCE OF	MOTO GP 19
		*       PERSIA

 */

 $juegos = array(
     "ACCION" => array("GTA", "COD", "PUGB"),
     "AVENTURA" => array("ASSASINS", "CRASH", "PRINCE OF PERSIA"),
     "DEPORTES" => array("FIFA 19", "PES 19", "MOTO GP 19")
 );

 //version de Darren
 $juegos2 = array(
     "ACCION" => "GTA", "COD", "PUGB",
     "AVENTURA" => "ASSASINS", "CRASH", "PRINCE OF PERSIA",
     "DEPORTES" => "FIFA 19", "PES 19", "MOTO GP 19"
 );

 //var_dump(array_keys($juegos));

 //comprobar si existe una clave en un array
 if(array_key_exists("2D", $juegos)){
     echo "Tenemos juegos en 2D";
 }else{
     echo "Necesitamos juegos en 2D";
 }
echo "<br>";
 if(array_key_exists("AVENTURA", $juegos)){
     echo "Tenemos juegos de aventuras";
 }else{
     echo "Necesitamos juegos de aventuras";
 }
 echo "<br>";
 //imprimir el array
 foreach($juegos2 as $key=>$valor){
     echo "$key: $valor <br>";
 }
 
 foreach($juegos as $key=>$valor){
    echo "<b> $key: </b> <br>";
    foreach($valor as $leche){
        echo $leche . "<br>";
    }
}