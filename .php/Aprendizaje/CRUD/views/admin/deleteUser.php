<?php
    include "models/DataBase.php";

    if (isset($_GET["idUsuario"])){
        $idUsuario = $_GET["idUsuario"];
        $consulta = "DELETE FROM USUARIOS WHERE idUsuario = $idUsuario";
        $resultado = mysqli_query($conexion, $consulta);

        if(!$resultado){
            die("Consulta fallida");
        }
        
        echo "Registro eliminado";
    }
?>