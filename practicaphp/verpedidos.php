<?php
$ar= fopen("pedidos.txt","r") or
die("no se pudo abrir el archivo");

while(!feof($ar)){
    $line= fgets($ar);
    $linejump = nl2br($line);
    echo $linejump;
}

fclose($ar);

?>