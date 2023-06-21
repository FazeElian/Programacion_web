<?php 
    include "models/db.php";

    if(isset($_POST["btn-registro"])){
        $correo = $_POST["correo"];
        $contraseña = $_POST["contraseña"];

        $consulta = "INSERT INTO USUARIOS(Correo, Contraseña) VALUES ('$correo','$contraseña')";
        $resultado = mysqli_query($conexion, $consulta);

        if(!$resultado){
            die("Consulta fallida");
        }

        header("Location: index.view.php");
        echo "Registrado";
    }
?>