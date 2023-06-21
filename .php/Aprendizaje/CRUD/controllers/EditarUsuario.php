<?php
    include "models/DataBase.php";

    class EditarUsuario{        
        public function __construct(){}
        public function main(){
            require_once "views/admin/header.view.php";
            require_once "views/admin/editUser.view.php";
        }
    }

    if(isset($_GET["idUsuario"])){
        $idUsuario = $_GET["idUsuario"];
        $consulta = "SELECT * FROM USUARIOS WHERE idUsuario = $idUsuario";
        $resultado = mysqli_query($conex, $consulta);

        if (mysqli_num_rows($resultado) == 1) {
            $row = mysqli_fetch_array($resultado);
            echo $row['correo'];
        }
    }

?>