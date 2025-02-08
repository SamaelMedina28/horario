<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    "<br>";
    foreach($resultado as $dia){
        extract($dia);
        echo $materia;
        echo "<br>";
        echo $hora_inicio;
        echo "<br>";
        echo $hora_fin;
        echo "<br>";
        echo $salon;
        echo "<br>";
        echo $edificio;
        echo "<br>";
    }
    ?>
</body>
</html>