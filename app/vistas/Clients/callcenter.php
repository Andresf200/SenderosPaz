<!DOCTYPE html>
<html>
<head>
    <?php
    $css = "css/callcenter.css";
    require(RUTA_APP . '/vistas/layout/heads.php');
    ?>
</head>
<body>
<!--********* EMPIEZA EL CONTENIDO**********-->
<div class="contenedor_global">
    <header class="">
        <?php require(RUTA_APP . '/vistas/layout/header.php');?>
    </header>

    <article>
        <div class="image col-4 align-items-center justify-content-center ">
            <div class="contenedor_image shadow-lg bg-white rounded-4" >
                <img class="personal" src="<?php echo RUTA_URL .'img/calcenter.jpg'?>"  width="394px" alt="">
            </div>
        </div>
        <div class="information_article col-8">
            <div class="title">
                <center><h1>Call Center<Center></Center></h1></center>
            </div>
            <div class="texto2">
                <ul>
                    <li>Información de previsión exequial</li>
                    <li>Información convenio tarjeta Zafiro</li>
                    <li>Agendamiento de citas</li>
                </ul>
            </div>
            <div class="texto">
            <center><h3>INFORMACIÓN<br>
                Cel 3103928902 / (2) 2138567
            </h3></center>
            </div>
        </div>
    </article>
    <footer>
        <div class="informacion">
            <div class="texto_footer texto_footer  col-8 pl-5">
                <h5 class="texto_footer pl-5">Senderos de paz</h5>
                <p class="texto_footer pl-5">
                    Dirección: Calle 12 No. 2-19 Cartago, Valle del Cauca, Colombia
                    <br>
                    Números de contacto: (2) 214 8567 – (2) 213 8567 – 3216440139
                    <br>
                    Email:  comercial@senderosdepaz.com – servicioalcliente@sendrosdepaz.com
                    <br>
                    <br>
                    <br>
                    © 2013-2019
                </p>
            </div>
            <div class="col-4  pt-3">
                <center><img src="img/logo.png" height="120px"></center>
            </div>
        </div>
    </footer>
</div>
<!--********* TERMINA EL CONTENIDO**********-->

<script src="js/jquery-3.4.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>