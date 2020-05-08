<!DOCTYPE html>
<html>
<head>
    <title >Senderos de Paz</title>
    <?php
    $css = "css/index.css";
    require(RUTA_APP . '/vistas/layout/heads.php');
    ?>
</head>
<body>
<!--********* EMPIEZA EL CONTENIDO**********-->
<div class="contenedor_global">
    <header class="">
        <?php require(RUTA_APP . '/vistas/layout/header.php');?>
    </header>
    <div class="telefono"><strong>
        <center>NUMERO DE ATENCION AL CLIENTE :018000113901</center>
    </strong></div>
    <main class="justify-content shadow-lg bg-white rounded">
        <div class="img_carrousel_senderos justify-content-center col-4">
            <center><img src="<?php echo RUTA_URL.'img/logo.png'?>" class="w-75 mt-5"></center>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <?php
                if (!empty($datos['data'])){
                    $o = 3;
                    for ($i=1; $i==count($datos['data']);$i++){
                        echo "<li data-target='#carouselExampleIndicators' data-slide-to='$o'></li>";
                        $o++;
                    }
                }
                ?>

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo RUTA_URL. 'img/MASCOTA2.png'?>" class=" d-block  w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo RUTA_URL. 'img/REPATRIACION.png'?>" class="d-block w-100   " alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo RUTA_URL. 'img/ZAFIRO3.jpeg'?>" height="w-100" class="d-block w-100" alt="...">
                </div>
                <?php  foreach ($datos['data'] as $dato) : ?>
                <div class="carousel-item">
                <img src="<?php echo RUTA_URL. 'UploadImagenes/' . $dato->name  ?>" class=" d-block  w-100" alt="...">
                </div>
                <?php endforeach ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </main>
    <article class="justify-content shadow-lg bg-white rounded-2">
        <div class="col-7 bienvenido ">
            <div class="bienvenido_texto  mb-5">
                <center><h3 class="title mt-5 "> Bienvenido</h3></center>

                <p class="mt-4">
                    SENDEROS DE PAZ es una organización del Grupo Empresarial GES
                    con 20 años de experiencia, apasionada por la prestación de servicios
                    que dignifican al ser humano.
                    Hemos encontrando nuevas maneras de acompañar y
                    asesorar a nuestros clientes en las necesidades que estos presentan.
                </p>
            </div>
            <div class="icon ">
                <center>
                    <a href="https://www.facebook.com/senderosdepazoficial/"> <span class="icon icon-facebook2 mr-5"></span></a>
                    <a href="https://instagram.com/senderos.de.paz?igshid=17vzmxverad04">
                        <span class="icon icon-instagram mr-5"></span>
                    </a>
                    <a href="https://twitter.com/senderos_de_paz?lang=es">
                        <span class="icon icon-twitter "></span>
                    </a>
                </center>
            </div>
            <div class="mt-5 alert alert-<?php if(!empty($datos['color'])){ echo $datos['color'];}else{ echo "";}?>" id="mensaje"><center><bold><?php if(!empty($datos['mensaje'])){ echo $datos['mensaje'];}else{ echo "";}?></bold></center></div>
        </div>
        <div class="col-5   contactenos shadow-lg  rounded-15">
           <div class="title_contacto  mb-3 mt-2"> <center><h3 class="title_contacto">Contactanos</h3></center> </div>
            <div class="form">
            <form action="<?php echo RUTA_URL . 'Enrutador/enviarEmail' ?>" METHOD="POST">
                <div class="form-group row pl-4">
                    <span class="icon-user icon-footer"></span>
                    <div class="col-sm-10">
                        <input type="text" placeholder="Nombre Completo"  name="nombre" required class="form-control">
                    </div>
                </div>
                <div class="form-group row pl-4">
                    <span class="icon-phone icon-footer"></span>
                    <div class="col-sm-11">
                        <input type="number" placeholder="Numero Telefonico" name="numero" required class="form-control">
                    </div>
                </div>
                <div class="form-group row pl-4">
                    <span class="icon-mail3 icon-footer "></span>
                    <div class="col-sm-10">
                        <input type="email" placeholder="Correo Electronico" name="correo" required class="form-control" >
                    </div>
                </div>
                <div class="form-group row pl-4">
                    <span class="icon-bubbles2 icon-footer"></span>
                    <div class="col-sm-10">
                        <textarea type="text" name="mensaje" required placeholder="Mensaje" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group row pl-4">
                    <span class="icon-checkmark2 icon-footer"></span>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" name="permiso" required  type="checkbox" >
                            <label class="form-check-label" for="gridCheck1">
                                AUTORIZACIÓN PARA MANEJO DE DATOS PERSONALES  (
                                <a href="<?php echo RUTA_URL. '/pdf/politicas_de_privacidad.pdf' ?>" download="Politicas de Privacidad">
                                    Descargar Archivo
                                </a>)
                            </label>
                        </div>
                    </div>
                </div>
                <center>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </center>
            </form>
            </div>
        </div>
    </article>
    <section class="shadow-lg bg-white rounded-10">
        <div class="logos_conve flex-row">
            <div class="col-3 " >
                <center> <h5 ><strong>(FENALCO)</strong></h5>
                <img src="<?php echo RUTA_URL. 'img/fenalco.png'?>" class="mr-3" width="180px" alt="fenalco">
             </center>
            </div>
            <div class="col-6 " >
                <center> <h5 class="pb-4"><strong></strong></h5>
                    <img src="<?php echo RUTA_URL. 'img/finsa.jpg'?>" class="mr-3" height="135px" width="180px" alt="<!---->finsa">
                   <img src="<?php echo RUTA_URL. 'img/remanso.jpg'?>" class="ml-3 mr-3" height="130px" width="180px" alt="remaso">
                </center>
            </div>
            <div class="col-3 " >
                <center> <h5 class="pb-1"><strong>MESA SECTORIAL </strong></h5>
                <img src="<?php echo RUTA_URL. 'img/sena.png'?>" class="ml-3 mr-3" height="100px" width="110px" alt="remaso">
                  <br>  Servicios Funerarios
                </center>
            </div>
        </div>
    </section>
    <aside class="shadow-lg bg-white rounded-4">
        <div class="mb-3">
            <center><h3 class="title_formp_conve">Formas de pago</h3></center>
        </div>
        <div class="logos_forpago mr-5 ml-5 justify-content-between">

            <img src="<?php echo RUTA_URL. 'img/moto.png'?>" class="mr-3" height="100px" width="100px" alt="personalizado">
            <img src="<?php echo RUTA_URL. 'img/logoert.jpg'?>" class="ml-3 mr-3" height="80px" width="200px" alt="ert">
            <img src="<?php echo RUTA_URL. 'img/baloto.png'?>" class="mr-3" height="100px" width="100px" alt="baloto">
            <img src="<?php echo RUTA_URL. 'img/logo-acuavalle.jpg'?>" class="ml-3 mr-3" height="100px" width="100px" alt="acuavalle">
            <img src="<?php echo RUTA_URL. 'img/logo-bancolombia.png'?>" class="ml-3 mr-3" height="100px" width="100px" alt="bancolombia">

        </div>
    </aside>
    <footer>
        <?php require(RUTA_APP . '/vistas/layout/footer.php');?>
    </footer>
</div>
<!--********* TERMINA EL CONTENIDO**********-->

<?php require(RUTA_APP . '/vistas/layout/scripts.php');?>
</body>
</html>