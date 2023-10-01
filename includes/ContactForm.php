<?php 
    /********************************************************/
    /* Model for database Contact table and form            */
    /********************************************************/
    
    class ContactForm {
 
        public $firstName;
        public $lastName;
        public $email;    
        public $subject;
        public $message;

        function __construct($firstName="",
                             $lastName="",
                             $email="",                           
                             $subject="",
                             $message="") {   

        }
    }
?>