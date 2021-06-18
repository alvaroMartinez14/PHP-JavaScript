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
    <title>Insertar Producto</title>
    <script src="model/añadido.js"></script>
</head>
<body>
    <form action="insertarProducto.php" method="post">
    <h1>Insertar producto</h1><br>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NOMBRE: <input type="text" name="txtNombre"></p>
        <p>&nbsp;&nbsp;CATEGORIA: <input type="text" name="txtCategoria"></p>
        <p>&nbsp;&nbsp;&nbsp;CANTIDAD: <input type="text" name="txtCantidad"></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRECIO: <input type="text" name="txtPrecio"></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IVA: <input type="text" name="txtIva"></p>
        &nbsp;&nbsp;&nbsp;<input type="submit" value="Añadir" id="añade">
    </form>
</body>
</html>
