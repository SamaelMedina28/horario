<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunita</title>
    <link rel="stylesheet" href=".../css/calendarioV.css">
</head>
<body>
    <strong>Dias</strong>
    <main>
        <form action="lunes" method="post">
            <input type="text" name="dia" value="lunes" hidden>
            <button type="submit">Lunes</button>
        </form>
        <form action="martes" method="post">
            <input type="text" name="dia" value="martes" hidden>
            <button type="submit">Martes</button>  
        </form>
        <form action="miercoles" method="post">
            <input type="text" name="dia" value="miercoles" hidden>
            <button type="submit">Miercoles</button>
        </form> 
        <form action="jueves" method="post">
            <input type="text" name="dia" value="jueves" hidden>
            <button type="submit">Jueves</button>
        </form>
        <form action="viernes" method="post">
            <input type="text" name="dia" value="viernes" hidden>
            <button type="submit">Viernes</button>
        </form>       
    </main>
</body>
</html>