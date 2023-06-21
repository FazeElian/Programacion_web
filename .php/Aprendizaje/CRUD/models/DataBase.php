<?php      
    // Conexión Base de Datos
    $hostname = "localhost";
    $root = "root";
    $password = "";
    $database = "crud_php";

    $conex = mysqli_connect($hostname, $root, $password, $database) or die(mysqli_error($mysqli));

    // Verificamos que la Base de datos esté conectada
    // if (isset($conex)){
    //     echo " BBDD Conectada";
    // }else{
    //     die("Conexión fallida: " . mysqli_connect_error());
    // }
?>
