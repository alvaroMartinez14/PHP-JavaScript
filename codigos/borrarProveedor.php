<?php
    include 'model/db.php';
    $id = $_GET['id'];

    print_r($id);

    $sentencia = $bd->prepare("DELETE FROM proveedor WHERE id=?;");

    $resultado = $sentencia -> execute([$id]);

    if ($resultado === TRUE) {
        header('Location: proveedores.php');
    } else {
        echo 'Error';
    }

?>
