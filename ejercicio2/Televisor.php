<?php
include('Electrodomestico.php');
class Televisor extends Electrodomestico{
    //atributos
    public $Resolucion;

    //getters y setters

    function set_resolucion($Resolucion){
        $this->Resolucion = $Resolucion;
    }

    function get_resolucion(){
        return $this->Resolucion;
    }





}





?>