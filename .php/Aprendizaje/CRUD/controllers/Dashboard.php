<?php session_start();
    include "models/DataBase.php";

    class Dashboard{        
        public function __construct(){}
        public function main(){
            require_once "views/admin/header.view.php";
            require_once "views/admin/admin.view.php";
        }
    }
    if (isset($_POST["bott-registrarse"])){
        $correo = $_POST["correo"];
        $usuario = $_POST["usuario"];
        $contraseña = $_POST["contraseña"];

        $consultaSql = "INSERT INTO USUARIOS(correo, nombreUsuario, contraseña) VALUES ('$correo','$usuario','$contraseña')";
        $resultado = mysqli_query($conex, $consultaSql);

        if(!$resultado) {
            die("Registro fallido");
        }

        require_once "views/admin/header.view.php";
        require_once "views/admin/admin.view.php";
    }
?>