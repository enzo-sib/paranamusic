<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FAQ</title>
    <LINK REL=StyleSheet HREF="../css/icomoon.css"> 
    <LINK REL=StyleSheet HREF="../css/headernav.css">
    <LINK REL=StyleSheet HREF="../css/footer.css">
    <link rel=StyleSheet href="../css/contacto.css">
    <link rel=StyleSheet href="../css/mobile.css"> 
    <link rel=StyleSheet href="../css/sidemenu.css"> 
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
    <div class="faq">
        <br>
        <h2><center>Contactos</center></h2><br>
        <hr><br><br>
            <div class="division">
                <section class="contacto">
                    <p style="text-align: center;padding-bottom: 20px;"><b> Parana Music </b></p>
                    <p><b> Direccion:  </b> Avenida Siempreviva 123</p>
                    <p><b> Telefono:  </b> 11 5238-2323</p>
                    <p><b> Email:  </b> gladys@gmail.com</p>
                    <p><b><a href="https://www.facebook.com/Parana-Music-1101118650062639/"> Facebook </a></b></p>
                </section>
                <section class="contacto">
                    <p style="text-align: center;padding-bottom: 20px;"><b> Web developers </b></p>
                    <section class="contacto-web">
                        <article class="contacto-d1">
                            <p><b style="text-align: center;"> Emiliano Bulaich </b></p>
                                <p><b> Email: </b> emi.bulaich@gmail.com </p>
                                <p><b><a href=""> LinkedIn </a></b> ; <b><a href=""> GitHub </a></b></p>
                        </article>
                        <article class="contacto-d1">
                            <p><b style="text-align: center;"> Enzo Correa </b></p>
                                <p><b> Email: </b> enzonicolascorrea@gmail.com </p>
                                <p><b><a href="https://www.linkedin.com/in/enzo-correa-513635174/"> LinkedIn </a></b> ; <b><a href="https://github.com/SibTrox"> GitHub </a></b></p>
                        </article>
                    </section>
                </section>
            </div>
    </div>  
    <?php
        require_once("../include/footer.html");
    ?>

    <script type="text/javascript" src="../js/menu.js"></script>
</body>