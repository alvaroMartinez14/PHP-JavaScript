<?php
    session_start();
    include 'model/db.php';
    $sentencia = $bd -> prepare("SELECT * FROM cliente WHERE id_cli=?;");
    $sentencia -> execute([$_GET['id_cli']]);
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
    <title>Editar Cliente</title>
</head>
<body>
    <form action="editarCliente.php" method="post">
    <h1>Editar cliente</h1><br>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NOMBRE: <input type="text" name="txtNombre" value="<?=$clientes[0]->nombre;?>"></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DNI: <input type="text" name="txtDni" value="<?=$clientes[0]->dni;?>"></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CUENTA: <input type="text" name="txtCuenta" value="<?=$clientes[0]->num_cuenta;?>"></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PAIS: <input type="text" name="txtPais" value="<?=$clientes[0]->pais;?>"></p>
        <p>&nbsp;&nbsp;DIRECCION: <input type="text" name="txtDireccion" value="<?=$clientes[0]->direccion;?>"></p>
        <p>&nbsp;&nbsp;&nbsp;TELEFONO: <input type="text" name="txtTelefono" value="<?=$clientes[0]->telefono;?>"></p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EMAIL: <input type="text" name="txtEmail" value="<?=$clientes[0]->email;?>"></p>
        <input type="hidden" name="txtIdCli" value="<?=$clientes[0]->id_cli;?>">
        &nbsp;&nbsp;&nbsp;<input type="submit" values="Editar">
    </form>
</body>
</html>
