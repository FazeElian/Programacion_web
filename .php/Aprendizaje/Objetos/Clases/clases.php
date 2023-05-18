<!-- Creación de clases  -->
<?php
    echo "<h1> Creación de clase </h1>";

    //Creación de clase
    class clase{
        function Funcion1(){ //Creación de función Funcion1
            echo "<br> echo de función 1 </br>";
        }

        function Funcion2(){ //Creación de función Funcion2
            echo "<br> echo de función 2 </br>";
        }

        function Funcion3(){ //Creación de función Activar modo avión
            echo "<br> echo de función 3 </br>";
        }
    }

    $pantalla = new clase; //Creación de objeto en la variable $pantalla

    //Asignación de funciones a variable $pantalla
    $pantalla->Funcion1(); //Se le asigna la función Funcion1 
    $pantalla->Funcion2(); //Se le asigna la función Funcion2 
    $pantalla->Funcion3(); //Se le asigna la función Funcion3 
?> 
