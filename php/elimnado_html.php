<?php
if(!$fp=fopen("https://www.google.com/index.html","r")){
    echo "error al abrir el fichero";
    exit;
}
while(!feof($fp)){
    $linea= fgets($fp,4096);
    $linea=str_replace("Google","www.otro.es",$linea);
    $linea=str_replace("Youtube","YT",$linea);
    $linea=str_replace("Voy a tener suerte","suerte",$linea);
    print $linea;
}
fclose($fp);