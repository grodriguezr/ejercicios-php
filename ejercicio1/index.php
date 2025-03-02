<?php
    include('persona.php');
    $p = new Persona(); //instancia de clase persona
    $p->set_nombre('Daniel'); //asigné valor al atributo nombre
    $p->imprimeInformacion(); //llamo a la función imprimeInformación
    $p->set_nombre('pedro');
    $p->imprimeInformacion();

    $p2 = new Persona();
    $p2->set_nombre('eduardo');
    $p2->imprimeInformacion(); 
?>