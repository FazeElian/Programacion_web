<!-- Ejemplo funciones suma: -->
<?php
    echo "<h1> Ejemplo función Suma de dos números </h1>";

    function suma(){ //Creamos la función
        //Creamos las variables y sus valores, en este caso numéricos
        $num1 = 3; 
        $num2 = 5;

        echo "El resultado de la suma es :" . $num1 + $num2; //Añadimos texto en comillas junto con un espacio y un punto para separar cadena de texto con las variables, o saldría un error
    }

    //Llamamos a la función:
    suma();
?> 
