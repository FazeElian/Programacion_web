<?php
    echo "<h1>Usando echo count para los días de la semana</h1>";

    $diasSemana[0] = "Lunes<br>";
    $diasSemana[1] = "Martes<br>";
    $diasSemana[2] = "Miercoles<br>";
    $diasSemana[3] = "Jueves<br>";
    $diasSemana[4] = "Viernes<br>";
    $diasSemana[5] = "Sábado<br>";
    $diasSemana[6] = "Domingo<br>";

    echo "La semana tiene: ".count($diasSemana); //echo count o count cuenta la cantidad de datos de una variable
    echo " días<br><br>";

    print_r($diasSemana);
?> 