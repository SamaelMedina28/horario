<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <?php

    use App\Models\dataBase;

    $conexionDataBase = new dataBase;

    $materiaInfo = $_POST['materia'];

    $resultados = $conexionDataBase->consulta("SELECT Materias.nombre AS materia, Salones.nombre AS salon, Edificios.nombre AS edificio, Dias.dia_nombre, Horas.hora_inicio, Horas.hora_fin FROM Horarios JOIN Materias ON Horarios.id_materia = Materias.id JOIN Salones ON Horarios.id_salon = Salones.id JOIN Edificios ON Salones.id_edificio = Edificios.id JOIN Dias ON Horarios.id_dia = Dias.id JOIN Horas ON Horarios.id_hora = Horas.id WHERE Materias.nombre = '$materiaInfo' AND Dias.dia_nombre = '$diaInfo';")->obtenerResultados();

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

    ?>

    <strong>
        Materia Seleccionada
    </strong>
    <main>
        <section class="options detallado">
            <span>Materia:</span>
            <b><?=strtoupper($materia)?></b>
            <div class="flexContainer">
                <div class="left">
                    <span>Hora de Inicio:</span>
                    <b><?= substr($hora_inicio, 0, 5) ?></b>
                    <span>Salon:</span>
                    <b><?= $salon ?></b>
                </div>
                <div>
                    <span>Hora de Fin:</span>
                    <b><?= substr($hora_fin, 0, 5) ?></b>
                    <span>Edificio:</span>
                    <b><?=strtoupper($edificio)?></b>
                </div>
            </div>

        </section>
    </main>

    <a href="../../lunita/<?=$diaInfo?>" class="atras"><-</a>

</body>

</html>