<?php
require_once 'Disco.php';
class DVD extends Disco{
    private $_duracion;
    public function __construct($titulo="", $anho="", $duracion="") {
        $this->_duracion = $duracion;
        parent::__construct($titulo, $anho);
    }

 

    public function getTitulo(){
        return $this->_titulo;
    }

    public function getDuracion(){
        return $this->_duracion;
    }
    public function getAnho(){
        return $this->_anho;
    }

    public function listar(){

        $miDVD1 = new DVD('DVD1','1980','20');
        $miDVD2 = new DVD('DVD2','1981','30');
        $miDVD3 = new DVD('DVD3','1982','40');
        $arrayDVD = array($miDVD1,$miDVD2,$miDVD3);
        return $arrayDVD;
    }
}
?>