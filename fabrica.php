<?php

    class Fabrica
    {
        private $_empleados;
        private $_razonSocial;

        public function __construct($pRazonSocial)
        {
            $this->_razonSocial=$pRazonSocial;
            $this->_empleados=array();
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

        private function EliminarEmpleadosRepetidos()
        {

        }

        public function ToString()
        {

            foreach ($this->_empleados as $key)
            {
                echo $key->ToString();
                echo " - ";
            }
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
            $arrayFabrica=array();
            while(!feof($file))
            {
                $linea=fgets($file);
                array_push($arrayFabrica,explode(" - ",$linea));
            }
            //var_dump($arrayFabrica);
            
        }
  }
?>