<?php 
    require_once "models/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <form action="crearUsuario.php" method="post">
        <h1>Registro</h1>
        <h2>Correo</h2>
        <input type="email" name="correo">

        <br>
        <h2>Contraseña</h2>
        <input type="password" name="contraseña">

        <br>
        <br>
        <button type="submit" name="btn-registro">Registarse</button>
    </form>
</body>
</html>