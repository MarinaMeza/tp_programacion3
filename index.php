<?php

    require_once "persona.php";
    require_once "empleado.php";
    require_once "fabrica.php";
    $nuevoEmpleado1 = new Empleado("Marina","Meza",123456789,'F',1999,55000);
    $nuevoEmpleado2 = new Empleado("Bruno","Pretti",234567891,'M',1997,54000);
    $nuevoEmpleado3 = new Empleado("Susana","Perez",345678912,'F',1996,53000);
    $nuevoEmpleado4 = new Empleado("Cecilia","Martinez",45678132,'F',1949,52000);
    $nuevoEmpleado5 = new Empleado("Jose","Gomez",567891324,'M',1959,51000);
/*
    echo $nuevoEmpleado1->ToString();
    echo $nuevoEmpleado1->Hablar(" Ingles");*/

    $miFabrica = new Fabrica("FabricaSA");
    
    $miFabrica->AgregarEmpleado($nuevoEmpleado1);
    $miFabrica->AgregarEmpleado($nuevoEmpleado2);
    $miFabrica->AgregarEmpleado($nuevoEmpleado3);
    $miFabrica->AgregarEmpleado($nuevoEmpleado4);
    $miFabrica->AgregarEmpleado($nuevoEmpleado5);
    //echo $miFabrica->ToString();
    
    //$miFabrica->GuardarFabrica();
    $miFabrica->TraerFabrica();
?>