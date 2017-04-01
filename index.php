<?php

    require_once "persona.php";
    require_once "empleado.php";

    $nuevoEmpleado = new Empleado("Marina","Meza",123456789,'F',1999,50000);

    echo $nuevoEmpleado->ToString();
    echo $nuevoEmpleado->Hablar(" Ingles");

?>