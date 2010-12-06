<?php
require_once '/../Model/ItemsInterfaz.php';
require_once '/../View/vistasItems.php';
class ItemControl {
private $_colItems = array();
    public function __construct(ItemsInterfaz $Item) {
        $this->_colItems= $Item->listar();
        $this->mostrarFormulario($this->_colItems);
    }
    public function mostrarFormulario($lista){
        $miVista=new vistaItems($lista);       
    }
}
