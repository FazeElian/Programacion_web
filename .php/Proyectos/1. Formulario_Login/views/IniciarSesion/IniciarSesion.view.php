<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title> 
    <link rel="stylesheet" href="assets/css/Index.css">
    <link rel="stylesheet" href="assets/css/IniciarSesion.css">

</head>
<body>
<body bgcolor="gray"> 
    <header class="menu_sup">
        <div class="inicio">
            <a href="?"><li class="Inicio"><h1>Inicio</h1></li></a>
        </div>

        <div class="repositorios">
            <li class="respositorios"><h1>Repositorios GitHub</h1></li>
        </div>

        <section class="cuenta">
            <div class="iniciarSesion">
                <a href="?"><li class="iniciarSesion"><h1>Iniciar sesión</h1></li></a>
            </div>

            <div class="registrarse">
                <a href="?c=Registrarse"><li class="registrarse"><h1>Registrarse</h1></li></a>
            </div>
        </section>
    </header>

    <form action="Registro.php" id="Form" method="POST">
        <section class="cont_form">
            <h1 class="h1_usuario">Usuario</h1>
            <input type="text" name="Usuario" id="Usuario" placeholder="Usuario">

            <h1 class="h1_contraseña">Contraseña</h1>
            <input type="password" name="Contraseña" id="Contraseña" placeholder="Contraseña">
        </section>
    </form>

    <!-- Botón: Iniciar sesión-->
    <div class="bott_login" type="submit" id="bott_login" name="bott_login">
        <h1>Iniciar sesión</h1>
    </div>


</body>
</html>