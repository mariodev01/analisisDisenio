<?php
    require_once 'conexion.php';
    $alumno = new php();

    $res = $alumno->findalumno($_REQUEST['alumno']);

    while($reg=mysqli_fetch_array($res)){
        echo "codigo Alumno: ". $reg['codigo']."<br>";
        echo "email: ". $reg['email']."<br>";
        echo "codigo del curso: ". $reg['codigocurso']."<br>";
    
    }
    ?>