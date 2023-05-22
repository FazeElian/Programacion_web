<?php
    //Conectamos la base de datos
    $connection = mysqli_connect("localhost", "root", "", "formulario_login-bbdd");

    //Llamamos los inputs de formulario html
    // $nombreUsuario = $_POST["Usuario"];
    // $contraseña = $_POST["Contraseña"];

    //Verificamos la conexión de la base de datos
    if($connection) {
        echo "Base Conectada";
    }

    else{
        echo "Base no conectada";
    }


?>