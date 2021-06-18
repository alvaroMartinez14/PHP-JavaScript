<?php

    $dbname = 'martineza';
    $user = 'root';
    $pass = '';

    try {   //Conexion con PDO

        $bd = new PDO(
            'mysql:host=localhost;
            dbname=' . $dbname,
            $user,
            $pass
        );

    } catch (Exception $e) {
        echo "Error de Conexion " . $e->getMessage();
    }

?>
