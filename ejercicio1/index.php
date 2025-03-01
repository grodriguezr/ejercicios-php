<?php
    include('persona.php');
    $p = new Persona(); //instancia de clase persona
    $p->set_nombre('Pedro'); //asigné valor al atributo nombre
    
    $p->imprimeInformacion(); //llamo a la función imprimeInformación




?>