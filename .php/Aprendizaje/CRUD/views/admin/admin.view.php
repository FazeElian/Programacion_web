<?php 
    include "models/Database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <section class="contenido">
        <h1>Estás en el Dashboard</h1>
    </section>

    <section class="registros">
        <div class="texto-registros">
            <h2>Registros</h2>
        </div>
        
        <table class="registros" border=1>
            <tr class="columnas-caract">
                <td>Id</td>
                <td>Correo</td>
                <td>Usuario</td>
                <td>Contraseña</td>
                <td>Acciones</td>
            </tr>

            <tr>
            <?php
            $query = "SELECT * FROM USUARIOS";
            $result_tasks = mysqli_query($conex, $query);    

            while($row = mysqli_fetch_assoc($result_tasks)) { ?>
            <tr>
                <!-- Imprimimos todos los datos según el nombre de la columna de la tabla de la bbdd -->
                <td><?php echo $row['idUsuario']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                <td><?php echo $row['nombreUsuario']; ?></td>
                <td><?php echo $row['contraseña']; ?></td>
                <td>
                    <button>
                        <a href="?c=EditarUsuario&?idUsuario=<?php echo $row['idUsuario']; ?>">
                            Editar
                        </a>
                    </button>

                    <button>
                        <a href="views/admin/deleteUser.php&?idUsuario=<?php echo $row['idUsuario']; ?>">
                            Eliminar
                        </a>
                    </button>
                </td>
            </tr>
            <?php } ?>
            </tr>
        </table>
    </section>
</body>
</html>