<!DOCTYPE html>
<html>
<head>
    <?php
    $bootstrap = 'bootstrap/bootstrap.css';
    $css = "css/enviado.css";
    require(RUTA_APP . '/vistas/layoutDashboard/heads.php');
    ?>
</head>

<body>

<div class="contenedor_global">
    <!-- menu superior -->
    <header>
        <?php require(RUTA_APP . '/vistas/layoutDashboard/header.php'); ?>
    </header>
    <!--Fin menu superior -->

    <!-- Menu lateral izquierdo -->
    <nav>
        <?php require(RUTA_APP . '/vistas/layoutDashboard/navUser.php'); ?>
    </nav>
    <!-- Fin menu lateral izquierdo -->

    <!-- Contenido principal -->
    <article>

        <form class="col-12 mt-5" action="<?php echo RUTA_URL . 'Enrutador/crearObituario' ?>" method="POST">

            <div class="col form-group">
                <center><h3>Crear Obituarios</h3></center>
            </div>
            <div class="row">
                <div class="col-6 form-group">
                    <label for="inputZip" class="d-flex">Nombre Difunto</label>
                    <input type="text" class="form-control" value="<?php if(!empty($datos['data'])) {echo $datos['data']['nombre_difunto'];} else{ } ?>" placeholder="Nombre Difunto" name="nombre_difunto">
                </div>
                <div class="col form-group">
                    <label for="inputZip" class="d-flex">Familia</label>
                    <input type="text" class="form-control" value="<?php if(!empty($datos['data'])) {echo $datos['data']['nombre_familia'];} else{ } ?>" placeholder="Familia" name="nombre_familia">
                </div>
                <div class="col-6 form-group">
                    <label for="inputZip" class="d-flex">Fecha</label>
                    <input type="date" class="form-control" value="<?php if(!empty($datos['data'])) {echo $datos['data']['fecha'];} else{ } ?>" placeholder="Fecha"  name="fecha">
                </div>
                <div class="col-6 form-group">
                    <label for="inputZip" class="d-flex">Velacion</label>
                    <input type="text" class="form-control" value="<?php if(!empty($datos['data'])) {echo $datos['data']['lugar_velacion'];} else{ } ?>" placeholder="Velacion" name="lugar_velacion">
                </div>
                <div class="col-6 form-group">
                    <label for="inputZip">Parroquia</label>
                    <input type="text" class="form-control" value="<?php if(!empty($datos['data'])) {echo $datos['data']['nombre_parroquia'];} else{ } ?>" placeholder="Parroquia"  name="nombre_parroquia">
                </div>
                <div class="col-6 form-group">
                    <label for="inputZip">Hora</label>
                    <input type="text" class="form-control" value="<?php if(!empty($datos['data'])) {echo $datos['data']['hora'];} else{ } ?>" placeholder="Hora"  name="hora">
                </div>
                <div class="col-12 form-group">
                    <label for="inputZip">Cementerio</label>
                    <input type="text" class="form-control" value="<?php if(!empty($datos['data'])) {echo $datos['data']['cementerio'];} else{ } ?>"  name="cementerio">
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <button id="btnlimpiar" type="reset" class="btn btn-info mr-5">Limpiar</button>
                    <button type="submit" class="btn btn-info">Registrar
                    </button>
                </div>
            </div>
        </form>
        <div class="mt-5 alert alert-<?php if(!empty($datos)) {echo $datos['mensaje'];} else{ } ?>" id="mensaje"><?php if(!empty($datos)) {echo $datos['error'];} else{ } ?> </div>
    </article>
    <!--Fin contenido principal -->

    <!--Footer  -->
    <footer>

    </footer>
    <!--Fin footer  -->
</div>
<!-- Scripts bootstrap -->
<?php require(RUTA_APP . '/vistas/layoutDashboard/scripts.php'); ?>
<!-- Fin scripts bootstrap -->
</body>

</html>