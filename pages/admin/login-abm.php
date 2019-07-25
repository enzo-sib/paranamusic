<?     session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="../../css/abm/login-abm.css">
<title>Login</title>
</head>
<body>
	<div class="contenedor">
        <img src="http://paranamusic.com.ar/img/logo.jpg" class="img">
	   	<div id="login">
	   		<form action="#" method="post">
	   			<label>Usuario :</label><input type="nombre" id="usuario" name="user">
	   			<label>Contraseña :</label><input type="password" id="pw" name="pw">
	   			<input type="submit" id="submit" name="submit">
	   		</form>
        </div>
    </div>
<?php
    if(isset($_SESSION['admin'])){
        session_destroy();
    }
	if (isset($_REQUEST['submit'])) {
        require_once('../../sql/p4wd.php');
		if($_REQUEST['user'] === $aa && $_REQUEST['pw'] === $cc){
            $_SESSION['admin'] = $_REQUEST['user'];
            header('Location: abm.php');
        }else{
            echo "<script> alert('Su usuario y/o contraseña es incorrecta') </script>";
        }
	} 
?>
</div>
</html>