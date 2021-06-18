<?php 
    include 'model/db.php';

    $txtNombre2 = $_POST['txtNombre'];
    $txtCif2 = $_POST['txtCif'];
    $txtDireccion2 = $_POST['txtDireccion'];
    $txtProvincia2 = $_POST['txtProvincia'];
    $txtLocalidad2 = $_POST['txtLocalidad'];
    $txtId2 = $_POST['txtId'];

    $sentencia = $bd->prepare("UPDATE proveedor SET nombre=?, cif=?,
    direccion=?, provincia=?, localidad=? WHERE id=?;");

    $resultado = $sentencia -> execute([$txtNombre2, $txtCif2, $txtDireccion2,
    $txtProvincia2, $txtLocalidad2, $txtId2]);

    if ($resultado === TRUE) {
        header('Location: proveedores.php');
    } else {
        echo 'Error';
    }

?>
