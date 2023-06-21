<?php session_start();
    class Company{        
        public function __construct(){}
        public function main(){
            require_once "views/company/company.view.php";
        }
    }
?>