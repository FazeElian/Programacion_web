<?php session_start();
    class Login{        
        public function __construct(){}
        public function main(){
            require_once "views/users/header.view.php";
            require_once "views/users/login/login.view.php";
        }
    }
?>