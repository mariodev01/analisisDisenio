<?php
/*  require_once 'conexion.php';
$curso= new php();



$res= $curso->borrarcurso($_REQUEST['nombrecurso']);

if($res){
    echo "se borro con exito";
}else{
    echo "no se pudo borrar el archivo, al parecer no se encuentra o queseyo";
}  */

require_once 'conexion.php';

$curso= new php();


$res= $curso->cursoN($_REQUEST['nombrecurso']);
if($reg=mysqli_fetch_array($res)){
    echo "se ejecuto";
    $res2= $curso->borrarcurso($_REQUEST['nombrecurso']) or
    die("no se pudo borrar");
}
else{
    echo "no existe curso con ese nombre";
}

?>