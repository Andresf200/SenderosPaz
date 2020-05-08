<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $bootstrap = 'public/bootstrap/css/bootstrap.css';
    $css = "css/administrador.css";
    require(RUTA_APP . '/vistas/layoutDashboard/head.php');
    ?>
    <title>Senderos de Paz</title>
</head>

<body onload="publicidad()">
<div class="contenedor_global">
    <header>
        <?php require(RUTA_APP . '/vistas/layout/header.php'); ?>
    </header>
    <article>
        <div class="carousel carousel-slider">
            <a class="carousel-item" href="#one!"><img src="<?php echo RUTA_URL . 'img/sendero2457.jpg' ?>"
                                                       class="n"></a>
            <a class="carousel-item" href="#two!"><img src="<?php echo RUTA_URL . 'img/ataul.jpg' ?>" class="n"></a>
            <a class="carousel-item" href="#three!"><img src="<?php echo RUTA_URL . 'img/flores.jpg' ?>" class="n"></a>
        </div>
    </article>
    <main class="z-depth-5">
        <img src="<?php echo RUTA_URL . 'img/logo.png' ?>" class="materialboxed jean" height="220px">
        <div class="divida">
            <em>
                <h3 class="">Bienvenidos a Senderos de Paz</h3>
            </em>
        </div>
        <blockquote>
            <h6>SENDEROS DE PAZ, es una organización con más 18 años de experiencia lográndose posicionar
                competitivamente en el mercado del eje cafetero y norte del valle.
                Ofreciendo así servicios pre-exequiales con la modalidad de cuota anticipada, traslado nacional,
                asistencia funeraria, repatriación y servicios adicionales como plan mascota y bono canasta.
                Brindando un acompañamiento y apoyo en todo momento a través de nuestro equipo de trabajo con la
                suficiente calidad humana.
                Senderos de Paz cuenta con convenio de la red Remanso y Finsa entregando así un servicio optimo y
                oportuno.<h6>
        </blockquote>
    </main>
    <section class="z-depth-5">
        <div class="divida">
            <em>
                <h4>Beneficiese
                    con nuestros servicios</h4>
            </em>
        </div>
        <div>
            <img  height="600" src="<?php echo RUTA_URL . 'img/mental.svg' ?>">
        </div>
        <div class="divida">
            <em>
                <h4>Servicios adicionales</h4>
            </em>
        </div>
        <div class="card ">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="<?php echo RUTA_URL . 'img/Huellitas.jpeg' ?>">
            </div>
            <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Senderos   Huellitas<i
                                class="material-icons right"></i></span>
                <!-- Modal Trigger -->

                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Descripción</a>

                <!-- Modal Structure -->
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <h4 class="center">Senderos Huellitas</h4>
                        <br>
                        <strong>
                            <h6>Protege a tu mascota porque también son parte de tu familia</h6>
                        </strong>
                        <br>
                     <p>
                         Perder a tu mascota puede ser uno de los momentos más difíciles de tu vida El vínculo
                         que se crea con una mascota se percibe como estrecho, intenso y verdadero,
                         nadie duda del amor incondicional que se da
                         y se recibe gracias a estos pequeños compañeros de vida
                     </p>
                        <br>
                        <h6>Beneficios <br></h6>
                        <ul>
                            <li>Traslado de la mascota.</li>
                            <li>Cremación.</li>
                            <li>Urna cenizaria</li>
                            <li>Entrega de cenizas</li>
                            <li>Asesoría personalizada</li>
                        </ul>
                        <br>
                        <h6>Senderos esta Contigo </h6>
                        <p>
                            1-	primero tienes que aceptar que tu mascota ya no está contigo. Pero más importante aún es aceptar que estás sufriendo por su muerte, que ha sido un duro golpe en tu vida
                            y que tienes derecho a estar mal. Olvida lo que piensen los demás.
                        </p>
                        <p>
                            2-	Tendrás que crear nuevas rutinas sin contar con tu mascota. Rutinas para ti, para cuidarte a ti misma, para sentirte mejor.
                        </p>
                        <p>
                            3-	Una de las cosas que más pueden ayudarte es hacer un viaje. Seguro que ahora mismo no tienes ganas, pero te vendrá bien comprobar que ahora que no tienes mascota te resulta mucho más fácil preparar una escapada.
                            Tienes una responsabilidad menos, aprovéchalo.
                        </p>
                        <p>
                            4-	No intentes sustituir inmediatamente a tu mascota que ha muerto porque es del todo irreemplazable. Será mejor que esperes a superar el duelo,
                            dejar atrás la tristeza y sentirte bien con tu nueva vida. A que su ausencia no duela tanto.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn">Cerrar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card ">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="<?php echo RUTA_URL . 'img/familia.jpg' ?>">
            </div>
            <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Bono Canasta Familiar<i
                                class="material-icons right"></i></span>
                <!-- Modal Trigger -->
                <a class="waves-effect waves-light btn modal-trigger" href="#modal2">Descripción</a>

                <!-- Modal Structure -->
                <div id="modal2" class="modal">
                    <div class="modal-content">
                        <h4 class="center">Bono Canasta Familiar</h4>
                        <br>
                        <p>
                            Contribuir con un bono como respaldo económico a nuestros
                            seres queridos en el momento del fallecimiento del titular del servicio.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn">Cerrar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card ">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="<?php echo RUTA_URL . 'img/sendero3261.jpg' ?>">
            </div>
            <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Repatriacion<i
                                class="material-icons right"></i></span>
                <!-- Modal Trigger -->
                <br>
                <br>
                <a class="waves-effect waves-light btn modal-trigger" href="#modal3">Descripción</a>

                <!-- Modal Structure -->
                <div id="modal3" class="modal">
                    <div class="modal-content">
                        <h4 class="center">Repatriacion</h4>
                        <br>
                        <strong>
                            <em>Traemos a tu ser querido desde cualquier parte del mundo</em>
                        </strong>
                        <br>
                        <p>
                            proteger a los seres queridos radicados en el exterior,
                            que haya suscrito un plan de protección internacional con nosotros, ante el fallecimiento.
                            Lo repatriamos hasta el seno de su familia en Colombia. Finsa
                        </p>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn">Cerrar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card ">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="<?php echo RUTA_URL . 'img/sendero2798.jpg' ?>">
            </div>
            <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Translado Nacional<i
                                class="material-icons right"></i></span>
                <!-- Modal Trigger -->
                <a class="waves-effect waves-light btn modal-trigger" href="#modal4">Descripción</a>

                <!-- Modal Structure -->
                <div id="modal4" class="modal">
                    <div class="modal-content">
                        <h4 class="center">TRASLADO NACIONAL</h4>
                        <br>
                        <strong>
                            <em>traslado del ser querido desde cualquier lugar del país a través de transporte terrestre o aéreo</em>
                        </strong>
                        <br>
                        <p>
                            Cubrimiento a nivel nacional por medio de convenios que nos permiten dar seguridad de la prestación del servicio
                            funerario en cualquier ciudad o municipio del país. Hacemos parte de la red REMANSO; la alianza más grande
                            de funerarias a  nivel nacional que  permiten coordinar y agilizar  todo lo correspondiente  a  un
                            servicio funerario con el propósito  de   velar  por  el bienestar  de  nuestros  usuarios

                        </p>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn">Cerrar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <aside class="z-depth-5">
        <div>
            <h4>Nuestras formas de pago</h4>
        </div>
        <div class="">
            <img src="<?php echo RUTA_URL . 'img/finsa.png' ?>" height="80px" class="imagenes_pagos">
            <img src="<?php echo RUTA_URL . 'img/huellas.png' ?>" height="80px" class="imagenes_pagos">
            <img src="<?php echo RUTA_URL . 'img/remaso.png' ?>" height="90px" class="imagenes_pagos">
            <img src="<?php echo RUTA_URL . 'img/exequial.png' ?>" height="90px" class="imagen_villas">
        </div>
    </aside>
    <footer class="center">
        <?php require(RUTA_APP . '/vistas/layout/footer.php'); ?>
    </footer>
    <div class="hidden">
        <div id="publicidad" class="modal">
            <div class="modal-content center">
                <img src="<?php echo RUTA_URL . 'img/imagen.png' ?>" class="proporcionar_imagen">
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn">Cerrar</a>
            </div>
        </div>
    </div>
</div>
<?php require(RUTA_APP . '/vistas/layout/scripts.php'); ?>
<script>
    var elem = document.querySelector('.carousel');
    var instance = M.Carousel.init(elem, {
        fullWidth: true,
        indicators: true,
        shift: -1600,
        duration: 500,
    });

    setInterval(() => {
        console.log(instance.pressed);
        if (!instance.pressed) {
            instance.next();
        }
    }, 10000);

    function publicidad() {
        const elemento = document.getElementById('publicidad');
        const instancia = M.Modal.init(elemento, {dismissible: true});
        instancia.open();
    }
</script>
</body>
</html>