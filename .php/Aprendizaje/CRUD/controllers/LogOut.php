<?php   
    class Logout{
        public function __construct(){}
        public function main(){
            session_destroy();            
            header('Location: ?');
        }
    }
?>