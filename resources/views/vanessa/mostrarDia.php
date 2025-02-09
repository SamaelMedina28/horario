<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia</title>
    <link rel="stylesheet" href="../css/style.css"> 
</head>
<body>

    <strong> <?php echo ucfirst($dia); ?></strong>
    <main>

    <?php 
        foreach($resultados as $resultado){
            extract($resultado);
    ?>   
    <form action="<?php echo $dia ?>/mostrarInfo" method="post">
        <!-- El campo oculto contiene la información de la materia -->
        <input type="hidden" name="materia" value="<?=$materia;?>">
        
        <button class="options" type="submit"> 
            <?php 
                echo $materia . "<br>" . substr($hora_inicio, 0 ,5) . " - " . substr($hora_fin, 0 ,5) . "<br>";
            ?>
        </button>
    </form>    
    <?php } ?>

    </main>

</body>
</html>





