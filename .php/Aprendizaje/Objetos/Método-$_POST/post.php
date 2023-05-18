<!-- Método POST para Enviar y recibir datos -->
<?php
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $edad = $_POST["edad"];

    echo "Bienvenido " , $nombre, " ", $apellido;
    echo "<br>";
    echo "Usted tiene ", $edad, " años";
?> 