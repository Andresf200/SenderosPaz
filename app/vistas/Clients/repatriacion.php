<!DOCTYPE html>
<html>
<head>
    <title >Repatriacion</title>
    <?php
    $css = "css/repatriacion.css";
    require(RUTA_APP . '/vistas/layout/heads.php');
    ?>
</head>
<body>
<!--********* EMPIEZA EL CONTENIDO**********-->
<div class="contenedor_global">
    <header class="">
        <?php require(RUTA_APP . '/vistas/layout/header.php');?>
    </header>

    <article class="flex-column">
        <div class="titulo ">
            <div class="imagen_finsa  ">
                <center>
                    <img src="<?php echo RUTA_URL.'img/finsa.jpg'?>"  height="150px" alt="">
                </center>
            </div>
            <div class="title  justify-content-center align-items-center">
                <center>
                    <p class="txt">¿Tienes seres queridos en el exterior?</p>
                    <h3>PROTEGELOS</h3>
                </center>
<!--                <br>-->
<!--                <br>-->
<!--                <center><h3>INFORMACIÓN<br>-->
<!--                        Cel 3103928902 / (2) 2138567-->
<!--                    </h3></center>-->
            </div>
        </div>

        <div class="iconos1 ">
            <div class="icon1  align-items-center justify-content-center">
                    <div class="a"><img src="<?php echo RUTA_URL.'img/clipboard.png'?>" height="100px" alt=""></div>
                    <div class="b"><p> Tramites legales Completo</p></div>
            </div>
            <div class="icon2 align-items-center justify-content-center">
                    <div class=""><img src="<?php echo RUTA_URL.'img/car.jpg'?>" height="200px" alt=""></div>
                    <div class="b"><p> Traslado Nacional hacia la sala de velacion dispuesta
                                    por nuestra compañia</p></div>
            </div>
        </div>


        <div class="iconos1 ">
            <div class="icon1  align-items-center justify-content-center">
                <div class="a"><img src="<?php echo RUTA_URL.'img/avion.svg'?>" height="80px" alt=""></div>
                <div class="b"><p> Traslado del cuerpo hasta el aeropuerto internacional mas cercano</p></div>
            </div>
            <div class="icon2 align-items-center justify-content-center">
                <div class=""><img src="<?php echo RUTA_URL.'img/dollar.png'?>" height="100px" alt=""></div>
                <div class="b"><p> Todos los costos de repatriacion estan cubiertos por FINSA</p></div>
            </div>
        </div>
    </article>
    <footer>
        <?php require(RUTA_APP . '/vistas/layout/footer.php');?>
    </footer>
</div>
<!--********* TERMINA EL CONTENIDO**********-->
<?php require(RUTA_APP . '/vistas/layout/scripts.php');?>
</body>
</html>