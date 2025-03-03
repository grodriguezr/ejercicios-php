<?php
class Persona{
    //Atributos de clase
    public $Nombre;
    public $Apellido;
    public $Direccion;
    public $Telefono;

    //setters y getters
    public function set_nombre($Nombre){
        $this->Nombre = $Nombre;
    }

    function get_nombre(){
        return $this->Nombre;
    }

    public function set_apellido($Apellido){
        $this->Apellido = $Apellido;
    }

    function get_apellido(){
        return $this->Apellido;
    }

//funciones
    function imprimeInformacion(){
        echo "Nombre: ".$this->get_nombre();
        
    }







}




?>