<?php 
    require_once "models/db.php";

    if (isset($_GET["idUsuario"])){
        $idUsuario = $_GET["idUsuario"];
        $consulta = "SELECT * FROM USUARIOS WHERE idUsuario = $idUsuario";
        $resultado = mysqli_query($conexion, $consulta);

        if(mysqli_num_rows($resultado) == 1){
            $fila = mysqli_fetch_array($resultado);
            $correo = $fila["Correo"];
            $contraseña = $fila["Contraseña"];
        }
    }   

    if(isset($_POST["btn-actualizar"])){
        $idUsuario = $_GET["idUsuario"];
        $correo = $_POST["Correo"];
        $contraseña = $_POST["Contraseña"];

        $consulta = "UPDATE USUARIOS SET Correo = '$correo', Contraseña = '$contraseña' WHERE idUsuario = $idUsuario";
        $resultado = mysqli_query($conexion, $consulta);

        header("Location: index.view.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Registro</h1>
    <form action="EditarUsuario.php?idUsuario=<?php echo $_GET["idUsuario"]; ?>" method="POST">
        <table border=1>
            <thead>
                <tr>
                    <td>Correo</td>
                    <td>Contraseña</td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><input type="email" name="Correo" value="<?php echo $correo;?>"></td>
                    <td><input type="text" name="Contraseña" value="<?php echo $contraseña;?>"></td>
                </tr>
            </tbody>
        </table>

        <br>
        <button type="submit" name="btn-actualizar">Actualizar Registro</button>
    </form>

</body>
</html>