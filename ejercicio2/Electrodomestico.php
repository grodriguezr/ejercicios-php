<?php
class Electrodomestico{
    //Atributos
    public $Nombre;
    public $Marca;
    public $Precio;


    //getters y setters
    function set_nombre($Nombre){
        $this->Nombre = $Nombre;
    }

    function get_nombre(){
        return $this->Nombre;
    }

    function set_marca($Marca){
        $this->Marca = $Marca;
    }

    function get_marca(){
        return $this->Marca;
    }

    function set_precio($Precio){
        $this->Precio = $Precio;
    }

    function get_precio(){
        return $this->Precio;
    }

    

    //Funciones o métodos

    function precio_total(){
        return $this->Precio + $this->Precio * 0.019 ;
    }




}





?>