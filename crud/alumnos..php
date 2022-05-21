<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="registraralumnos.php" method="post">
        ingrese su nombre:
        <input type="text" name="nombre">
        <br>
        ingrese su email:
        <input type="text" name="email">
        <br>
        <select name="codigocurso">elige el curso
            <option value="1">PHP</option>
            <option value="2">ASP</option>
            <option value="3">JSP</option>
        </select>

        <input type="submit" value="Insertar">
    </form>

    
</body>
</html>