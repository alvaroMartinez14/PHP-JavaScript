<?php
    session_start();
    include 'model/db.php';
    $sentencia = $bd -> query("SELECT * FROM logueo");
    $logueos = $sentencia -> fetchAll(PDO::FETCH_OBJ); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="model/estilo.css">
    <style>
        a { color: black; }
        a:hover { color: grey; }
    </style>
    <title>Login</title>
    <script src="model/validacion.js"></script>
</head>
<body>
    <?php
    foreach($logueos as $dato) {

        $userok = $dato->usuario;
        $passok = $dato->password;
    
        $error='';

        if(isset($_REQUEST['user']) && isset($_REQUEST['pass']) && isset($_REQUEST['idioma'])) {

                if(($_REQUEST['user'])==$userok && (md5($_REQUEST['pass'])==$passok)) {
                    setcookie('language',$_REQUEST['idioma'], time() + 60*60);
                    if (isset($_COOKIE['veces'])) {
                        setcookie('veces',$_COOKIE['veces']+1, time() + 3600*24);
                    } else {
                        setcookie('veces',1,time() + 3600*24);
                    }
                    $_SESSION['todoOK'] = true;
                    header('Location: index.php');
                } else {
                    $error = '</br>&nbsp;&nbsp;*Usuario y/o contraseña incorrecto*';
                }

        } elseif (!isset($_REQUEST['user']) || !isset($_REQUEST['pass'])) {
            $error='';
        } else {
            $error = '</br> Por favor, complete todos los campos del formulario</br>';
        }

    }
    ?>
    
    <form action="" method="post">
        <h1>TodoCasa S.A.</h1></br>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;Usuario: <input type="text" name="user" id="user" value="alvaro"></p>
        <p>&nbsp;Password: <input type="password" name="pass" id="pass" value=""></p>
        &nbsp;Selecciona un idioma:&nbsp; <select name="idioma"></br>
            <option value="spa">Español</option>
            <option value="eng">Inglés</option>
        </select></br></br>
        &nbsp;&nbsp;&nbsp;<input type="submit" value="Entrar a tu cuenta" id="loguearse">
        <button><a href="nuevo.php">Registrarse</a></button>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;<?=$error?></p>
    </form>
</body>
</html>
