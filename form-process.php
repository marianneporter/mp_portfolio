<?php
    require_once 'includes/ContactForm.php';
    require_once 'includes/utilities.php';
    require_once 'includes/constants.php';

    $contactFormData = new ContactForm;

    $contactFormData->firstName = sanitizeString($_POST['first-name']);
    $contactFormData->lastName  = sanitizeString($_POST['last-name']);
    $contactFormData->email     = sanitizeEmail($_POST['email']);
    $contactFormData->subject   = sanitizeString($_POST['subject']);    
    $contactFormData->message   = sanitizeString($_POST['message']); 
   
    $errors = validationErrors($contactFormData);

    if (empty( (array) $errors ))  {  
        // attempt db insert for valid form
        require_once('db/dbConnect.php');
        $dbConnection = new DB_Connect();
        $db = $dbConnection->CreateConnection();          
      
        if ($db) {        
            require_once('db/dbQueries.php');
            $dbQueries = new DB_Queries();
            $insertSuccess
                = $dbQueries->insertContactFormData($db, $contactFormData );  
        } else {
            $insertSuccess = false;
        }       
        
        if ($insertSuccess) {
            $statusMessage = "OK";
        } else {
            $statusMessage = "DB_Error";
        }
   
    } else {
        //invalid form return validation errors status
        $statusMessage = "Validation_Errors";
    }

    $returnValue = new StdClass();
    $returnValue->statusMessage = $statusMessage;
    $returnValue->errors = $errors;

    echo json_encode($returnValue);

  
    function validationErrors($contactFormData) {
        $errors = new stdClass();

        if ($contactFormData->firstName == '') {
            $errors->firstName = "Please enter your first name";  
        }
    
        if ($contactFormData->lastName == '') {
            $errors->lastName = "Please enter your last name";  
        } else {
            if (strlen($contactFormData->lastName) < 2 ) {
                $errors->lastName = "Last Name must be at least 2 characters in length";
            }
        }
    
        if ($contactFormData->email == '') {
            $errors->email = 'Please enter your email';        
        } else if(!preg_match( EMAIL_REGEX, $contactFormData->email)) {
            $errors->email = "Please enter a valid email";
        }  
       
        if ($contactFormData->subject == '') {
            $errors->subject = 'Please enter a subject';   
        }
    
        if ($contactFormData->message == '') {
            $errors->message = "Please enter a message";         
        } else if (strlen($contactFormData->message) < 10) {
            $errors->message = "Message must be at least 10 characters in length";
        }

        return $errors;
    
    }