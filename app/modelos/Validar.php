<?php 
class Validar{
    public function ValidarEntero($data)
    {
        if(ctype_digit($data)){
            $data = (int)$data ;
            if(is_int($data)){
                $ent =  (filter_var($data, FILTER_SANITIZE_NUMBER_INT));
                return $ent;
            }else{
                return "false";
            }
        }else{
            return "este numero no es un entero";
        }
    }
    public function ValidarInt($data)
    {
        if (ctype_digit($data)) {
            $data = (int)$data;
            if (is_int($data)) {
                $ent = (filter_var($data, FILTER_SANITIZE_NUMBER_INT));
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function limpiarDatos($datos)
    {
        $datos = trim($datos);
        $datos = htmlspecialchars($datos);
        $datos = filter_var($datos, FILTER_SANITIZE_STRING);
        return $datos;
    }

    function validarFechaEspañol($fecha){
        $valores = explode('-', $fecha);
        if(count($valores) == 3 && checkdate($valores[1], $valores[2], $valores[0]) == 1){
            return true;
        }else{
            return false;
        }
    }

    function validar_clave($clave){

        if(strlen($clave) < 6){
            $error_clave = "La clave debe tener al menos 6 caracteres";
            return $error_clave;
        }
        if(strlen($clave) > 16){
            $error_clave = "La clave no puede tener más de 16 caracteres";
            return $error_clave;
        }
        if (!preg_match('`[a-z]`',$clave)){
            $error_clave = "La clave debe tener al menos una letra minúscula";
            return $error_clave;
        }
        if (!preg_match('`[A-Z]`',$clave)){
            $error_clave = "La clave debe tener al menos una letra mayúscula";
            return $error_clave;
        }
        if (!preg_match('`[0-9]`',$clave)){
            $error_clave = "La clave debe tener al menos un caracter numérico";
            return $error_clave;
        }
        $error_clave = "";
        return true;
    }

    public function encrytando($password): string
    {
        $hast = password_hash($password, PASSWORD_ARGON2I);
        return $hast;
    }
    public function validarPassword($password, $bd):bool
    {
        if (password_verify($password, $bd)) {
            return true;
        } else {

            return false;
        }
    }




}
