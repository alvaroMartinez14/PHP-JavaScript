<?php
    include 'model/db.php';
    
    $txtNombre = $_POST['txtNombre'];
    $txtCif = $_POST['txtCif'];
    $txtDireccion = $_POST['txtDireccion'];
    $txtProvincia = $_POST['txtProvincia'];
    $txtLocalidad = $_POST['txtLocalidad'];

    $sentencia = $bd->prepare("INSERT INTO proveedor (`nombre`,`cif`,`direccion`,`provincia`,`localidad`) 
    VALUES (?, ?, ?, ?, ?);");

    $resultado = $sentencia -> execute([$txtNombre, $txtCif, $txtDireccion,
    $txtProvincia, $txtLocalidad]);

    if ($resultado === TRUE) {
        header('Location: proveedores.php');
    } else {
        echo 'Error';
    }

?>
