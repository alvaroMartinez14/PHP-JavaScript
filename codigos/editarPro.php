<?php
    session_start();
    include 'model/db.php';
    $sentencia = $bd -> prepare("SELECT * FROM proveedor WHERE id=?;");
    $sentencia -> execute([$_GET['id']]);
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
    <title>Editar Proveedor</title>
</head>
<body>
    <form action="editarProveedor.php" method="post">
    <h1>Editar proveedor</h1><br>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NOMBRE: <input type="text" name="txtNombre" value="<?=$proveedores[0]->nombre;?>"></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CIF/NIF: <input type="text" name="txtCif" value="<?=$proveedores[0]->cif;?>"></p>
        <p>&nbsp;&nbsp;DIRECCION: <input type="text" name="txtDireccion" value="<?=$proveedores[0]->direccion;?>"></p>
        <p>&nbsp;&nbsp;PROVINCIA: <input type="text" name="txtProvincia" value="<?=$proveedores[0]->provincia;?>"></p>
        <p>&nbsp;LOCALIDAD: <input type="text" name="txtLocalidad" value="<?=$proveedores[0]->localidad;?>"></p>
        <input type="hidden" name="txtId" value="<?=$proveedores[0]->id;?>">
        &nbsp;&nbsp;&nbsp;<input type="submit" values="Editar">
    </form>
</body>
</html>
