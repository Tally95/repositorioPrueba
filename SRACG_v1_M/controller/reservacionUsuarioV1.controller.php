<?php

require_once 'model/reservacionModel.php';
require_once 'model/database.php';

class ReservacionUsuarioV1Controller{
    
    private $model;

    public function __CONSTRUCT() {
        $this->model = new Reservacion();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/usuario/reservacionUsuarioV1.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar() {
        $re = new Reservacion();

        $re->numReservacion = $_REQUEST['numReservacion'];
echo '<script>alert("NumReserva en guardar ' . $_REQUEST['numReservacion'] . '")</script> ';
        $re->parqueNacional = $_REQUEST['selectParqueNacional'];
        $re->sector = $_REQUEST['selectSector'];
        $re->ingresoPor = $_REQUEST['transporte2'];
        //$re->fEntrada = $_REQUEST['fEntrada'];
        $re->dias = $_REQUEST['dias'];
//        $re->tipoVisita = $_REQUEST['tipoVisita'];
        $re->usuario = "Tally";
//        $re->total = $_REQUEST['totalParci'];

        $this->model->Obtener($_REQUEST['numReservacion']) ?
                        $this->model->Actualizar($re) :
                        $this->model->Registrar($re);
    }

    public function Actualizar() {
        $re = new Reservacion();
        
        $re->numReservacion = $_REQUEST['numReservacion'];

        $re->parqueNacional = $_REQUEST['selectParqueNacional'];
        $re->sector = $_REQUEST['selectSector'];
        $re->ingresoPor = $_REQUEST['transporte2'];
        $re->fEntrada = $_REQUEST['fEntrada'];
        $re->dias = $_REQUEST['dias'];
//        $re->tipoVisita = $_REQUEST['tipoVisita'];
        $re->usuario = "Tally";
//        $re->total = $_REQUEST['totalParci'];
         $this->model->Registrar($re);
         
    }
    
    public function Registrar(){
        $re = new Reservacion();
        
        $re->numReservacion = $this->model->obtenerLastIdR()->numReservacion + 1;
//            $re = $this->model->Obtener($_REQUEST['id']);
        echo '<script>alert("NumReserva controller ' . $re->numReservacion . '")</script> ';
        
        require_once 'view/header.php';
        require_once 'view/usuario/reservacionUsuarioV1.php';
        require_once 'view/footer.php';
    }
    
}
