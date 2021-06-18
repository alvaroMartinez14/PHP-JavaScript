<?php 
    include 'model/db.php';
    
    $txtNombre = $_POST['txtNombre'];
    $txtCategoria = $_POST['txtCategoria'];
    $txtCantidad = $_POST['txtCantidad'];
    $txtPrecio = $_POST['txtPrecio'];
    $txtIva = $_POST['txtIva'];
    $txtIdProducto = $_POST['txtIdProducto'];

    $sentencia = $bd->prepare("UPDATE producto SET nombre=?, categoria=?,
    cantidad=?, precio=?, iva=? WHERE id_producto=?;");

    $resultado = $sentencia -> execute([$txtNombre, $txtCategoria, $txtCantidad,
    $txtPrecio, $txtIva, $txtIdProducto]);

    if ($resultado === TRUE) {
        header('Location: productos.php');
    } else {
        echo 'Error';
    }

?>
