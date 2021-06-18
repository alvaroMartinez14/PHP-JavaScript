<?php
    session_start();
    if ($_SESSION['todoOK']==false) {
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="model/estilo.css">
    <title>Cambiar contraseña</title>
    <script src="model/cambioPass.js"></script>
</head>
<body>
    <form action="editarPass.php" method="post">
    <h1>Cambiar contraseña</h1><br>
        <p>&nbsp;&nbsp;&nbsp;Nombre de usuario: <input type="text" name="txtNombre"></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;Nueva contraseña: <input type="text" name="txtPass"></p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" values="Cambiar" id="cambioPass">
    </form>
</body>
</html>
