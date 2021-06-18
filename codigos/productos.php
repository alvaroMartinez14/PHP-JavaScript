<?php
    session_start();
    include 'model/db.php';
    $sentencia = $bd -> query("SELECT * FROM producto");
    $productos = $sentencia -> fetchAll(PDO::FETCH_OBJ); 
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
    <title>Productos</title>
</head>
<body>
    <form>
    <h1>Productos</h1><br>
    <table>
        <tr>
            <th>&nbsp;ID&nbsp;&nbsp;</th>
            <th>NOMBRE&nbsp;&nbsp;</th>
            <th>CATEGORIA&nbsp;&nbsp;</th>
            <th>CANTIDAD&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th>PRECIO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th>IVA&nbsp;&nbsp;</th>
        </tr>
    <?php
        foreach($productos as $dato) {
            echo '<tr>';
                echo '<td>&nbsp;' . $dato->id_producto . '</td>';
                echo '<td>' . $dato->nombre . '</td>';
                echo '<td>' . $dato->categoria . '</td>';
                echo '<td>' . $dato->cantidad . '</td>';
                echo '<td>' . $dato->precio . '</td>';
                echo '<td>' . $dato->iva . '</td>';
                echo '<td>&nbsp;<button><a href="editarProd.php?id_producto=' . $dato->id_producto .'">Editar</a></button></td>';
                echo '<td>&nbsp;<button><a href="borrarProducto.php?id_producto=' . $dato->id_producto .'">Borrar</a></button></td>';
            echo '</tr>';
        }
    ?>
    </table>
    <br>&nbsp;&nbsp;<button><a href="insertarProd.php">Añadir producto</a></button>
    &nbsp;&nbsp;&nbsp;<button><a href="index.php">Inicio</a></button>
    </form>
</body>
</html>

<!--
    <img src="img/editar.png"></img>
    <img src="img/borrar.png"></img>
-->
