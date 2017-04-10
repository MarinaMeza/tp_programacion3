<?php
    require_once "empleado.php";

    //var_dump($_POST);

    $pruebaEmpleado=new Empleado($_POST["nombre"],$_POST["apellido"],$_POST["dni"],$_POST["sexo"],$_POST["legajo"],$_POST["sueldo"]);

    $fichero=fopen("empleados.txt","a");
    fwrite($fichero,$pruebaEmpleado->ToString());
    fwrite($fichero,"\r\n");

    echo $pruebaEmpleado->ToString();
?>