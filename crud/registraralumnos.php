<?php
require_once 'conexion.php';
$alumno = new php();


$res= $alumno->insertaralumnos($_REQUEST['nombre'],$_REQUEST['email'],$_REQUEST['codigocurso']);


if($res){
    echo("se inserto");
}else{
    echo ("no se inserto");
}




?>