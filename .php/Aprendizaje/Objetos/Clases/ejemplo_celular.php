<!-- Clase Celular -->
<?php
    echo "<h1> Creación de clase Celular </h1>";

    //Creación de clase
    class celular{
        function apagar(){ //Creación de función Apagar
            echo "<br> Apagar Celular </br>";
        }

        function reiniciar(){ //Creación de función Reiniciar
            echo "<br> Reiniciar Celular </br>";
        }

        function modo_avion(){ //Creación de función Activar modo avión
            echo "<br> Activar modo avión </br>";
        }
    }

    $pantalla = new celular; //Creación de objeto en la variable $pantalla

    //Asignación de funciones a variable $pantalla
    $pantalla->apagar(); //Se le asigna la función apagar 
    $pantalla->reiniciar(); //Se le asigna la función reiniciar 
    $pantalla->modo_avion(); //Se le asigna la función modo_avion 
?> 
