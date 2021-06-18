<?php
    session_start();
    include 'model/db.php';
    $sentencia = $bd -> prepare("SELECT * FROM producto WHERE id_producto=?;");
    $sentencia -> execute([$_GET['id_producto']]);
    $productos = $sentencia -> fetchAll(PDO::FETCH_OBJ);
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
    <title>Editar Producto</title>
</head>
<body>
    <form action="editarProducto.php" method="post">
    <h1>Editar producto</h1><br>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NOMBRE: <input type="text" name="txtNombre" value="<?=$productos[0]->nombre;?>"></p>
        <p>&nbsp;&nbsp;&nbsp;CATEGORIA: <input type="text" name="txtCategoria" value="<?=$productos[0]->categoria;?>"></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CANTIDAD: <input type="text" name="txtCantidad" value="<?=$productos[0]->cantidad;?>"></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRECIO: <input type="text" name="txtPrecio" value="<?=$productos[0]->precio;?>"></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IVA: <input type="text" name="txtIva" value="<?=$productos[0]->iva;?>"></p>
        <input type="hidden" name="txtIdProducto" value="<?=$productos[0]->id_producto;?>">
        &nbsp;&nbsp;&nbsp;<input type="submit" values="Editar">
    </form>
</body>
</html>
