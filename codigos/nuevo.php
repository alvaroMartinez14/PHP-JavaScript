<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="model/estilo.css">
    <title>Nuevo usuario</title>
    <script src="model/añadido.js"></script>
</head>
<body>
    <form action="nuevoUsuario.php" method="post">
    <h1>Nuevo usuario</h1><br>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NOMBRE: <input type="text" name="txtNombre"></p>
        <p>&nbsp;&nbsp;PASSWORD: <input type="text" name="txtPass"></p>
        &nbsp;&nbsp;&nbsp;<input type="submit" value="Añadir" id="añade">
    </form>
</body>
</html>
