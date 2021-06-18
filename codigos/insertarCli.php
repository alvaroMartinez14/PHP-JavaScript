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
    <title>Insertar Cliente</title>
    <script src="model/añadido.js"></script>
</head>
<body>
    <form action="insertarCliente.php" method="post">
    <h1>Insertar cliente</h1><br>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NOMBRE: <input type="text" name="txtNombre"></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DNI: <input type="text" name="txtDni"></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CUENTA: <input type="text" name="txtCuenta"></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PAIS: <input type="text" name="txtPais"></p>
        <p>&nbsp;&nbsp;DIRECCION: <input type="text" name="txtDireccion"></p>
        <p>&nbsp;&nbsp;&nbsp;TELEFONO: <input type="text" name="txtTelefono"></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EMAIL: <input type="text" name="txtEmail"></p>
        &nbsp;&nbsp;&nbsp;<input type="submit" value="Añadir" id="añade">
    </form>
</body>
</html>
