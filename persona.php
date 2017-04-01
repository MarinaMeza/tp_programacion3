<?php
    
    abstract class Persona
    {
        private $_apellido;
        private $_dni;
        private $_nombre;
        private $_sexo;

        public function __construct($pApellido,$pDni,$pNombre,$pSexo)
        {
            $this->_apellido=$pApellido;
            $this->_dni?$pDni;
            $this->_nombre=$pNombre;
            $this->_sexo=$pSexo;
        }

        public function getApellido()
        {
            return $this->_apellido;
        }

        public function getDni()
        {
            return $this->_dni;
        }

        public function getNombre()
        {
            return $this->_nombre;
        }

        public function getSexo()
        {
            return $this->_sexo;
        }

        public abstract function Hablar($pIdioma)
        {

        }

        public function ToString()
        {
            return "$this->_nombre - $this->_apellido - $this->_edad - $this->_sexo <br>";
        }
    }


?>