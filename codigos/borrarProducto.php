<?php
    include 'model/db.php';
    $idProd = $_GET['id_producto'];

    $sentencia = $bd->prepare("DELETE FROM producto WHERE id_producto=?;");

    $resultado = $sentencia -> execute([$idProd]);

    if ($resultado === TRUE) {
        header('Location: productos.php');
    } else {
        echo 'Error';
    }

?>
