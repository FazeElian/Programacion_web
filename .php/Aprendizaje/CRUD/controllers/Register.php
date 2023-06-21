<?php session_start();   
    require_once "models/DataBase.php";    
    class Register{
        public function __construct(){}
        public function main(){
            require_once "views/users/header.view.php";
            require_once "views/users/register/register.view.php";
        }
    }
?>