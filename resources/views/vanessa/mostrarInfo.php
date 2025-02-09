<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion</title>
</head>
<body>
    <h1>Aqui se mostrara Informacion de las materias</h1>
    <?php


    require "../app/Models/database.php";
    use App\Models\dataBase;

    
    $conexionDataBase = new dataBase;



    $materiaInfo = $_POST['materia'];

    $resultados = $conexionDataBase->consulta("SELECT Materias.nombre AS materia, Salones.nombre AS salon, Edificios.nombre AS edificio, Dias.dia_nombre, Horas.hora_inicio, Horas.hora_fin FROM Horarios JOIN Materias ON Horarios.id_materia = Materias.id JOIN Salones ON Horarios.id_salon = Salones.id JOIN Edificios ON Salones.id_edificio = Edificios.id JOIN Dias ON Horarios.id_dia = Dias.id JOIN Horas ON Horarios.id_hora = Horas.id WHERE Materias.nombre = '$materiaInfo' AND Dias.dia_nombre = '$diaInfo';")->obtenerResultados();



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

    echo $hora_inicio . " $hora_fin";

    echo $materia;
    
    ?>
</body>
</html>