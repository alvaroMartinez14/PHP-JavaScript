<?php
    include 'model/db.php';
    
    $txtNombre = $_POST['txtNombre'];
    $txtDni = $_POST['txtDni'];
    $txtCuenta = $_POST['txtCuenta'];
    $txtPais = $_POST['txtPais'];
    $txtDireccion = $_POST['txtDireccion'];
    $txtTelefono = $_POST['txtTelefono'];
    $txtEmail = $_POST['txtEmail'];

    $sentencia = $bd->prepare("INSERT INTO cliente (`nombre`,`dni`,`num_cuenta`,`pais`,`direccion`,`telefono`,`email`) 
    VALUES (?, ?, ?, ?, ?, ?, ?);");

    $resultado = $sentencia -> execute([$txtNombre, $txtDni, $txtCuenta,
    $txtPais, $txtDireccion, $txtTelefono, $txtEmail]);

    if ($resultado === TRUE) {
        header('Location: clientes.php');
    } else {
        echo 'Error';
    }

?>
