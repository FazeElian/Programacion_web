<?php session_start();   
    require_once "models/DataBase.php";    
    class VerRegistros{
        public function __construct(){}
        public function main(){
            require_once "views/admin/header.view.php";
            require_once "views/admin/users/viewsUsers.view.php";
        }
    }
?>