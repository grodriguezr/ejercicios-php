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

    function imprimeInformacion(){
        echo "Nombre: ".$this->get_nombre();
    }
}




?>