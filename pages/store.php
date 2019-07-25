<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store</title>
    <LINK REL=StyleSheet HREF="../css/icomoon.css"> 
    <LINK REL=StyleSheet HREF="../css/headernav.css">
    <LINK REL=StyleSheet HREF="../css/footer.css">
    <LINK REL=StyleSheet HREF="../css/store.css">
    <LINK REL=StyleSheet HREF="../css/sidemenu.css">
</head>
<body> 
    <!-- Header y Menu -->
    <?php
        require_once("../include/sidemenu.html");
    ?>
    <!-- Header y Menu -->
    <?php
        require_once("../include/headernav.html");
    ?>
    <!-- Tienda -->
    <div class="caja-tienda">
        <?php
            require_once("../sql/conexion.php");
            $sel="SELECT * FROM productos WHERE id='".$_REQUEST['c']."'";
            $consul = $conexion->query($sel);
            $row_cnt = $consul->num_rows;
            if($row_cnt == 0){
                ?>
                    <div class="not-found">
                        <h2 class="titulo">Pagina no encontrada </h2>
                        <h2 class="subtitulo">La pagina solicitada no existe. Haga <a href="http://paranamusic.com.ar"> Click aqui </a> para seguir comprando </h2>
                    </div>
                <?php
            }else{
                while($registro = $consul->fetch_assoc()){
                    if ($_REQUEST['c']==$registro['id']){
                    ?>
                        <div class="ropa">
                            <img src="http://paranamusic.com.ar/img/clothes/<?php echo $registro['foto'];?>" class="imagen-ropa">
                        </div>
                        <div class="datos">
                            <h3 class="titulo"><?php echo $registro['nombre'];?> </h3>
                            <p class="informacion"><?php echo $registro['descripcion'];?> </p>
                            <p class="precio">$ <?php echo $registro['precio'];?></p> 
                            <a  style="text-decoration:none" class="botoncarrito" href='<?php echo $registro['ml'];?>'> Comprar </a>
                        </div>
            <?php
                    }
                }
            }
        ?>
    </div>
    <!-- Footer -->
    <?php
        require_once("../include/footer.html");
    ?>
    <script type="text/javascript" src="../js/menu.js"></script>
</body>
</html>