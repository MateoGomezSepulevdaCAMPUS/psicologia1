<?php

class Psychology extends Conectar{
    public function get_psychology(){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm= $conectar->prepare("SELECT * FROM  psicologa");
            $stm-> execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            return  $e ->getMessage();
        }
    }
    public function get_psychology_id($id){
        try {
            $conectar=parent::Conexion();
            parent::set_name();
            $stm= $conectar->prepare("SELECT * FROM  psicologa WHERE id_psicologa= ?");
            $stm->bindValue(1, $id); // Cambio realizado aquí
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
    
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function insert_psychology($id_psicologa,$nombre,$apellido,$edad,$especialidad){
        $conectar=parent::conexion();
        parent::set_name();
        $stm="INSERT INTO psicologa(id_psicologa,nombre,apellido,edad,especialidad) VALUES(?,?,?,?,?)";
        $stm=$conectar->prepare($stm);
        $stm->bindValue(1,$id_psicologa);
        $stm->bindValue(2,$nombre);
        $stm->bindValue(3,$apellido);
        $stm->bindValue(4,$edad);
        $stm->bindValue(5,$especialidad);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }
}

?>