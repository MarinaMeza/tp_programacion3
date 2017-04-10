<?php

    class Fabrica
    {
        private $_empleados;
        private $_razonSocial;

        public function __construct($pRazonSocial)
        {
            $this->_razonSocial=$pRazonSocial;
            $this->_empleados=array();
            $this->TraerFabrica();
        }

        public function AgregarEmpleado($pEmpleado)
        {
            array_push($this->_empleados,$pEmpleado);
        }

        public function CalcularSueldos()
        {
            
        }

        public function EliminarEmpleado($pPersona)
        {
            for($i=0;$i<count($this->_empleados);$i++)
            {
                if($this->_empleados[$i]->getLegajo()==$pPersona[$i]->getLegajo())
                {
                    unset($this->empleados[$i]);
                }
            }
        }

        public function EliminarEmpleadosRepetidos()
        {
            
        }

        public function ToString()
        {
            $auxString="";

            foreach ($this->_empleados as $key)
            {
                $auxString=$auxString.$key->ToString()."<br>";
            }
            return $auxString;
        }

        public function GuardarFabrica()
        {
            $fichero=fopen("fabrica.txt","w");
            foreach ($this->_empleados as $key) {
                fwrite($fichero,$key->ToString());
                fwrite($fichero,"\r\n");
            }
        }

        public function TraerFabrica()
        {
            $file=fopen("fabrica.txt","r");
            $arrayAux=array();
            while(!feof($file))
            {
                $linea=fgets($file);
                $arrayAux=explode(" - ",$linea);
                if($arrayAux[0]!="")
                {
                    $empleado=new Empleado($arrayAux[0],$arrayAux[1],$arrayAux[2],$arrayAux[3],$arrayAux[4],$arrayAux[5]);
                    array_push($this->_empleados,$empleado);
                }
            }
            fclose($file);
            //var_dump($arrayAux);
            
        }
  }
?>