<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>
    <?php
        echo "Magia con PHP";

        echo "<h1> Mi primera vez con PHP </h1>";

        echo "<h3> ============= VARIABLES Y TIPOS DE DATOS==============</h3>"
        $nombre = "Luke Skywalker"
        $edad =45;
        $temperatura = 56.78;
        $sensor = true;
        $caracter = '%';

        echo "<p> Hola </p>". $nombre."</p>";
        echo "<br>"
        echo $sensor;
        echo "<br>"
        echo $temperatura;

        echo "<br>"
        var_dump ($nombre);
        echo "<br>"
        var_dump ($edad);
        echo "<br>"
        var_dump ($temperatura);
        echo "<br>"
        var_dump ($sensor);
        echo "<br>"
        var_dump ($caracter);
        //Comentario de una linea

        /*
            Comentarios
            Multilinea
        */
    ?>
</h3>
</body>
</html>