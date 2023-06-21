<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="assets/css/company-styles.css">
</head>
<body>
    <form action="?c=Dashboard" method="post" class="formulario-register">
        <h1>Registrarse:</h1>
        <br>
        <br>

        <h3>Correo Electrónico:</h3>
        <input type="email" name="correo" id="correo">
        <br>

        <h3>Nombre de Usuario</h3>
        <input type="text" name="usuario" id="usuario">
        <br>

        <h3>Contraseña</h3>
        <input type="password" name="contraseña" id="contraseña">
        <br>

        <br>
        <button type="submit" id="bott-registrarse" name="bott-registrarse">Registrarse</button>
    </form>
</body>
</html>