<!DOCTYPE html>
<html>
<head>
    <title> Obituario</title>
    <?php
    $css = "css/obituario.css";
    require(RUTA_APP . '/vistas/layout/heads.php');
    ?>
</head>
<body>
<!--********* EMPIEZA EL CONTENIDO**********-->
<div class="contenedor_global">
    <header class="">
        <?php require(RUTA_APP . '/vistas/layout/header.php');?>
    </header>

    <article>
        <div class="informacion justify-content-center align-items-center flex-column shadow-lg bg-white rounded-4">
            <h1>Obituarios</h1>
            <p>
                En esta sección encontrará los datos de los servicios funerarios que se encuentran actualmente en
                velación en las
                diferentes sedes de la Red de Senderos de Paz. Puede realizar un filtro por la ciudad de su búsqueda en
                la
                siguiente casilla:
            </p>
        </div>
        <div class="buscador  shadow-lg bg-white">
            <div class="form-row  flex-row">
                <form  class="col-12 d-flex justify-content-center" action="<?php echo RUTA_URL . 'Enrutador/buscarObituarios' ?>" method="POST" >
                <div class="label col-2 ">
                    <label for="inputState">Municipios:</label>
                </div>
                <div class="select col-8  ">
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
                <div class="col-2 ">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </div>
            </form>
        </div>
        <div class="target justify-content-center ">
         <h2> <?php if(empty($datos)){ echo "No ahi servicios funerarios en este municipio";}else{ echo "";}  ?>
         </h2>
            <?php
            foreach ($datos as $dato) : ?>
            <div class="card">
                <h4><span class="card-title font-italic"><?php echo $dato->nombre_difunto ?></span></h4>
                <h10 class="texto ">
                    <p>Descanso en paz </p><br>
                    <?php echo $dato->familia ?>
                    <br>
                    Invitan a las exequias y agradecen su compañia
                    <br>
                    FECHA:<?php echo $dato->fecha ?> <br>
                    VELACION: <?php echo $dato->velacion ?><br>
                    PARROQUIA: <?php echo $dato->parroquia ?> <br>
                    HORA: <?php echo $dato->hora ?><br>
                    CEMENTERIO: <?php echo $dato->cementerio ?> <br>
                    CIUDAD: <?php echo $dato->ciudad ?>
                </h10>
            </div>
            <?php endforeach ?>
        </div>
    </article>

    <footer>
        <?php require(RUTA_APP . '/vistas/layout/footer.php');?>
    </footer>
</div>
<!--********* TERMINA EL CONTENIDO**********-->
<?php require(RUTA_APP . '/vistas/layout/scripts.php');?>
</body>
</html>