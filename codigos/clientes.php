<?php
    session_start();
    include 'model/db.php';
    $sentencia = $bd -> query("SELECT * FROM cliente");
    $clientes = $sentencia -> fetchAll(PDO::FETCH_OBJ); 
    if ($_SESSION['todoOK']==false) {
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="model/estilo.css">
    <style>
        a { color: black; }
        a:hover { color: grey; }
    </style>
    <title>Clientes</title>
</head>
<body>
    <form>
    <h1>Clientes</h1><br>
    <table>
        <tr>
            <th>&nbsp;ID&nbsp;&nbsp;</th>
            <th>NOMBRE&nbsp;&nbsp;</th>
            <th>DNI&nbsp;&nbsp;</th>
            <th>CUENTA&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th>PAIS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th>DIRECCION&nbsp;&nbsp;</th>
            <th>TELEFONO&nbsp;&nbsp;</th>
            <th>E-MAIL</th>
        </tr>
    <?php
        foreach($clientes as $dato) {
            echo '<tr>';
                echo '<td>&nbsp;' . $dato->id_cli . '</td>';
                echo '<td>' . $dato->nombre . '</td>';
                echo '<td>' . $dato->dni . '</td>';
                echo '<td>' . $dato->num_cuenta . '</td>';
                echo '<td>' . $dato->pais . '</td>';
                echo '<td>' . $dato->direccion . '</td>';
                echo '<td>' . $dato->telefono . '</td>';
                echo '<td>' . $dato->email . '</td>';
                echo '<td>&nbsp;<button><a href="editarCli.php?id_cli=' . $dato->id_cli .'">Editar</a></button></td>';
                echo '<td>&nbsp;<button><a href="borrarCliente.php?id_cli=' . $dato->id_cli .'">Borrar</a></button></td>';
            echo '</tr>';
        }
    ?>
    </table>
    <br>&nbsp;&nbsp;<button><a href="insertarCli.php">Añadir cliente</a></button>
    &nbsp;&nbsp;&nbsp;<button><a href="index.php">Inicio</a></button>
    </form>
</body>
</html>

<!--
    <img src="img/editar.png"></img>
    <img src="img/borrar.png"></img>
-->
