<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="borrar.php" method="post">
        ingresa el nombre del curso que quieres borrar:
        <input type="text" name="nombrecurso"> <br>
        <input type="submit" value="borrar">
    </form>


 <!--    <?php
   /*  require_once 'conexion.php';

    $curso= new php();


    $res= $curso->cursoN($_REQUEST['nombrecurso']);
    if($reg=mysqli_fetch_array($res)){
        $res2= $curso->borrarcurso($_REQUEST['nombrecurso']) or
        die("no se pudo borrar");
    }else{
        echo "no existe curso con ese nombre";
    } */
    ?> -->
</body>
</html>