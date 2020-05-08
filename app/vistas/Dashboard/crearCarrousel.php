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
        <?php require(RUTA_APP . '/vistas/layoutDashboard/nav.php'); ?>
    </nav>
    <!-- Fin menu lateral izquierdo -->

    <!-- Contenido principal -->
    <article>

        <form class="col-12 mt-5" enctype="multipart/form-data" method="POST" action="<?php echo RUTA_URL . 'Enrutador/createCarrousel' ?>">
         <center><h3>Subir Imagen del Carrousel</h3></center>
            <div class="row">
                <div class="col-12 form-group">
                    <label for="inputZip" class="d-flex">Subir imagen</label>
                    <input type="file" class="form-control"  placeholder="Seleccione la imagen"  name="imagen">
                </div>

                <div class="col-12 d-flex justify-content-center">
                    <button  type="submit" class="btn btn-info">Subir</button>
                </div>
            </div>
        </form>
        <div class="mt-5 alert alert-<?php if(!empty($datos)) {echo $datos['mensaje'];} else{ } ?>"> <?php if(!empty($datos)) {echo $datos['error'];} else{ } ?>  </div>
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