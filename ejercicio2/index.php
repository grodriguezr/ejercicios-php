<?php
    include('Televisor.php');
    $t = new Televisor();
    $t-> set_precio ('6000000');
    echo "El precio es:".$t->get_precio();
    echo "<br>";
    $t->set_resolucion ('4K');
    echo "Esta es la resolucion:".$t->get_resolucion(); 
    echo "<br>";
    echo "Este es el precio total del televisor:".$t->precio_total();

    


    
?>

<!-- $p = new Persona(); //instancia de clase persona
    $p->set_nombre('Daniel'); //asigné valor al atributo nombre
    $p->imprimeInformacion(); //llamo a la función imprimeInformación
    $p->set_nombre('pedro');
    $p->imprimeInformacion();


    function imprimeInformacion(){
        echo "Nombre: ".$this->get_nombre();
        
    } -->
