<!DOCTYPE html>
<html>
<head>
    <title >Zafiro</title>
    <?php
    $css = "css/zafiro.css";
    require(RUTA_APP . '/vistas/layout/heads.php');
    ?>
</head>
<body>
<!--********* EMPIEZA EL CONTENIDO**********-->
<div class="contenedor_global">
    <header class="">
        <?php require(RUTA_APP . '/vistas/layout/header.php');?>
    </header>

    <article class="flex-column p-5">
        <div class="zafiro justify-content-center">
            <img src="<?php echo RUTA_URL.'img/ZAFIRO3.jpeg'?>"  height="80%" alt="">
        </div>
        <div class="publicidada flex-column shadow-lg bg-white rounded-4 ">
            <div class="convenios  justify-content-center  ">Convenios</div>
            <div class="imagenes flex-row ">
                <div class="col-2 ">
                    <img src="<?php echo RUTA_URL.'img/diagnosticovital.jpg'?>" width="100%" height="100%" alt="">
                </div>
                <div class="col-2 " >
                    <img src="<?php echo RUTA_URL.'img/idime2.png'?>" width="100%" height="100%" alt="">
                </div>
                <div class="col-2 ">
                    <img src="<?php echo RUTA_URL.'img/ROCA.jpg'?>" width="100%" height="100%" alt="">
                </div>
                <div class="col-2 ">
                    <img src="<?php echo RUTA_URL.'img/lune.jpeg'?>" width="100%" height="100%" alt="">
                </div>
                <div class="col-2 ">
                    <img src="<?php echo RUTA_URL.'img/cafe.png'?>" width="100%" height="100%" alt="">
                </div>
                <div class="col-2 ">
                    <img src="<?php echo RUTA_URL.'img/d.jpeg'?>" width="100%" height="100%" alt="">
                </div>
            </div>
        </div>
        <div class="publicidadb shadow-lg bg-white rounded-4 p-3">
            <div class="imagenes flex-row ">
                <div class="col-2 ">
                    <img src="<?php echo RUTA_URL.'img/cinema.jpg'?>" width="100%" height="100%" alt="">
                </div>
                <div class="col-2 ">
                    <img src="<?php echo RUTA_URL.'img/SERMEDIC.png'?>" width="100%" height="100%" alt="">
                </div>
                <div class="col-2 " >
                    <img src="<?php echo RUTA_URL.'img/casanova.png'?>" width="100%" height="100%" alt="">
                </div>
                <div class="col-2 ">
                    <img src="<?php echo RUTA_URL.'img/MONKEYPNG.png'?>" width="100%" height="100%" alt="">
                </div>
                <div class="col-2 ">
                    <img src="<?php echo RUTA_URL.'img/surtidrogas.jpg'?>" width="100%" height="100%" alt="">
                </div>
                <div class="col-2 ">
                    <img src="<?php echo RUTA_URL.'img/evolution.jpeg'?>" width="100%" height="100%" alt="">
                </div>
            </div>
            <div class="convenios2  justify-content-center  ">Mas de 53 convenios</div>
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