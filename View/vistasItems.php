<?php

class vistaItems{

    public function __construct($lista) {
static $DVD = 'DVD';
static $CD = 'CD';

        $obj = $lista[0];

        if(is_a($obj,$DVD )){
            require_once 'vistaDVD.php';
        }else{
            require_once 'vistaCD.php';
        }

    }

   // echo is_a($obj, 'D')

}





?>
