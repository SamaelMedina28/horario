<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunita</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <strong>Dias</strong>
    <main>
        <form action="lunita/lunes" method="post">
            <input type="text" name="dia" value="lunes" hidden>
            <button class="options" type="submit">Lunes</button>
        </form>
        <form action="lunita/martes" method="post">
            <input type="text" name="dia" value="martes" hidden>
            <button class="options" type="submit">Martes</button>  
        </form>
        <form action="lunita/miercoles" method="post">
            <input type="text" name="dia" value="miercoles" hidden>
            <button class="options" type="submit">Miercoles</button>
        </form> 
        <form action="lunita/jueves" method="post">
            <input type="text" name="dia" value="jueves" hidden>
            <button class="options" type="submit">Jueves</button>
        </form>
        <form action="lunita/viernes" method="post">
            <input type="text" name="dia" value="viernes" hidden>
            <button class="options" type="submit">Viernes</button>
        </form>       
    </main>
</body>
</html>