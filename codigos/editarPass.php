<?php 
    include 'model/db.php';

    $txtNombre2 = $_POST['txtNombre'];
    $txtPass2 = $_POST['txtPass'];

    $sentencia = $bd->prepare("UPDATE logueo SET password=? WHERE usuario=?;");

    $resultado = $sentencia -> execute([md5($txtPass2), $txtNombre2]);

    if ($resultado === TRUE) {
        header('Location: index.php');
    } else {
        echo 'Error';
    }

?>
