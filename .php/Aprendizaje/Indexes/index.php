<!-- Funciones echo y print en php -->
<?php
    echo "Imprimiendo una cadena de texto con etiqueta echo <br>"; #<br> Significa el salto de línea
    echo "<h1> Imprimiendo un h1 con etiqueta echo </h1>"; # <h1> Es una etiqueta html de texto o Título 1
    print "Imprimiendo una cadena de texto con etiqueta print <br>";
?> 

<!-- Las dos imprimen cadena de texto -->

<!-- Definir e Imprimir variables -->
<?php
    #Para crear una variable ponemos el símbolo "$" seguido del nombre de la variable que le queramos poner
    $Hola_mundo = "Hola Mundo"; #Le ponemos un valor a la variable $Hola_mundo = "Hola Mundo"
    echo $Hola_mundo . "<br>"; #Imprimimos la variable y añadimos un espacio y un punto para poner una propiedad u otro dato, Le añadimos un salto de línea <br>
?> 

<!-- En el lenguaje PHP podemos añadir código html:  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
</head>
<body>
    <!-- <main> Es una etiqueta que se utiliza para separar el contenido principal del body - Etiqueta semántica de html -->
    <main> 
        <h1> Contenido de Curso de PHP en BootCamp</h1> 
    </main>

    <a href="index2.php"> Ir a Segunda página</a>
</body>
</html>