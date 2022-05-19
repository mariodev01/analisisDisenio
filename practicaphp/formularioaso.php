<?php
$user["mario"]=1234;
$user["Adrian"]=4675;
$user["Polanco"]=4444;
$user["Maykel"]=5555;
$user["Guillermo"]=1111;


foreach($user as $nombre=> $clave){
    echo "nombre de usuario es ".$nombre." y su clave es  ".$clave."<br>";
}
?>