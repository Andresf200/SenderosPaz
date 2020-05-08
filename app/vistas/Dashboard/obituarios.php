<!DOCTYPE html>
<html>
<head>
    <?php
    $bootstrap = 'bootstrap/bootstrap.css';
    $css = "css/administrador.css";
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
            <h4 class="text-center">Listado de Obituarios</h4>
            <hr>
            <!-- Button trigger modal -->

            <table class="table table-striped  table-hover">
                <thead>
                <tr>
                    <th scope="col"><b>#</b></th>
                    <th scope="col">Nombre Difunto</th>
                    <th scope="col">Familia</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Velacion</th>
                    <th scope="col">Parroquia</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Cementerio</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Opciones</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                <?php foreach ($datos as $dato) : ?>
                <tr>
                    <td><b><?php echo $i ?></b></td>
                    <td><?php echo $dato->nombre_difunto ?></td>
                    <td><?php echo $dato->familia ?></td>
                    <td><?php echo $dato->fecha ?></td>
                    <td><?php echo $dato->velacion ?></td>
                    <td><?php echo $dato->parroquia ?></td>
                    <td><?php echo $dato->hora ?></td>
                    <td><?php echo $dato->cementerio ?></td>
                    <td><?php echo $dato->ciudad ?></td>

                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary mb-1" id="<?php echo $dato->usuario_id; ?>"
                                onclick="window.location='<?php echo RUTA_URL . 'Enrutador/actualizarObituario/' . $dato->id; ?>'">
                            Modificar
                        </button>
                        <a class="btn btn-danger mb-1"
                           href="<?php echo RUTA_URL . 'Enrutador/eliminarObituario/' . $dato->id; ?>"
                           onclick="pregunta(event);">Eliminar</a>
                    </td>
                </tr>
                    <?php $i++;?>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </article>
<footer>
</footer>
</body>
</html>