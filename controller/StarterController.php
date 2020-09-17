<?php
    class StarterController{


        public function __construct()
        {
            session_start();
            
        }

        public function redirect()
        {
            header("Location: LoginController.php?action=login");
        }

        
    }
?>