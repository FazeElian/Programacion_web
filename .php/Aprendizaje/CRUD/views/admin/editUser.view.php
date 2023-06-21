<?php 
    include "models/Database.php";

    if(isset($_POST["idUsuario"])){
        $idUsuario = $_POST["idUsuario"];
        $correo = $_POST["correo"];
        $consulta = "SELECT * FROM USUARIOS WHERE correo = $correo";
        $resultado = mysqli_query($conex, $consulta);

        if (mysqli_num_rows($resultado) == 1) {
            $row = mysqli_fetch_array($resultado);
            $correo = $_POST["correo"];
            echo $correo;
        }
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
    <section class="registros">
        <div class="texto-registros">
            <h2>Editar Registro</h2>
        </div>
        
        <table class="registros" border=1>
            <tr class="columnas-caract">
                <td>Correo</td>
                <td>Usuario</td>
                <td>Contraseña</td>
            </tr>

            <tr>
                <td><input type="email" name="correo" value="<?php echo $correo; ?>"></td>
                <td><input type="text" name="usuario" value="<?php echo $usuario; ?>"></td>
                <td></td>
            </tr>
        </table>
    </section>
</body>
</html>