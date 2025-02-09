<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion</title>
</head>
<body>
    <h1>Aqui se mostrara Informacion de las materias</h1>
    <?php

    $materiaInfo = $_POST['materia'];
    echo $diaInfo;
    echo "<p>Información de la materia: $materiaInfo</p> <br>";
    foreach ($resultados as $resultado) {
        extract($resultado);
        /*
        $materia
        $salon
        $edificio
        $dia_nombre
        $hora_inicio
        $hora_fin
         */

    }

    echo $materia;
    
    ?>
</body>
</html>