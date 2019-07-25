<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ICE COLD - Parana Music</title>
    <LINK REL=StyleSheet HREF="../css/icomoon.css"> 
    <LINK REL=StyleSheet HREF="../css/headernav.css">
    <LINK REL=StyleSheet HREF="../css/artista/ice-cold.css">
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
        <img class="img-hide" src="http://paranamusic.com.ar/img/artist/ice-cold.jpg">  
        <div class="items"> 
            <iframe class="video" src="https://www.youtube.com/embed/AG379iaIgPc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="iconos">
            <a href="https://www.instagram.com/blockstarblockstar/" target="_blank" class="icon-banner"><span class="icon-instagram"></span></a>
                <a href="https://www.youtube.com/channel/UCg0VaC2mnY3hkHoCWB8siVA" target="_blank" class="icon-banner"><span class="icon-youtube2"></span></a>
                <a href="https://www.youtube.com/channel/UCg0VaC2mnY3hkHoCWB8siVA" target="_blank" class="icon-banner"><span class="icon-spotify"></span></a>
            </div>
        </div>
    </div>
    <!-- Aca comienza la parte de la tienda -->
    <div class="ropa">
        <div class="productos">
            <div class="acomodar-productos">
                <!-- Productos traidos con PHP -->
                <?php
                $art=5;
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