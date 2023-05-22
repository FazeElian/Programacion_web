<?php
    class UserDto{
        # Atributos (Encapsulamiento)
        private $NombreUsuario;     
        private $Contraseña;

        # Constructores (Sobrecarga)
        public function __construct(){
            $a = func_get_args();
			$i = func_num_args();
			if (method_exists($this, $f='__construct'.$i)) {
				call_user_func_array(array($this, $f), $a);
			}
        }
        public function __construct6($NombreUsuario,$Contraseña){
            $this->NombreUsuario = $NombreUsuario;
            $this->Contraseña = $Contraseña;
        }

        # Métodos set y get -> Nombre Usuario
        public function setNombreUsuario($NombreUsuario){
            $this->NombreUsuario = $NombreUsuario;
        }
        public function getNombreUsuario(){
            return $this->NombreUsuario;
        }

        # Métodos set y get -> Contraseña del Usuario
        public function setContraseña($Contraseña){
            $this->Contraseña = $Contraseña;
        }
        public function getContraseña(){
            return $this->Contraseña;
        }
    }
?>