<!DOCTYPE html>
<html>
<head>
    <title >Sedes</title>
    <?php
    $css = "css/sedes.css";
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
        <div class="title justify-content-center align-items-center">
           SEDES SENDEROS DE PAZ
        </div>
        <div class="contenido ">
        <div class="table_sedes">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">CIUDAD</th>
                    <th scope="col">DIRECCIÓN</th>
                    <th scope="col">TELÉFONO</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Cartago Principal</td>
                    <td>Calle 12 # 2-19</td>
                    <td>(2) 2148567</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Cartago</td>
                    <td>Carrera 8 # 11-32</td>
                    <td>(2) 2138567</td>
                </tr>
                <tr>
                    <th scope="row">3     </th>
                    <td>Anserma      </td>
                    <td>Carrera 5 # 5-69   </td>
                    <td>3172797755  </td>
                </tr>
                <tr>
                    <th scope="row">4     </th>
                    <td>Argelia</td>
                    <td>Calle 4 # 6-16
                    </td>
                    <td>3127248734
                    </td>
                </tr>
                <tr>
                    <th scope="row">5     </th>
                    <td>Sevilla</td>
                    <td>Carrera 49 # 48-52</td>
                    <td>(2) 2199023</td>
                </tr>
                <tr>
                    <th scope="row">6     </th>
                    <td>Caicedonia</td>
                    <td>Calle 8 # 14-59</td>
                    <td>(2) 2164163</td>
                </tr>
                <tr>
                    <th scope="row">7     </th>
                    <td>Obando</td>
                    <td>Carrera 4 # 2-45</td>
                    <td>(2) 2059211</td>
                </tr>
                <tr>
                    <th scope="row">8     </th>
                    <td>Montenegro</td>
                    <td>Carrera 6 # 19-38</td>
                    <td>(6) 7537050</td>
                </tr>
                <tr>
                    <th scope="row">9     </th>
                    <td>Zarzal</td>
                    <td>Calle 9 # 7-68</td>
                    <td>(2) 2209567</td>
                </tr>
                <tr>
                    <th scope="row">10     </th>
                    <td>Buga</td>
                    <td>Calle 6 # 10-33</td>
                    <td>(2) 2370101</td>
                </tr>
                <tr>
                    <th scope="row">11     </th>
                    <td>Quimbaya</td>
                    <td>Carrera 5 # 16-54</td>
                    <td>(6) 7520286</td>
                </tr>
                <tr>
                    <th scope="row">12   </th>
                    <td>Alcalá</td>
                    <td>Calle 5 Cra 8 # 8-01</td>
                    <td>018000113901</td>
                </tr>
                <tr>
                    <th scope="row">13   </th>
                    <td>Tebaida</td>
                    <td>Calle 11 # 8-24</td>
                    <td>(6) 7514071</td>
                </tr>
                <tr>
                    <th scope="row">14   </th>
                    <td>La mesa (Cundinamarca)</td>
                    <td>Calle 8 # 22a 23</td>
                    <td>018000113901</td>
                </tr>
                </tbody>
            </table>

        </div>
        <div class="imagen_sedes">
            <div class="image">
                <img src="<?php echo RUTA_URL.'img/sedes.jpeg'?>" width="100%" alt="">
            </div>
            <div class="texto_img justify-content-center">
               <center> <h3>INFORMACIÓN<br>
                    Cel 3103928902 / (2) 2138567
                </h3>
               </center>
            </div>
        </div>
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