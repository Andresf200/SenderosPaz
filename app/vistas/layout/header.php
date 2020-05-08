<div class="logo_sendero  col-2">
    <img src="<?php echo RUTA_URL .'img/logo.png'?>" class="pl-4" height="80px" width="200px" alt="">
</div>
<nav class="  col-10 justify-content-end">
    <div class="btn-group">
        <button type="button" class="btn buttons col-1" onclick="window.location='<?php echo RUTA_URL . 'Enrutador/inicio' ?>'">Inicio</button>
        <div class="btn-group">
        <button type="button" class="btn buttons col-2 dropdown-toggle" data-toggle="dropdown">Previsión exequial</button>
         <div class="dropdown-menu">
             <button type="button" class="btn button-menu  dropdown-item" onclick="window.location='<?php echo RUTA_URL . 'Enrutador/persona' ?>'">Planes familiares</button>
             <button type="button" class="btn button-menu  dropdown-item" onclick="window.location='<?php echo RUTA_URL . 'Enrutador/empresarial' ?>'">Planes Empresariales</button>
             <button type="button" class="btn button-menu  dropdown-item" onclick="window.location='<?php echo RUTA_URL . 'Enrutador/psicosocial' ?>'">Apoyo Psicosocial</button>
             <button type="button" class="btn button-menu  dropdown-item" onclick="window.location='<?php echo RUTA_URL . 'Enrutador/galardon' ?>'">Plan galardón</button>
             <button type="button" class="btn button-menu  dropdown-item" onclick="window.location='<?php echo RUTA_URL . 'Enrutador/diamante' ?>'">Titulo Diamante</button>
             <button type="button" class="btn button-menu  dropdown-item" onclick="window.location='<?php echo RUTA_URL . 'Enrutador/pueblo' ?>'">Plan Pueblo</button>
             <button type="button" class="btn button-menu  dropdown-item" onclick="window.location='<?php echo RUTA_URL . 'Enrutador/Acuavalle' ?>'">Plan Acuavalle</button>
             <button type="button" class="btn button-menu  dropdown-item" onclick="window.location='<?php echo RUTA_URL . 'Enrutador/canasta' ?>'">Plan BonoCanasta</button>
             <button type="button" class="btn button-menu  dropdown-item" onclick="window.location='<?php echo RUTA_URL . 'Enrutador/ert' ?>'">Plan Ert</button>
             <button type="button" class="btn button-menu  dropdown-item" onclick="window.location='<?php echo RUTA_URL . 'Enrutador/integral' ?>'">Plan Integral</button>
         </div>
        </div>
        <button type="button" class="btn buttons col-2" onclick="window.location='<?php echo RUTA_URL . 'Enrutador/repatriacion' ?>'">Repatriación</button>
        <button type="button" class="btn buttons col-1"onclick="window.location='<?php echo RUTA_URL . 'Enrutador/zafiro' ?>'">Zafiro</button>
        <button type="button" class="btn buttons col-2" onclick="window.location='<?php echo RUTA_URL . 'Enrutador/mascotas' ?>'">Plan mascota</button>
        <button type="button" class="btn buttons col-2" onclick="window.location='<?php echo RUTA_URL . 'Enrutador/obituarios' ?>'">Obituario</button>
        <button type="button" class="btn buttons col-2" onclick="window.location='<?php echo RUTA_URL . 'Enrutador/sedes' ?>'">Nuestras Sedes</button>
        <button type="button" class="btn buttons col-1" onclick="window.location='<?php echo RUTA_URL . 'Enrutador/login' ?>'">Login</button>
    </div>
</nav>