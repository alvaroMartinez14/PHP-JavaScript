<?php
    include 'model/db.php';
    
    $txtNombre = $_POST['txtNombre'];
    $txtCategoria = $_POST['txtCategoria'];
    $txtCantidad = $_POST['txtCantidad'];
    $txtPrecio = $_POST['txtPrecio'];
    $txtIva = $_POST['txtIva'];

    $sentencia = $bd->prepare("INSERT INTO producto (`nombre`,`categoria`,`cantidad`,`precio`,`iva`) 
    VALUES (?, ?, ?, ?, ?);");

    $resultado = $sentencia -> execute([$txtNombre, $txtCategoria, $txtCantidad,
    $txtPrecio, $txtIva]);

    if ($resultado === TRUE) {
        header('Location: productos.php');
    } else {
        echo 'Error';
    }

?>
