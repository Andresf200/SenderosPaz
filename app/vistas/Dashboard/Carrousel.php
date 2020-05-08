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

        <div class="mb-5 w-77">
            <br>
            <br>
            <h4 class="text-center">Listado de Carrousel</h4>
            <hr>
            <!-- Button trigger modal -->

            <table class="table table-striped  table-hover">
                <thead>
                <tr>
                    <th scope="col"><b>#</b></th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Imagen</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $i = 1; ?>
                <?php foreach ($datos as $dato) : ?>
                    <tr>
                        <td><b><?php echo $i; ?></b></td>
                        <td><?php echo $dato->name ?></td>
                        <td><img src="<?php echo RUTA_URL. 'UploadImagenes/' . $dato->name  ?>" class=" d-block  w-100" alt="...">
                        </td>
                        <td>
                            <a class="btn btn-danger mb-1"
                               href="<?php echo RUTA_URL . 'Enrutador/eliminarCarrousel/' . $dato->id; ?>"
                               onclick="pregunta(event);">Eliminar</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>


    </article>
    <!--Fin contenido principal -->

    <!--Footer  -->
    <footer>

    </footer>
    <script type="text/javascript">
        function pregunta(e) {
            if (!confirm('¿Estas seguro de que desea eliminar los registros seleccionados?')) {
                e.preventDefault();
            }
        }
    </script>
    <!--Fin footer  -->
</div>
<!-- Scripts bootstrap -->
<?php require(RUTA_APP . '/vistas/layoutDashboard/scripts.php'); ?>
<!-- Fin scripts bootstrap -->
</body>

</html>