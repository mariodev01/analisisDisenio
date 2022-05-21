<?php
require_once 'conexion.php';
$alumno= new php();


$res= $alumno->cursos($_REQUEST['nombrecurso']);


if($res){
    echo "se inserto";
}else{
    echo "no se inserto";
}
?>