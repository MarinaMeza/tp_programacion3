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
            array_push($this->_empleado,$pEmpleado);
        }

        public function CalcularSueldos()
        {
            
        }

        public function EliminarEmpleado($pPersona)
        {
            for($i=0;$i<count($this->_empleado);$i++)
            {
                if($this->_empleado[$i]->getLegajo()==$pPersona[$i]->getLegajo())
                {
                    unset($this->empleado[$i]);
                }
            }
        }

        private function EliminarEmpleadosRepetidos()
        {

        }

        public function ToString()
        {

            foreach ($this->_emplados as $key)
            {
                echo $key->ToString();
                echo " - ";
            }
        }

?>