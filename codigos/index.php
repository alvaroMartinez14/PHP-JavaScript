<?php
    session_start();
    if ($_SESSION['todoOK']==false) {
        header('Location: login.php');
    } else {
        if($_COOKIE['language']=='spa'){
            echo '<form><h1>&nbsp;Bienvenido a la base de datos</h1><br>';
            echo '<p>&nbsp;&nbsp;&nbsp;&nbsp;Elige que quieres consultar: </p>';
        }elseif ($_COOKIE['language']=='eng'){
            echo '<form><h1>&nbsp;Welcome to the database</h1><br>';
            echo '<p>&nbsp;&nbsp;&nbsp;&nbsp;Choose what you want to consult: </p>';
        }
    }
    $veces = 'Numero de visitas: ' . $_COOKIE['veces'];
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
    <title>Index</title>
</head>
<body>
        &nbsp;&nbsp;<button><a href="proveedores.php">Proveedores</a></button>
        <button><a href="clientes.php">Clientes</a></button>
        <button><a href="productos.php">Productos</a></button>
        <p><br>&nbsp;&nbsp;&nbsp;&nbsp;Acciones de usuario:</p>
        &nbsp;&nbsp;<button><a href="editarPerfil.php">Cambiar contraseña</a></button>
        <button><a href="model/logout.php">Cerrar sesion</a></button>
        <br><br><p>&nbsp;&nbsp;&nbsp;&nbsp;<?=$veces;?></p>
    </form>
</body>
</html>

<!--Cambiar contraseña: editarPerfil->editarPass->index-->
