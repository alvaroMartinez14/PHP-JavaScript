<?php 
    include 'model/db.php';
    
    $txtNombre2 = $_POST['txtNombre'];
    $txtDni2 = $_POST['txtDni'];
    $txtCuenta2 = $_POST['txtCuenta'];
    $txtPais2 = $_POST['txtPais'];
    $txtDireccion2 = $_POST['txtDireccion'];
    $txtTelefono2 = $_POST['txtTelefono'];
    $txtEmail2 = $_POST['txtEmail'];
    $txtIdCli2 = $_POST['txtIdCli'];

    $sentencia = $bd->prepare("UPDATE cliente SET nombre=?, dni=?,
    num_cuenta=?, pais=?, direccion=?, telefono=?, email=? WHERE id_cli=?;");

    $resultado = $sentencia -> execute([$txtNombre2, $txtDni2, $txtCuenta2,
    $txtPais2, $txtDireccion2, $txtTelefono2, $txtEmail2, $txtIdCli2]);

    if ($resultado === TRUE) {
        header('Location: clientes.php');
    } else {
        echo 'Error';
    }

?>
