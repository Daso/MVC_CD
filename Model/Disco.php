<?php
require_once 'ItemsInterfaz.php';

abstract class  Disco implements ItemsInterfaz {
   protected $_titulo;
   protected $_anho;

     public function __construct($titulo="",$anho="") {
        $this->_titulo = $titulo;
        $this->_anho = $anho;
    } 
}
?>
