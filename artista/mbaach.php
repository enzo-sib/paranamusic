<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MBAaCH - Parana Music</title>
    <LINK REL=StyleSheet HREF="../css/icomoon.css"> 
    <LINK REL=StyleSheet HREF="../css/headernav.css">
    <LINK REL=StyleSheet HREF="../css/artista/mbaach.css">
    <LINK REL=StyleSheet HREF="../css/clothes.css">
    <LINK REL=StyleSheet HREF="../css/footer.css">
    <LINK REL=StyleSheet HREF="../css/mobile.css">
    <LINK REL=StyleSheet HREF="../css/sidemenu.css">
</head>
<body>
    <!-- Menu lateral -->
    <?php
        require_once("../include/sidemenu.html");
    ?>
    <!-- Header y Menu -->
    <?php
        require_once("../include/headernav.html");
    ?>
    <!-- Banner con video -->
    <div class="banner">
        <img class="img-banner" src="http://paranamusic.com.ar/img/artist/mbaach.jpg"> 
        <img class="img-hide" src="http://paranamusic.com.ar/img/artist-mini/mbaach-mini.jpg">   
    </div>
    <!-- Aca comienza la parte de la tienda -->
    <div class="ropa">
        <div class="productos">
            <div class="acomodar-productos">
                <!-- Productos traidos con PHP -->
                <?php
                $art=1;
                require_once("../include/traer.php");
                ?>
            </div>    
        </div>
    </div>
    <?php
        require_once("../include/footer.html");
    ?>
    <script type="text/javascript" src="../js/menu.js"></script>
</body>
</html>