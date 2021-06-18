<?php
    session_start();
    include 'model/db.php';
    $sentencia = $bd -> query("SELECT * FROM proveedor");
    $proveedores = $sentencia -> fetchAll(PDO::FETCH_OBJ); 
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
    <title>Proveedores</title>
</head>
<body>
    <form>
    <h1>Proveedores</h1><br>
    <table>
        <tr>
            <th>&nbsp;ID&nbsp;&nbsp;</th>
            <th>NOMBRE&nbsp;&nbsp;</th>
            <th>CIF/NIF&nbsp;&nbsp;</th>
            <th>DIRECCION&nbsp;&nbsp;</th>
            <th>PROVINCIA&nbsp;&nbsp;</th>
            <th>LOCALIDAD</th>
        </tr>
    <?php
        foreach($proveedores as $dato) {
            echo '<tr>';
                echo '<td>&nbsp;' . $dato->id . '</td>';
                echo '<td>' . $dato->nombre . '</td>';
                echo '<td>' . $dato->cif . '</td>';
                echo '<td>' . $dato->direccion . '</td>';
                echo '<td>' . $dato->provincia . '</td>';
                echo '<td>' . $dato->localidad . '</td>';
                echo '<td>&nbsp;<button><a href="editarPro.php?id=' . $dato->id .'">Editar</a></button></td>';
                echo '<td>&nbsp;<button><a href="borrarProveedor.php?id=' . $dato->id .'">Borrar</a></button></td>';
            echo '</tr>';
        }
    ?>
    </table>
    <br>&nbsp;&nbsp;<button><a href="insertarPro.php">Añadir proveedor</a></button>
    &nbsp;&nbsp;&nbsp;<button><a href="index.php">Inicio</a></button>
    </form>
</body>
</html>

<!--
    Editar un proveedor: editarPro->editarProveedor->proveedores
    Insertar un proveedor: insertarPro->insertarProveedor->proveedores
    
    <img src="img/editar.png"></img>
    <img src="img/borrar.png"></img>
-->
