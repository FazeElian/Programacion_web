<!-- Método GET para Enviar y recibir datos -->
<?php
    $nombre = $_GET["nombre"];
    $apellido = $_GET["apellido"];
    $edad = $_GET["edad"];

    echo "Bienvenido " , $nombre, " ", $apellido;
    echo "<br>";
    echo "Usted tiene ", $edad, " años";
?> 