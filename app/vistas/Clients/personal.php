<!DOCTYPE html>
<html>
<head>
    <title >Plan Personal</title>
    <?php
    $css = "css/style.css";
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
                <img class="personal" src="<?php echo RUTA_URL.'img/personal.jpg'?>"  width="394px" alt="">
            </div>
        </div>
        <div class="information_article col-8">
            <div class="title">
                <center><h1>Plan Familiar</h1></center>
            </div>
            <div class="texto">
            <center><h3>Plan diseñado para las familias de hoy
            </h3></center>
                <br>
                <br>
                <center><h3>INFORMACIÓN<br>
                        Cel 3103928902 / (2) 2138567
                    </h3></center>
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