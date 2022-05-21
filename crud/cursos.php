<?php
require_once 'conexion.php';

$alumno= new php();

$res= $alumno->vercurso();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="registrarcurso.php" method="post">
        ingrese el nombre del curso:
        <input type="text" name="nombrecurso">
        <br>
        <input type="submit" value="insertar">
    </form>


    <?php
    while($reg=mysqli_fetch_array($res)){
       echo $reg['codigo']." ".$reg['nombrecurso']."<br>";
    }
    ?>
</body>
</html>