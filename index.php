<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parana Music</title>
    <LINK REL=StyleSheet HREF="css/icomoon.css"> 
    <LINK REL=StyleSheet HREF="css/headernav.css">
    <LINK REL=StyleSheet HREF="css/index.css">
    <LINK REL=StyleSheet HREF="css/clothes-index.css">
    <LINK REL=StyleSheet HREF="css/footer.css">
    <link rel=StyleSheet href="css/mobile.css"> 
    <LINK REL=StyleSheet HREF="css/sidemenu.css">
</head>
<body>
    <!-- Menu lateral -->
    <?php
        require_once("include/sidemenu.html");
    ?>
    <div id="main">
        <?php
            require_once("include/headernav.html");
        ?>
        <!-- Menu index -->
        <?php
            require_once("include/index-banner.html");
        ?>
        <!-- Traer productos -->
        <div class="ropa">
            <div>
                <h2 class="novedades"> Ultimas novedades </h2>
                <hr>
            </div>
            <div class="productos">
                <div class="acomodar-productos">
                    <!-- Productos traidos con PHP -->
                    <?php
                        require_once("include/traer-index.php");
                    ?>
                </div>       
            </div>
        </div>
        <!-- Footer -->            
        <?php
            require_once("include/footer.html");
        ?>
    </div>
    <script type="text/javascript" src="js/menu.js"></script>
</body>
</html>