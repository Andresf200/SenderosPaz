<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo RUTA_URL .'css/login.css'?>"/>
    <link rel="icon" type="image/png" href="<?php echo RUTA_URL .'img/logo.png'?>" />

</head>
<body>
<div class="">
    <button type="submit"  onclick="window.location='<?php echo RUTA_URL . 'Enrutador/inicio' ?>'"  class="efecto">Volver</button>
</div>
    <div class="contenedor">
        <form class="contenedor_login" method="POST" action="<?php echo RUTA_URL . 'Enrutador/validarLogin' ?>">
           <img src="<?php echo RUTA_URL.'img/logo2.png'?>" height="100px" alt="Imagen del logo" class="imagen">
            <h3> Ingresar al sistema</h3>
            <label>Usuario</label>
            <input type="text" placeholder="Ingrese su usuario" name="usuario">
            <label>Contraseña</label>
            <input type="password" name="password" placeholder="Ingrese su contraseña">
            <input type="submit" value="Ingresar" class="efecto">
            <p class="error">
            <?php
            if (!empty($datos)){
             echo $datos;
            }else{

            } ?>
            </p>
        </form>

    </div>

</body>
</html>