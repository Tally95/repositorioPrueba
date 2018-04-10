<?php

class Reservacion {

    private $pdo;

    public $numReservacion;
    
    public $parqueNacional;
    public $sector;
    public $ingresoPor;
    public $fEntrada;
    public $dias;
    public $tipoVisita;     
    public $usuario;
    public $total;
    public $estado = "sinAprobar";

    public function __CONSTRUCT() {
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function obtenerLastIdR() {
        try {
            $stm = $this->pdo
                    ->prepare("SELECT numReservacion from reservacion where numReservacion=(select MAX(numReservacion) from reservacion);");
            $numReser = $stm->fetch(PDO::FETCH_OBJ)->numReservacion;
            return $numReser;
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar($data) {
        try {
            $sql = "INSERT INTO `bd_sracg`.`reservacion` (`numReservacion`,`parqueNacional`, `sector`, `ingresoPor`, `fEntrada`, `dias`, `tipoVisita`, `usuario`, `total`, `estado`)
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)->execute(array(
                $data->numReservacion,
                $data->parqueNacional,
                $data->sector,
                $data->ingresoPor,
                $data->fEntrada,
                $data->dias,
                $data->tipoVisita,
                $data->usuario,
                $data->total,
                $data->estado));
            //header('Location: index.php?c=reservacionUsuarioV2');
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function Actualizar($data) {
        try {
            $sql = "UPDATE reservacion SET parqueNacional = ?, sector = ?,ingresoPor = ?,fEntrada = ?,dias = ?,tipoVisita = ?,usuario = ?,total = ?,estado = ? WHERE numReservacion = ?";

            $this->pdo->prepare($sql)
                    ->execute(
                            array(
                                $data->parqueNacional,
                                $data->sector,
                                $data->ingresoPor,
                                $data->fEntrada,
                                $data->dias,
                                $data->tipoVisita,
                                $data->usuario,
                                $data->total,
                                $data->estado,
                                $data->numReservacion));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Listar() {
        try {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM ulumnos");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($id) {
        echo '<script>alert("obtener en el model'. $id.'")</script>';
        try {
            $stm = $this->pdo
                    ->prepare("SELECT * FROM reservacion WHERE numReservacion = ?");


            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

//    public function Eliminar($id) {
//        try {
//            $stm = $this->pdo
//                    ->prepare("DELETE FROM usuarios WHERE ID_USUARIO = ?");
//
//            $stm->execute(array($id));
//        } catch (Exception $e) {
//            die($e->getMessage());
//        }
//    }
//
    

}
