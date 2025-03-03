<?php
include('Electrodomestico.php');
class Televisor extends Electrodomestico{
    //atributos
    public $Resolucion;

    //getters y setters

    function get_resolucion($Resolucion){
        $this->Resolucion = $Resolucion;
    }

    function set_resolucion(){
        return $this->Resolucion;
    }





}





?>