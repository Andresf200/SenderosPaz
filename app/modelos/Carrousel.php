<?php
class Carrousel
{

    public function __construct()
    {
        $this->conexion = new Base();
    }

    public function InsertarCarrousel($nombre)
    {
        $estado = 0;
        try {
            $this->conexion->beginTransaction();
            $sql = "INSERT INTO carrousel (name, estado) 
            VALUES (:name,:estado)";
            $stmn = $this->conexion->prepare($sql);
            $stmn->bindParam(":name", $nombre, PDO::PARAM_STR);
            $stmn->bindParam(":estado", $estado, PDO::PARAM_STR);
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

    public function listarCarrousel()
    {
        $estado = 0;
        try {
            $this->conexion->beginTransaction();
            $sql = "SELECT * FROM carrousel WHERE (estado = :estado)";
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
    public function eliminarCarrousel($id)
    {
        $estado = 1;
        try {
            $this->conexion->beginTransaction();
            $sql = "UPDATE carrousel set estado = :estado WHERE id = :id";
            $stmn = $this->conexion->prepare($sql);
            $stmn->bindParam(":id", $id, PDO::PARAM_STR);
            $stmn->bindParam(":estado", $estado, PDO::PARAM_STR);
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

