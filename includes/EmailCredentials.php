<?php 
class EmailCredentials {

    public $addressFrom;
    public $addressTo;
    public $emailPW;

    function __construct() {   
        if ( $_SERVER['SERVER_NAME'] == 'localhost') {
            $this->getLocalhostDets();
        } else {
            $this->getServerDets();   
        }  
    }

    private function getLocalhostDets() {
        require_once "config.php";
        $this->addressFrom =  Config::$addressFrom;
        $this->addressTo   =  Config::$addressTo;
        $this->emailPW     =  Config::$emailPW;
    }

    private function getServerDets() {
        $this->addressFrom = getenv('address_from');
        $this->addressTo   = getenv('address_to');
        $this->emailPW     = getenv('email_pw');
    }
}