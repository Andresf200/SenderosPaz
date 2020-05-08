<?php
class Obituario
{

    public function __construct()
    {
        $this->conexion = new Base();
    }

    public function InsertarObituario(array $datos)
    {

        try {
            $this->conexion->beginTransaction();
            $sql = "INSERT INTO obituarios (nombre_difunto,familia,fecha,velacion,parroquia,hora,cementerio,ciudad) 
            VALUES (:nombre_difunto, :familia, :fecha, :velacion,:parroquia,:hora,:cementerio,:ciudad)";
            $stmn = $this->conexion->prepare($sql);
            $stmn->bindParam(":nombre_difunto", $datos[ 'nombre_difunto'], PDO::PARAM_STR);
            $stmn->bindParam(":familia", $datos['familia'], PDO::PARAM_STR);
            $stmn->bindParam(":fecha", $datos['fecha'], PDO::PARAM_STR);
            $stmn->bindParam(":velacion", $datos['velacion'], PDO::PARAM_STR);
            $stmn->bindParam(":parroquia", $datos['parroquia'], PDO::PARAM_STR);
            $stmn->bindParam(":hora", $datos['hora'], PDO::PARAM_STR);
            $stmn->bindParam(":cementerio", $datos['cementerio'], PDO::PARAM_STR);
            $stmn->bindParam(":ciudad", $datos['ciudad'], PDO::PARAM_STR);
            $stmn->execute();
            $this->conexion->commit();
            if($stmn->rowCount()){
                return true;
            }else{
                return false;
            }
        } catch (\PDOException $ex) {
            print $ex->getMessage();
            print $ex->getCode();
            print_r($ex->getTrace());
            print $ex->getFile();
            $this->conexion->rollBack();
            return false;
        }
    }

    public function listarObituarioMunicipio($municipio)
    {
        $estado = 0;
        try {
            $this->conexion->beginTransaction();
            $sql = "SELECT * FROM obituarios WHERE (estado = :estado)";
            $stmn = $this->conexion->prepare($sql);
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

    public function listarObituarios()
    {
        $estado = 0;
        try {
            $this->conexion->beginTransaction();
            $sql = "SELECT obituarios.id, obituarios.nombre_difunto, obituarios.familia, obituarios.fecha, obituarios.velacion, 
                    obituarios.parroquia, obituarios.hora, obituarios.cementerio, sedes.ciudad FROM obituarios INNER JOIN sedes 
                    ON obituarios.ciudad = sedes.id where estado = :estado";
            $stmn = $this->conexion->prepare($sql);
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
    public function listarObituariosSede($sede)
    {
        $estado = 0;
        try {
            $this->conexion->beginTransaction();
            $sql = "SELECT obituarios.id,obituarios.nombre_difunto, obituarios.familia, obituarios.fecha, obituarios.velacion, obituarios.parroquia, 
                    obituarios.hora, obituarios.cementerio, sedes.ciudad FROM obituarios INNER JOIN sedes 
                    ON obituarios.ciudad = sedes.id where obituarios.ciudad = :ciudad AND estado = :estado";
            $stmn = $this->conexion->prepare($sql);
            $stmn->bindParam(":ciudad", $sede, PDO::PARAM_STR);
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

    public function retornarObituario($id)
    {
        $estado = 0;
        try {
            $this->conexion->beginTransaction();
            $sql = "SELECT obituarios.id,obituarios.nombre_difunto, obituarios.familia, obituarios.fecha, obituarios.velacion, obituarios.parroquia, 
                    obituarios.hora, obituarios.cementerio, sedes.ciudad FROM obituarios INNER JOIN sedes 
                    ON obituarios.ciudad = sedes.id where obituarios.id = :id AND estado = :estado";
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

    public function actualizarObituario(array $datos)
    {
        try {
            $this->conexion->beginTransaction();
            $sql = "UPDATE obituarios SET nombre_difunto = :nombre_difunto ,familia = :familia, fecha = :fecha,
                    velacion = :velacion ,parroquia = :parroquia, hora = :hora, cementerio = :cementerio, ciudad = :ciudad   WHERE  id = :id";
            $stmn = $this->conexion->prepare($sql);
            $stmn->bindParam(":nombre_difunto", $datos[ 'nombre_difunto'], PDO::PARAM_STR);
            $stmn->bindParam(":familia", $datos['familia'], PDO::PARAM_STR);
            $stmn->bindParam(":fecha", $datos['fecha'], PDO::PARAM_STR);
            $stmn->bindParam(":velacion", $datos['velacion'], PDO::PARAM_STR);
            $stmn->bindParam(":parroquia", $datos['parroquia'], PDO::PARAM_STR);
            $stmn->bindParam(":hora", $datos['hora'], PDO::PARAM_STR);
            $stmn->bindParam(":cementerio", $datos['cementerio'], PDO::PARAM_STR);
            $stmn->bindParam(":ciudad", $datos['ciudad'], PDO::PARAM_STR);
            $stmn->bindParam(":id", $datos['id'], PDO::PARAM_STR);
            $stmn->execute();
            $this->conexion->commit();
            if($stmn->rowCount()){
                return true;
            }else{
                return false;
            }
        } catch (\PDOException $ex) {
            print $ex->getMessage();
            print $ex->getCode();
            print_r($ex->getTrace());
            print $ex->getFile();
            $this->conexion->rollBack();
            return false;
        }
    }

    public function eliminarObituario($id)
    {
        $estado = 1;
        try {
            $this->conexion->beginTransaction();
            $sql = "UPDATE obituarios SET estado  = :estado  WHERE  id = :id";
            $stmn = $this->conexion->prepare($sql);
            $stmn->bindParam(":estado", $estado, PDO::PARAM_STR);
            $stmn->bindParam(":id", $id, PDO::PARAM_STR);
            $stmn->execute();
            $this->conexion->commit();
            if($stmn->rowCount()){
                return true;
            }else{
                return false;
            }
        } catch (\PDOException $ex) {
            print $ex->getMessage();
            print $ex->getCode();
            print_r($ex->getTrace());
            print $ex->getFile();
            $this->conexion->rollBack();
            return false;
        }
    }
}

