<?php
    session_start();
    if(isset($_SESSION['admin'])){
        require_once("../../sql/conexion.php");
        require_once('../../include/abm/funciones.php');
    }else{
        header('Location: login-abm.php');
    }   
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../css/abm/abm.css">
    <link rel="stylesheet" type="text/css" href="../../css/abm/form.css">
    <link rel="stylesheet" type="text/css" href="../../css/abm/tabla.css">
    <title>Administracion productos</title>
</head>
<body>
    <div class="contenido">
        <div class="formulario">
            <?php
                require('../../include/abm/form.php');
            ?>
        </div>
        <div class="tabla">
            <?php  
                $nombre = $_POST['nombre'];
                $precio = $_POST['precio'];
                $artista = $_POST['tipo'];
                $descripcion = $_POST['descripcion'];
                $stock = $_POST['stock'];
                $ml=$_POST['link']; 
                if(isset($_REQUEST['enviar'])){
                    insertar($conexion,$nombre,$precio,$artista,$descripcion,$stock,$ml);
                }
                if(isset($_REQUEST['borrar'])){
                    borrar($conexion);
                }
                if(isset($_REQUEST['edit'])){
                    editar($conexion,$nombre,$precio,$artista,$descripcion,$ml);
                }
                generarTabla($conexion);
            ?>
        </div>
    </div>
</body>