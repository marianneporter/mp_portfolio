<?php 
    /********************************************************/
    /* Model for database Contact table and form            */
    /********************************************************/
    
    class ContactForm {
 
        public $name;
        public $companyName;
        public $email;    
        public $subject;
        public $message;

        function __construct($name="",
                             $companyName="",
                             $email="",                           
                             $subject="",
                             $message="") {   

        }
    }
?>