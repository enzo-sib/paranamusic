<?php
    require_once("sql/conexion.php");
    require_once("sql/select.php");
    while($registro = $consulta->fetch_assoc()){
?>
    <div class="acomodar">
        <a href="http://paranamusic.com.ar/pages/store.php?c=<?php echo $registro['id'];?>">
            <img src="http://paranamusic.com.ar/img/clothes/<?php echo $registro['foto']; ?>" class="imagen-producto">
        </a>
        <p class="nombre-producto">
            <a href="http://paranamusic.com.ar/pages/store.php?c=<?php echo $registro['id'];?>"> <?php echo $registro['nombre']; ?> </a>
        </p>
        <p class="precio">
            <a>$<?php echo $registro['precio'];?></a>
        </p>
        </div>
<?php
    }   
?>