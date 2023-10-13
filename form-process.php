<?php
    require_once 'includes/ContactForm.php';
    require_once 'includes/utilities.php';
    require_once 'includes/constants.php';

    //create a sanitized ContactForm Object from $_POST data
    $contactFormData = new ContactForm;
    $contactFormData->name = sanitizeString($_POST['name']);
    $contactFormData->companyName  = sanitizeString($_POST['company-name']);
    $contactFormData->email     = sanitizeEmail($_POST['email']);
    $contactFormData->subject   = sanitizeString($_POST['subject']);    
    $contactFormData->message   = sanitizeString($_POST['message']); 
   
    //validate sanitized data
    $errors = validationErrors($contactFormData);

    //check if validation passed or failed and process accordingly
  
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

    // build object to return to AJAX call
    $returnValue = new StdClass();
    $returnValue->statusMessage = $statusMessage;
    $returnValue->errors = $errors;

    // echo the return object back to AJAX call in JSON format.
    echo json_encode($returnValue);

  
    function validationErrors($contactFormData) {
        $errors = new stdClass();

        if ($contactFormData->name == '') {
            $errors->name = "Please enter your first name";  
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