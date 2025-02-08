<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

    <strong> <?php echo ucfirst($dia); ?></strong>
    <main>


    <?php 
        foreach($resultado as $dia){
        extract($dia);
    ?>   
    <form>
        <button class="options"> 
        <?php 
            echo $materia . "<br>" . substr($hora_inicio, 0 ,5) . " - " . substr($hora_fin, 0 ,5) . "<br>";
/*             echo $salon;
            echo "<br>";
            echo $edificio;
            echo "<br>"; */
        }
        ?>
        </button>
    </form>    
    </main>

</body>
</html>