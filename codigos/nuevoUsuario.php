<?php
    include 'model/db.php';
    
    $txtNombre = $_POST['txtNombre'];
    $txtPass = $_POST['txtPass'];

    $sentencia = $bd->prepare("INSERT INTO logueo (`usuario`,`password`) VALUES (?, ?);");

    $resultado = $sentencia -> execute([$txtNombre, md5($txtPass)]);

    if ($resultado === TRUE) {
        header('Location: login.php');
    } else {
        echo 'Error';
    }

?>
