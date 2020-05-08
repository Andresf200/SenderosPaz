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

        <form class="col-12 mt-5" method="POST" action="<?php echo RUTA_URL . 'Enrutador/updateUsuario'?>">
            <center><h3>Editar Usuarios</h3></center>
            <div class="row">
                <input type="hidden" value="<?php echo $datos['data'][0]->id ?>"  name="id">
                <div class="col-6 form-group">
                    <label for="inputZip" class="d-flex">Nombre</label>
                    <input type="text" class="form-control" value="<?php echo $datos['data'][0]->nombres ?>" placeholder="Nombre" id="persona_nombre" name="nombre">
                </div>
                <div class="col form-group">
                    <label for="inputZip" class="d-flex">Apellido</label>
                    <input type="text" class="form-control" value="<?php echo $datos['data'][0]->apellidos ?>" placeholder="Apellido" id="persona_apellido" name="apellidos">
                </div>
                <div class="col-6 form-group">
                    <label for="inputZip" class="d-flex">N° documento</label>
                    <input type="text" class="form-control" placeholder="Documento"  value="<?php echo $datos['data'][0]->identificacion ?>" id="persona_identidad" name="identidad" onkeypress="return validar_numeros(event)">
                </div>
                <div class="col-6 form-group">
                    <label for="inputZip" class="d-flex">Telefono</label>
                    <input type="text" class="form-control"  value="<?php echo $datos['data'][0]->telefono ?>" placeholder="Telefono" id="persona_telefono" name="telefono" onkeypress="return validar_numeros(event)">
                </div>
                <div class="col-6 form-group">
                    <label for="inputZip">Dirección</label>
                    <input type="text" class="form-control" value="<?php echo $datos['data'][0]->direccion ?>" placeholder="Dirección" id="persona_direccion" name="dirrecion">
                </div>
                <div class="col-6 form-group">
                    <label for="inputZip">Ciudad</label>
                    <select class="form-control" name="ciudad">

                        <option value="1">Cartago</option>
                        <option value="2">Anserma</option>
                        <option value="3">Argelia</option>
                        <option value="4">Sevilla</option>
                        <option value="5">Caicedonia</option>
                        <option value="6">Obando</option>
                        <option value="7">Montenegro</option>
                        <option value="8">Zarzal</option>
                        <option value="9">Buga</option>
                        <option value="10">Quimbaya</option>
                        <option value="11">Alcalá</option>
                        <option value="12">Tebaida</option>
                        <option value="13">La mesa (Cundinamarca)</option>

                    </select>
                </div>
                <div class="col-12 form-group">
                    <label for="inputZip">Tipo de Usuario</label>
                    <select class="form-control" name="rol">

                        <option value="1">Administrador</option>

                        <option value="2">Usuario</option>
                    </select>
                </div>
                <div class="col-6 form-group">
                    <label for="inputZip">Usuario</label>
                    <input type="text" value="<?php echo $datos['data'][0]->usuario ?>" class="form-control" placeholder="Usuario" name="usuario">
                </div>
                <div class="col-6 form-group">
                    <label for="inputZip">Password</label>
                    <input type="text" class="form-control" placeholder="Password" name="password">
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <button type="button" class="btn btn-info" role="link"
                            onclick="window.location='<?php echo RUTA_URL . 'Enrutador/listarUsuarios' ?>'">
                        Volver
                    </button>
                    <button  type="submit"  class="btn btn-info">Actualizar</button>
                </div>
            </div>
        </form>
        <div class="mt-5 alert alert-<?php if(!empty($datos['mensaje'])){ echo $datos['mensaje'] ; }else{  } ?>" id="mensaje"><?php if(!empty($datos['error'])){ echo $datos['error'] ; }else{  }  ?></div>
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