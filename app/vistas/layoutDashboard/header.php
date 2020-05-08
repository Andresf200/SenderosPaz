<nav class="navbar navbar-expand-lg navbar-dark bg-dark col-12">
    <a class="navbar-brand">
        <a  role="link" onclick="window.location='<?php echo RUTA_URL . 'Enrutador/Persona' ?>'"> <img class="imagen2" src="<?php echo RUTA_URL .   'img/logo.png' ?>" height="100px"></a>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <button type="button" class="mt-3 btn btn-outline-light w-25" data-toggle="modal" data-target="#Persona2">
                    Persona
                </button>
            </li>
        </ul>
        <button role="link" onclick="window.location='<?php echo RUTA_URL . 'Enrutador/cerrarSesion' ?>'" type="submit" class="btn btn-light">Cerrar sesión</button>
    </div>
</nav>