<?php
class Usuario{
    private $usuario_id; //primaria
    private $usuario;
    private $clave;
    private $usuario_nombre;
    private $usuario_apellido1;
    private $usuario_apellido2;
    private $Rol;
    private $estado;

    public function __construct()
    {
        $this->conexion = new Base();
    }
    public function usuarioExiste($userForm):bool
    {
        $estado=0;
        try {
            $this->conexion->beginTransaction();
            $sql = "SELECT * FROM usuarios WHERE usuario = :usuario AND estado = :estado";
            $stmn = $this->conexion->prepare($sql);
            $stmn->bindParam(":usuario", $userForm, PDO::PARAM_STR);
            $stmn->bindParam(":estado", $estado, PDO::PARAM_STR);
            $stmn->execute();
            $this->conexion->commit();
            if ($stmn->rowCount()) {
                return true;
            }else{
                return false;
            }
        } catch (\PDOException $ex) {
            print $ex->getMessage();
            print $ex->getCode();
            print_r($ex->getTrace());
            print $ex->getLine();
            $this->conexion->rollBack();
            return false;
        }
    }
    public function retornoID($usuario):array 
    {
        
        $estado = 0;
        try {
            $this->conexion->beginTransaction();
            $sql = "SELECT usuario_id FROM usuario WHERE usuario = :usuario and estado = :estado";
            $stmn = $this->conexion->prepare($sql);
            $stmn->bindParam(":usuario", $usuario, PDO::PARAM_STR);
            $stmn->bindParam(":estado", $estado, PDO::PARAM_STR);
            $stmn->execute();
            $this->conexion->commit();
            return $stmn->fetchAll(PDO::FETCH_OBJ);
        } catch (\PDOException $ex) {
            print $ex->getMessage();
            print $ex->getCode();
            print_r($ex->getTrace());
            print $ex->getLine();
            $this->conexion->rollBack();
            return array();
        }

    }
    public function agregarUsuario(array $datos){

        try {
            $this->conexion->beginTransaction();
            $sql = "INSERT INTO usuarios (nombres, apellidos, identificacion, telefono, direccion, ciudad, rol, usuario, password, estado) VALUES 
                        (:nombres, :apellidos, :identificacion, :telefono, :direccion, :ciudad, :rol, :usuario, :password, :estado)";
            $stmn = $this->conexion->prepare($sql);
            $stmn->bindParam(":nombres", $datos['nombres'], PDO::PARAM_STR);
            $stmn->bindParam(":apellidos",$datos['apellidos'], PDO::PARAM_STR);
            $stmn->bindParam(":identificacion",$datos['identidad'], PDO::PARAM_STR);
            $stmn->bindParam(":telefono",$datos['telefono'], PDO::PARAM_STR);
            $stmn->bindParam(":direccion",$datos['direccion'], PDO::PARAM_STR);
            $stmn->bindParam(":ciudad",$datos['ciudad'], PDO::PARAM_STR);
            $stmn->bindParam(":rol",$datos['rol'], PDO::PARAM_STR);
            $stmn->bindParam(":usuario",$datos['usuario'], PDO::PARAM_STR);
            $stmn->bindParam(":password",$datos['password'], PDO::PARAM_STR);
            $stmn->bindParam(":estado",$datos['estado'], PDO::PARAM_STR);
            $stmn->execute();
            $this->conexion->commit();
            if ($stmn->rowCount()) {
                return true;
            }else{
                return false;
            }
        } catch (\PDOException $ex) {
            print $ex->getMessage();
            print $ex->getCode();
            print_r($ex->getTrace());
            print $ex->getLine();
            $this->conexion->rollBack();
            return array();
        }
    }
    public function retornarPermiso($usuario)
    {
        $estado = 0;
        try {
            $this->conexion->beginTransaction();
            $sql = "SELECT rol,ciudad,id,password FROM usuarios WHERE usuario = :usuario AND estado = :estado";
            $stmn = $this->conexion->prepare($sql);
            $stmn->bindParam( ":usuario", $usuario, PDO::PARAM_STR);
            $stmn->bindParam( ":estado", $estado, PDO::PARAM_STR);
            $stmn->execute();
            $this->conexion->commit();
            return $stmn->fetchAll(PDO::FETCH_OBJ);
        } catch (\PDOException $ex) {
            print $ex->getMessage();
            print $ex->getCode();
            print_r($ex->getTrace());
            print $ex->getLine();
            $this->conexion->rollBack();
        }
    }
    public function listarUsuario()
    {
        $estado = 0;
        try {
            $this->conexion->beginTransaction();
            $sql = "SELECT usuarios.id,usuarios.nombres, usuarios.apellidos, usuarios.telefono, usuarios.direccion, usuarios.ciudad,
                    usuarios.rol, usuarios.usuario, sedes.ciudad FROM usuarios INNER JOIN sedes ON usuarios.ciudad = sedes.id where estado = :estado";
            $stmn = $this->conexion->prepare($sql);
            $stmn->bindParam(":estado",$estado,PDO::PARAM_STR);
            $stmn->execute();
            $this->conexion->commit();
            return $stmn->fetchAll(PDO::FETCH_OBJ);
        } catch (\PDOException $ex) {
            print $ex->getMessage();
            print $ex->getCode();
            print_r($ex->getTrace());
            print $ex->getLine();
            $this->conexion->rollBack();
        }
    }
    public function retornarUsuario($id)
    {
        $estado = 0;
        try {
            $this->conexion->beginTransaction();
            $sql ="SELECT * FROM usuarios WHERE id = :id AND estado = :estado";
            $stmn = $this->conexion->prepare($sql);
            $stmn->bindParam(":id", $id, PDO::PARAM_STR);
            $stmn->bindParam(":estado", $estado, PDO::PARAM_STR);
            $stmn->execute();
            $this->conexion->commit();
            return $stmn->fetchAll(PDO::FETCH_OBJ);
        } catch (\PDOException $ex) {
            print $ex->getMessage();
            print $ex->getCode();
            print_r($ex->getTrace());
            print $ex->getLine();
            $this->conexion->rollBack();
        }
        
       
    }
    public function  actualizarUsuario(array $datos){
         try {
            $this->conexion->beginTransaction();
            $sql = "UPDATE usuarios SET nombres = :nombres,  apellidos = :apellidos,identificacion = :identidad, telefono = :telefono, direccion = :direccion,
                    ciudad = :ciudad, rol = :rol, usuario = :usuario, password = :password  WHERE id = :id";
            $stmn = $this->conexion->prepare($sql);
            $stmn->bindParam(":id", $datos['id'], PDO::PARAM_STR);
             $stmn->bindParam(":nombres", $datos['nombres'], PDO::PARAM_STR);
             $stmn->bindParam(":apellidos",$datos['apellidos'], PDO::PARAM_STR);
             $stmn->bindParam(":identidad",$datos['identidad'], PDO::PARAM_STR);
             $stmn->bindParam(":telefono",$datos['telefono'], PDO::PARAM_STR);
             $stmn->bindParam(":direccion",$datos['dirrecion'], PDO::PARAM_STR);
             $stmn->bindParam(":ciudad",$datos['ciudad'], PDO::PARAM_STR);
             $stmn->bindParam(":rol",$datos['rol'], PDO::PARAM_STR);
             $stmn->bindParam(":usuario",$datos['usuario'], PDO::PARAM_STR);
             $stmn->bindParam(":password",$datos['password'], PDO::PARAM_STR);
            $stmn->execute();
            $this->conexion->commit();
             if ($stmn->rowCount()) {
                 return true;
             }else{
                 return false;
             }
        } catch (\PDOException $ex) {
            print $ex->getMessage();
            print $ex->getCode();
            print_r($ex->getTrace());
            print $ex->getLine();
            $this->conexion->rollBack();
            return array();
        }
    }
    public function eliminarUsuario(int $id):bool
     {
         $estado = 1;
        try {
            $this->conexion->beginTransaction();
            $sql = "UPDATE usuarios SET estado = :estado WHERE id = :id";
            $stmn = $this->conexion->prepare($sql);
            $stmn->bindParam(":id",$id, PDO::PARAM_INT);
            $stmn->bindParam(":estado",$estado, PDO::PARAM_STR);
            $stmn->execute();
            $this->conexion->commit();
            if ($stmn->rowCount()) {
                return true;
            }else{ 
                 return false;
            }
        } catch (\PDOException $ex) {
            print $ex->getMessage();
            print $ex->getCode();
            print_r($ex->getTrace());
            print $ex->getLine();
            $this->conexion->rollBack();
            return false;
        }
    }
    public function usuario($usuario)
    {

        try {
            $this->conexion->beginTransaction();
            $sql = "SELECT usuario FROM usuarios WHERE usuario = :usuario AND estado = 0";
            $stmn = $this->conexion->prepare($sql);
            $stmn->bindParam(":usuario",$usuario, PDO::PARAM_STR);
            $stmn->execute();
            $this->conexion->commit();
            return $stmn->fetchAll(PDO::FETCH_OBJ);
        } catch (\PDOException $ex) {
            print $ex->getMessage();
            print $ex->getCode();
            print_r($ex->getTrace());
            print $ex->getLine();
            $this->conexion->rollBack();
            return array();
        }
    }


}