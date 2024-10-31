<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Alberto Manzano</h1>
    
    <div id="relojCliente"></div>
    <script src="./js/reloj.js"></script>
    <form action="insertar.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" min="1" required>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>