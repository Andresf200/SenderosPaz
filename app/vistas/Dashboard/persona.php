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
            <h4 class="text-center">Listado de Usuarios</h4>
            <hr>
            <!-- Button trigger modal -->

            <table class="table table-striped  table-hover">
                <thead>
                <tr>
                    <th scope="col"><b>#</b></th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">N Documento</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Dirrecion</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Opciones</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1;?>
                <?php foreach ($datos as $dato) : ?>
                <tr>
                    <td><b><?php echo $i ?></b></td>
                    <td><?php echo $dato->nombres ?></td>
                    <td><?php echo $dato->apellidos ?></td>
                    <td><?php echo $dato->telefono ?></td>
                    <td><?php echo $dato->direccion ?></td>
                    <td><?php echo $dato->ciudad ?></td>
                    <td><?php echo $dato->usuario ?></td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary mb-1"
                                onclick="window.location='<?php echo RUTA_URL . 'Enrutador/editarPersona/' .$dato->id ?>'">
                            Modificar
                        </button>
                        <a class="btn btn-danger mb-1"
                           href="<?php echo RUTA_URL . 'Enrutador/eliminarUsuario/' . $dato->id; ?>"
                           onclick="pregunta(event);">Eliminar</a>
                    </td>
                </tr>
                    <?php $i++;?>
                <?php endforeach ?>
                <footer>

                </footer>
<script type="text/javascript">
    function pregunta(e) {
        if (!confirm('¿Estas seguro de que desea eliminar los registros seleccionados?')) {
            e.preventDefault();
        }
    }
</script>
</body>

</html>