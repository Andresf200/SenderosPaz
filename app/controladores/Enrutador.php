<?php

class Enrutador extends Controlador
{

    // Description the codigo
    //CITY Senderos de Paz
    // 1 Cartago .2 Anserma , 3 Argelia, 4 Sevilla, 5 Caicedonia, 6 Obando, 7 Montenegro, 8 Zarzal, 9 Buga, 10 Quimbaya, 11 Alcalá,
    //12 Tebaida, 13La mesa (Cundinamarca)
    //Roles Senderos de Paz
    //1 Administrador, 2 Usuarios
    public function __construct()
    {
        $this->sesionModelo = $this->modelo('Sesion');
        $this->validarModelo = $this->modelo('Validar');
        $this->usuarioModelo = $this->modelo('Usuario');
        $this->obituarioModelo = $this->modelo('Obituario');
        $this->carrouselModelo = $this->modelo('Carrousel');
    }

    public function index()
    {
        $this->crearPersona();
        die();
        $datos = $this->carrouselModelo->listarCarrousel();
        $datos=[
            'data' => $datos,
            'mensaje' => "",
            'color' => "",
        ];
        $this->vista("clients/index",$datos);
    }

    public function login()
    {
        $this->vista("clients/login");
    }

    public function inicio()
    {
        $datos = $this->carrouselModelo->listarCarrousel();
        $datos=[
            'data' => $datos,
            'mensaje' => "",
            'color' => "",
        ];
        $this->vista("clients/index",$datos);
    }

    public function acuavalle()
    {
        $this->vista("clients/acuavalle");
    }

    public function canasta()
    {
        $this->vista("clients/bonocanasta");
    }

    public function callcenter()
    {
        $this->vista("clients/callcenter");
    }

    public function diamante()
    {
        $this->vista("clients/diamante");
    }

    public function empresarial()
    {
        $this->vista("clients/empresarial");
    }

    public function ert()
    {
        $this->vista("clients/ert");
    }

    public function galardon()
    {
        $this->vista("clients/galardon");
    }

    public function integral()
    {
        $this->vista("clients/integral");
    }

    public function mascotas()
    {
        $this->vista("clients/mascotas");
    }

    public function obituarios()
    {
        $datos = $this->obituarioModelo->listarObituarios();
        $this->vista("clients/obituarios",$datos);
    }
    public function buscarObituarios()
    {
        if(!empty($_POST['ciudad'])){
            $datos = $this->obituarioModelo->listarObituariosSede($_POST['ciudad']);
            $this->vista("clients/obituarios",$datos);
        }else{
            $this->obituarios();
        }
    }

    public function persona()
    {
        $this->vista("clients/personal");
    }

    public function psicosocial()
    {
        $this->vista("clients/psicosocial");
    }

    public function pueblo()
    {
        $this->vista("Clients/pueblo");
    }

    public function repatriacion()
    {
        $this->vista("clients/repatriacion");
    }

    public function sedes()
    {
        $this->vista("clients/sedes");
    }

    public function zafiro()
    {
        $this->vista("clients/zafiro");
    }


