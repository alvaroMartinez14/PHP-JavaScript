<?php
    include 'model/db.php';
    $id = $_GET['id_cli'];

    print_r($id);

    $sentencia = $bd->prepare("DELETE FROM cliente WHERE id_cli=?;");

    $resultado = $sentencia -> execute([$id]);

    if ($resultado === TRUE) {
        header('Location: clientes.php');
    } else {
        echo 'Error';
    }

?>
