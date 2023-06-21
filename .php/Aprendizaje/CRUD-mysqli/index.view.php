<?php 
    require_once "models/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h1>Dashboard</h1>
    <h2>Registros</h2>
    <table border=1>
        <thead>
            <tr>
                <td>Id</td>
                <td>Correo</td>
                <td>Contraseña</td>
                <td>Fecha Creación</td>
                <td>Acciones</td>
            </tr>
        </thead>

        <tbody>
            <?php 
                $consulta = "SELECT * FROM USUARIOS";
                $resultado = mysqli_query($conexion, $consulta);

                while($fila = mysqli_fetch_array($resultado)) { ?>
                    <tr>
                        <td><?php echo $fila["idUsuario"]; ?></td>
                        <td><?php echo $fila["Correo"]; ?></td>
                        <td><?php echo $fila["Contraseña"]; ?></td>
                        <td><?php echo $fila["creado_el"]; ?></td>
                        <td>
                            <button><a href="EditarUsuario.php?idUsuario=<?php echo $fila["idUsuario"]; ?>">Editar</a></button>
                            <button><a href="EliminarUsuario.php?idUsuario=<?php echo $fila["idUsuario"]; ?>">Eliminar</a></button>
                        </td>
                    </tr>
                    
            <?php } ?>
        </tbody>
    </table>


    <br><br>
    <a href="register.view.php"><h2>Cerrar sesión</h2></a>
</body>
</html>