    public function validarLogin()
    {
       $this->validarSesion();
        if (!empty($_SESSION['user'])) {
            //validar que rol tiene
            $this->vista("login/login");
        } else if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
            $userForm = $this->validarModelo->limpiarDatos($_POST['usuario']);
            $passForm = $this->validarModelo->limpiarDatos($_POST['password']);
            if ($this->usuarioModelo->usuarioExiste($userForm)) {
                $usuarios = $this->usuarioModelo->retornarPermiso($userForm);
                if ($this->validarModelo->validarPassword($passForm, $usuarios[0]->password)) {
                    $this->sesionModelo->setCurrentUser($usuarios[0]->id); //Asigno el usuario a mi SESSIO
                    $this->sesionModelo->setMunicipio($usuarios[0]->ciudad); //Asigno el usuario al ciudad
                    $this->sesionModelo->setPermission($usuarios[0]->rol); //Asigno el rol

                    if ($usuarios[0]->rol == 1) {
                        $this->listarObituarios();
                    } elseif ($usuarios[0]->rol == 2) {
                        $this->listarObituarios();
                    }
                } else {
                    $datos = "La contraseña es erronea intentalo de nuevo.";
                    $this->vista('Clients/login', $datos);
                }
            } else {
                $datos = "El usuario con el que intentaste logearte no está registrado.";
                $this->vista('Clients/login', $datos);
            }
        } else {
            $datos = "Los campos de usuario y password están vacíos.";
            $this->vista('Clients/login', $datos);
        }
    }

    public function enviarEmail(){
      if(!empty($_POST['nombre']) && !empty($_POST['numero']) && !empty($_POST['correo'])
          && !empty($_POST['mensaje']) && !empty($_POST['permiso']) ){
          if ($_POST['permiso'] == "on"){
              $destinatorio = "comercial@senderosdepaz.com";
              $asunto = "Contactanos de la pagina web de senderos de paz";

              $nombre = $_POST['nombre'];
              $numero = $_POST['numero'];
              $correo = $_POST['correo'];
              $mensaje = $_POST['mensaje'];

              $carta = "De: $nombre \n";
              $carta .= "Correo: $correo \n";
              $carta .= "Telefono: $numero \n";
              $carta .= "Telefono: $mensaje \n";

//              mail($destinatorio,$asunto,$carta);

              $datos = $this->carrouselModelo->listarCarrousel();
              $datos=[
                  'data' => $datos,
                  'mensaje' => "Mensaje Enviado",
                  'color' => "success",
              ];
              $this->vista("clients/index",$datos);
          }else{
              $datos = $this->carrouselModelo->listarCarrousel();
              $datos=[
                  'data' => $datos,
                  'mensaje' => "Mensaje No Enviado.",
                  'color' => "danger",
              ];
              $this->vista("clients/index",$datos);
          }
      }else{
          $datos = $this->carrouselModelo->listarCarrousel();
          $datos=[
              'data' => $datos,
              'mensaje' => "Mensaje No Enviado.",
              'color' => "danger",
          ];
          $this->vista("clients/index",$datos);
      }
    }

    public function crearPersona()
    {
        $this->validarSesion();
        $this->vista("Dashboard/crearPersona");
    }

    public function createPersona()
    {
        $this->validarSesion();
        if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['identidad']) && !empty($_POST['telefono'])
            && !empty($_POST['direccion']) && !empty($_POST['ciudad']) && !empty($_POST['rol'])
            && !empty($_POST['usuario']) && !empty($_POST['password'])) {
            $usuario = $this->validarModelo->limpiarDatos($_POST['usuario']);
            if (empty($this->usuarioModelo->usuario($usuario))) {
                $error_clave = $this->validarModelo->validar_clave($_POST['password']);
                if ($error_clave === true) {
                    if ($this->validarModelo->ValidarInt($_POST['telefono'])) {
                        if ($this->validarModelo->ValidarInt($_POST['identidad'])) {
                            $password = $this->validarModelo->encrytando($_POST['password']);
                            $datos = [
                                'nombres' => trim($_POST['nombre']),
                                'apellidos' => trim($_POST['apellidos']),
                                'identidad' => trim($_POST['identidad']),
                                'telefono' => trim($_POST['telefono']),
                                'direccion' => trim($_POST['direccion']),
                                'ciudad' => trim($_POST['ciudad']),
                                'rol' => trim($_POST['rol']),
                                'usuario' => $usuario,
                                'password' => $password,
                                'estado' => 0,
                            ];
                            if ($this->usuarioModelo->agregarUsuario($datos)) {
                                $datos = [
                                    'data' => "",
                                    'error' => 'Inserccion Correcta',
                                    'mensaje' => 'success'
                                ];
                                return $this->vista("Dashboard/crearPersona", $datos);
                            } else {
                                $datos = [
                                    'data' => "",
                                    'error' => 'Fallo la Inserccion',
                                    'mensaje' => 'success'
                                ];
                                return $this->vista("Dashboard/crearPersona", $datos);
                            }

                        } else {
                            $datos = [
                                'data' => $_POST,
                                'error' => 'el numero de documento debe ser un numero valido',
                                'mensaje' => 'danger'
                            ];
                            return $this->vista("Dashboard/crearPersona", $datos);
                        }

                    } else {
                        $datos = [
                            'data' => $_POST,
                            'error' => 'el numero de telefono debe ser un numero valido',
                            'mensaje' => 'danger'
                        ];
                        return $this->vista("Dashboard/crearPersona", $datos);
                    }
                } else {
                    $datos = [
                        'data' => $_POST,
                        'error' => 'La clave debe de contener mayuscula, minuscula, numero y minimo 8 digitos',
                        'mensaje' => 'danger'
                    ];
                    return $this->vista("Dashboard/crearPersona", $datos);
                }

            } else {
                //nombre de usuario ya existe
                $datos = [
                    'data' => $_POST,
                    'error' => 'El nombre de usuario ya existe intenta con otro.',
                    'mensaje' => 'danger'
                ];
                return $this->vista("Dashboard/crearPersona", $datos);
            }


        } else {
            $datos = [
                'data' => $_POST,
                'error' => 'Uno de los campos esta vacio.',
                'mensaje' => 'danger'
            ];
            return $this->vista("Dashboard/crearPersona", $datos);
        }
    }

    public function listarUsuarios()
    {
        $this->validarSesion();
        $datos = $this->usuarioModelo->listarUsuario();
        $this->vista("Dashboard/persona", $datos);
    }

    public function eliminarUsuario($id)
    {
        $this->validarSesion();
        $this->usuarioModelo->eliminarUsuario($id);
        $this->listarUsuarios();
    }

    public function editarPersona($id)
    {
        $this->validarSesion();
        $data = $this->usuarioModelo->retornarUsuario($id);
        $datos = [
            'data' => $data,
            'mensaje' =>  "success",
            'error' => "",
        ];
        $this->vista('Dashboard/editarPersona', $datos);
    }

    public function updateUsuario()
    {
        $this->validarSesion();
        if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['identidad']) && !empty($_POST['telefono'])
            && !empty($_POST['dirrecion']) && !empty($_POST['ciudad']) && !empty($_POST['rol'])
            && !empty($_POST['usuario']) && !empty($_POST['password'])) {
            $usuario = $this->validarModelo->limpiarDatos($_POST['usuario']);
            $error_clave = $this->validarModelo->validar_clave($_POST['password']);
            if ($error_clave === true) {
                if ($this->validarModelo->ValidarInt($_POST['telefono'])) {
                    if ($this->validarModelo->ValidarInt($_POST['identidad'])) {
                        $password = $this->validarModelo->encrytando($_POST['password']);
                        $datos = [
                            'nombres' => trim($_POST['nombre']),
                            'apellidos' => trim($_POST['apellidos']),
                            'identidad' => trim($_POST['identidad']),
                            'telefono' => trim($_POST['telefono']),
                            'identidad' => trim($_POST['identidad']),
                            'dirrecion' => trim($_POST['dirrecion']),
                            'ciudad' => trim($_POST['ciudad']),
                            'rol' => trim($_POST['rol']),
                            'usuario' => $usuario,
                            'password' => $password,
                            'estado' => 0,
                            'id' => $_POST['id']
                        ];
                        if ($this->usuarioModelo->actualizarUsuario($datos)) {
                          $this->listarUsuarios();
                        } else {
                            $data = $this->usuarioModelo->retornarUsuario($_POST['id']);
                            $datos = [
                                'mensaje' =>  'danger',
                                'error' => 'Fallo la inserccion',
                                'data' => $data
                            ];
                            $this->vista('Dashboard/editarPersona', $datos);
                        }

                    } else {
                        $data = $this->usuarioModelo->retornarUsuario($_POST['id']);
                        $datos = [
                            'mensaje' =>  'danger',
                            'error' => 'el numero de identificacion debe ser un numero valido',
                            'data' => $data
                        ];
                        $this->vista('Dashboard/editarPersona', $datos);
                    }

                } else {
                    $data = $this->usuarioModelo->retornarUsuario($_POST['id']);
                    $datos = [
                        'mensaje' =>  'danger',
                        'error' => 'el numero de telefono debe ser un numero valido',
                        'data' => $data
                    ];
                    $this->vista('Dashboard/editarPersona', $datos);
                }
            } else {
                $data = $this->usuarioModelo->retornarUsuario($_POST['id']);
                $datos = [
                    'mensaje' =>  'danger',
                    'error' => 'La clave debe de contener mayuscula, minuscula, numero y minimo 8 digitos',
                    'data' => $data
                ];
                $this->vista('Dashboard/editarPersona', $datos);
            }

        } else {
            $data = $this->usuarioModelo->retornarUsuario($_POST['id']);
            $datos = [
                'mensaje' =>  'danger',
                'error' => 'Uno de los campos esta vacio.',
                'data' => $data
            ];
            $this->vista('Dashboard/editarPersona', $datos);
        }

    }

    public function crearCarrousel()
    {
        $this->validarSesion();
        $this->vista("Dashboard/crearCarrousel");
    }

    public function createCarrousel()
    {
        $this->validarSesion();
        if (!empty($_FILES['imagen']['name'])){
        $imagen = $_FILES["imagen"]["name"];
        $tamaño = $_FILES["imagen"]["size"];
        if ($_FILES["imagen"]["type"] == "image/JPEG" || $_FILES["imagen"]["type"] == "image/JPG"||
            $_FILES["imagen"]["type"] == "image/PNG" || $_FILES["imagen"]["type"] == "image/tif" ||
            $_FILES["imagen"]["type"] == "image/SVG" || $_FILES["imagen"]["type"] == "image/jpeg" ||
            $_FILES["imagen"]["type"] == "image/svg" || $_FILES["imagen"]["type"] == "image/png"  ||
            $_FILES["imagen"]["type"] == "image/jpg") {
            if ($tamaño >= 200000000){
                $datos=[
                    'mensaje' => 'danger',
                    'error'  =>  'El tamaño de la imagen es demasiado grande no puede ser permitido'
                ];
                $this->vista("Dashboard/crearCarrousel",$datos);
            }else{
                $tipo = stristr($imagen, '.');
                $nombre = "senderos". date("ymdHis") . $tipo;
                $ubicacion = $_FILES["imagen"]["tmp_name"];
                $destino = DIRECTORIO . $nombre;

                if(move_uploaded_file($ubicacion, $destino)){


                    if($this->carrouselModelo->InsertarCarrousel($nombre)){
                        $datos=[
                            'mensaje' => 'success',
                            'error'  =>  'Inserccion Correcta'
                        ];
                        $this->vista("Dashboard/crearCarrousel",$datos);
                    }else{
                        $datos=[
                            'mensaje' => 'danger',
                            'error'  =>  'Fallo la inserccion'
                        ];
                        $this->vista("Dashboard/crearCarrousel",$datos);
                    }

                }else{
                    $datos=[
                        'mensaje' => 'danger',
                        'error'  =>  'Fallo la inserccion'
                    ];
                    $this->vista("Dashboard/crearCarrousel",$datos);
                }
            }
        }else{
            $datos=[
                'mensaje' => 'danger',
                'error'  =>  'La extension de la imagen no se encuentra dentro de las permitidas.'
            ];
            $this->vista("Dashboard/crearCarrousel",$datos);
        }
        }else{
            $datos=[
                'mensaje' => 'danger',
                'error'  =>  'El campo de la imagen se encuentra vacio'
            ];
            $this->vista("Dashboard/crearCarrousel",$datos);
        }

    }

    public function listarCarrousel()
    {
        $this->validarSesion();
        $datos = $this->carrouselModelo->listarCarrousel();
        $this->vista("Dashboard/Carrousel",$datos);
    }

    public function eliminarCarrousel($id)
    {
        $this->validarSesion();
        $this->carrouselModelo->eliminarCarrousel($id);
        $this->listarCarrousel();
    }

    // Obituarios

    public function listarObituarios()
    {
        $this->validarSesion();
        if($_SESSION['rol'] == 1){
            $obituarios = $this->obituarioModelo->listarObituarios();
            $this->vista("Dashboard/obituarios",$obituarios);
        }else{
            $obituarios = $this->obituarioModelo->listarObituariosSede($_SESSION['municipio']);
            $this->vista("DashboardUser/obituariosSede",$obituarios);
        }
    }

    public function eliminarObituario($id)
    {
        $this->validarSesion();
        $this->obituarioModelo->eliminarObituario($id);
        $this->listarObituarios();
    }

    public function createObituario()
    {
        $this->validarSesion();
        if($_SESSION['rol'] == 1){
            $this->vista("Dashboard/crearObituario");
        }else{
            $this->vista("DashboardUser/crearObituarioSede");
        }
    }

    public function crearObituario()
    {
        $this->validarSesion();
        if($_SESSION['rol'] == 1){
            if (!empty($_POST['nombre_difunto']) && !empty($_POST['nombre_familia']) && !empty($_POST['fecha'])
                && !empty($_POST['lugar_velacion']) && !empty($_POST['nombre_parroquia']) && !empty($_POST['hora'])
                && !empty($_POST['cementerio']) && !empty($_POST['ciudad'])) {
                if ($this->validarModelo->validarFechaEspañol($_POST['fecha']) == 1) {
                    $datos = [
                        'nombre_difunto' => trim($_POST['nombre_difunto']),
                        'familia' => trim($_POST['nombre_familia']),
                        'fecha' => trim($_POST['fecha']),
                        'velacion' => trim($_POST['lugar_velacion']),
                        'parroquia' => trim($_POST['nombre_parroquia']),
                        'hora' => trim($_POST['hora']),
                        'cementerio' => trim($_POST['cementerio']),
                        'ciudad' => trim($_POST['ciudad']),
                    ];

                    if ($this->obituarioModelo->InsertarObituario($datos)) {
                        $datos = [
                            'data' => $_POST,
                            'error' => 'Inserccion Correcta',
                            'mensaje' => 'danger'
                        ];
                        return $this->vista("Dashboard/crearObituario", $datos);
                    } else {
                        $datos = [
                            'data' => $_POST,
                            'error' => 'Fallo la Inserccion',
                            'mensaje' => 'danger'
                        ];
                        return $this->vista("Dashboard/crearObituario", $datos);
                    }
                } else {
                    $datos = [
                        'data' => $_POST,
                        'error' => 'el campo fecha no es valido.',
                        'mensaje' => 'danger'
                    ];
                    return $this->vista("Dashboard/crearObituario", $datos);
                }
            } else {
                $datos = [
                    'data' => $_POST,
                    'error' => 'Algun campo se encuentra vacio.',
                    'mensaje' => 'danger'
                ];
                return $this->vista("Dashboard/crearObituario", $datos);
            }
        }else{
            if (!empty($_POST['nombre_difunto']) && !empty($_POST['nombre_familia']) && !empty($_POST['fecha'])
                && !empty($_POST['lugar_velacion']) && !empty($_POST['nombre_parroquia']) && !empty($_POST['hora'])
                && !empty($_POST['cementerio']) ) {
                if ($this->validarModelo->validarFechaEspañol($_POST['fecha']) == 1) {
                    $datos = [
                        'nombre_difunto' => trim($_POST['nombre_difunto']),
                        'familia' => trim($_POST['nombre_familia']),
                        'fecha' => trim($_POST['fecha']),
                        'velacion' => trim($_POST['lugar_velacion']),
                        'parroquia' => trim($_POST['nombre_parroquia']),
                        'hora' => trim($_POST['hora']),
                        'cementerio' => trim($_POST['cementerio']),
                        'ciudad' => $_SESSION['municipio'],
                    ];

                    if ($this->obituarioModelo->InsertarObituario($datos)) {
                        $datos = [
                            'data' => $_POST,
                            'error' => 'Inserccion Correcta',
                            'mensaje' => 'danger'
                        ];
                        return $this->vista("Dashboard/crearObituarioSede", $datos);
                    } else {
                        $datos = [
                            'data' => $_POST,
                            'error' => 'Fallo la Inserccion',
                            'mensaje' => 'danger'
                        ];
                        return $this->vista("Dashboard/crearObituarioSede", $datos);
                    }
                } else {
                    $datos = [
                        'data' => $_POST,
                        'error' => 'el campo fecha no es valido.',
                        'mensaje' => 'danger'
                    ];
                    return $this->vista("Dashboard/crearObituarioSede", $datos);
                }
            } else {
                $datos = [
                    'data' => $_POST,
                    'error' => 'Algun campo se encuentra vacio.',
                    'mensaje' => 'danger'
                ];
                return $this->vista("Dashboard/crearObituarioSede", $datos);
            }
        }
    }

    public function actualizarObituario($id){
        $this->validarSesion();
        if($_SESSION['rol'] == 1){
           $obituario =  $this->obituarioModelo->retornarObituario($id);
           $datos = [
               'data' => $obituario,
               'error' => "",
               'mensaje' => ""
           ];
            $this->vista('Dashboard/editarObituario', $datos);
        }else{
           $obituario = $this->obituarioModelo->retornarObituario($id);
            $datos = [
                'data' => $obituario,
                'error' => "",
                'mensaje' => ""
            ];
            $this->vista('DashboardUser/editarObituarioSede',$datos);
        }

    }

    public function actualizarObituarioSede($id){
        $this->validarSesion();
            $obituario = $this->obituarioModelo->retornarObituario($id);
            $datos = [
                'data' => $obituario,
                'error' => "",
                'mensaje' => ""
            ];
            $this->vista('DashboardUser/editarObituarioSede',$datos);
    }

    public function editarObituario()
    {
        $this->validarSesion();
        if ($_SESSION['rol'] == 1) {

            if (!empty($_POST['nombre_difunto']) && !empty($_POST['familia']) && !empty($_POST['fecha'])
                && !empty($_POST['velacion']) && !empty($_POST['parroquia']) && !empty($_POST['hora'])
                && !empty($_POST['cementerio']) && !empty($_POST['ciudad']) && !empty($_POST['id'])) {
                if ($this->validarModelo->validarFechaEspañol($_POST['fecha']) == 1) {
                    $datos = [
                        'nombre_difunto' => trim($_POST['nombre_difunto']),
                        'familia' => trim($_POST['familia']),
                        'fecha' => trim($_POST['fecha']),
                        'velacion' => trim($_POST['velacion']),
                        'parroquia' => trim($_POST['parroquia']),
                        'hora' => trim($_POST['hora']),
                        'cementerio' => trim($_POST['cementerio']),
                        'ciudad' => trim($_POST['ciudad']),
                        'id' => $_POST['id']
                    ];

                    if ($this->obituarioModelo->actualizarObituario($datos)) {
                        $this->listarObituarios();
                    } else {
                        $obituario = $this->obituarioModelo->retornarObituario($_POST['id']);
                        $datos = [
                            'data' => $obituario,
                            'error' => 'Fallo la insercion',
                            'mensaje' => 'danger'
                        ];
                        return $this->vista("Dashboard/editarObituario", $datos);
                    }
                } else {
                    $obituario = $this->obituarioModelo->retornarObituario($_POST['id']);
                    $datos = [
                        'data' => $obituario,
                        'error' => 'el campo fecha no es valido.',
                        'mensaje' => 'danger'
                    ];
                    return $this->vista("Dashboard/editarObituario", $datos);
                }
            } else {

                $obituario = $this->obituarioModelo->retornarObituario($_POST['id']);
                $datos = [
                    'data' => $obituario,
                    'error' => 'Algun campo se encuentra vacio.',
                    'mensaje' => 'danger'
                ];
                return $this->vista("Dashboard/editarObituario", $datos);
            }

        } else {

            if (!empty($_POST['nombre_difunto']) && !empty($_POST['familia']) && !empty($_POST['fecha'])
                && !empty($_POST['velacion']) && !empty($_POST['parroquia']) && !empty($_POST['hora'])
                && !empty($_POST['cementerio']) && !empty($_POST['id'])) {
                if ($this->validarModelo->validarFechaEspañol($_POST['fecha']) == 1) {
                    $datos = [
                        'nombre_difunto' => trim($_POST['nombre_difunto']),
                        'familia' => trim($_POST['familia']),
                        'fecha' => trim($_POST['fecha']),
                        'velacion' => trim($_POST['velacion']),
                        'parroquia' => trim($_POST['parroquia']),
                        'hora' => trim($_POST['hora']),
                        'cementerio' => trim($_POST['cementerio']),
                        'ciudad' => $_SESSION['municipio'],
                        'id' => $_POST['id']
                    ];

                    if ($this->obituarioModelo->actualizarObituario($datos)) {
                        $this->listarObituarios();
                    } else {
                        $obituario = $this->obituarioModelo->retornarObituario($_POST['id']);
                        $datos = [
                            'data' => $obituario,
                            'error' => 'Fallo la insercion',
                            'mensaje' => 'danger'
                        ];
                        return $this->vista("Dashboard/editarObituario", $datos);
                    }
                } else {
                    $obituario = $this->obituarioModelo->retornarObituario($_POST['id']);
                    $datos = [
                        'data' => $obituario,
                        'error' => 'el campo fecha no es valido.',
                        'mensaje' => 'danger'
                    ];
                    return $this->vista("Dashboard/editarObituario", $datos);
                }
            } else {

                $obituario = $this->obituarioModelo->retornarObituario($_POST['id']);
                $datos = [
                    'data' => $obituario,
                    'error' => 'Algun campo se encuentra vacio.',
                    'mensaje' => 'danger'
                ];
                return $this->vista("Dashboard/editarObituario", $datos);
            }
        }
    }


    public function cerrarSesion()
    {
        $this->sesionModelo->closeSession();
        header('Location:' . RUTA_URL); //Aqui redirijo porque no existe la session
    }

        public function validarSesion(){
        if (empty($_SESSION['id'])) {
           $this->inicio();
           die();
        }
    }
}

 