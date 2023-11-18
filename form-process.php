<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;    
    require_once 'vendor/autoload.php';   

    require_once 'includes/EmailCredentials.php';
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
        // require_once('db/dbConnect.php');
        // $dbConnection = new DB_Connect();
        // $db = $dbConnection->CreateConnection();          
      
        // if ($db) {        
        //     require_once('db/dbQueries.php');
        //     $dbQueries = new DB_Queries();
        //     $insertSuccess
        //         = $dbQueries->insertContactFormData($db, $contactFormData );  
        // } else {
        //     $insertSuccess = false;
        // }       
        
        // if ($insertSuccess) {
        //     $statusMessage = "OK";
        // } else {
        //     $statusMessage = "DB_Error";
        // }

        if (sendContactEmail($contactFormData)) {
            $statusMessage = "OK";
        } else {
            $statusMessage = "EmailError";
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

    function sendContactEmail($contact) {
         //Create Email Credentials
        $emailCreds = new EmailCredentials();

        //Create a new PHPMailer instance

        $mail = new PHPMailer(); 
        $mail->isSMTP();

        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com'; 
        $mail->Port = 465;

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;

        //Username to use for SMTP authentication 
        $mail->Username = $emailCreds->addressFrom;

        //Password to use for SMTP authentication
        $mail->Password = $emailCreds->emailPW;
        
        //Set who the message is to be sent from   
        $mail->setFrom($emailCreds->addressFrom, 'Marianne Porter');

        //Set an alternative reply-to address
        //This is a good place to put user-submitted addresses
        $mail->addReplyTo($contact->email, $contact->name);

        //Set who the message is to be sent to
        $mail->addAddress($emailCreds->addressTo, 'Marianne Porter'); 

        //Set the subject line
        $mail->Subject = 'Portfolio Contact Form';   
    
        $mail->Body = createHTMLMessage($contact);   

        $mail->AltBody =  createPlainTextMessage($contact); 

        return $mail->send();
    }

    function createHTMLMessage($contact) {
        $message  = '<h3>From: '  . $contact->name . '</h3>';
        $message .= '<h3>Company Name: ' . $contact->companyName;
        $message .= '<h3>Email: ' . $contact->email . '</h3>';      
        $message .= '<h3>Subject: ' . $contact->subject . '</h3>';
        $message .= '<h4>Message</h4>';
        $message .= '<p>' . $contact->message . '</p>';
        return $message;
     }
    
     function createPlainTextMessage($contact) {
        $message = "\r \n From: "  . $contact->name;
        $message = "\r \n From: "  . $contact->companyName;
        $message .= "\r \n Email: " . $contact->email;      
        $message .= '\r \n Subject: ' . $contact->subject;
        $message .= '\r\n Message \r\n';
        $message .= $contact->message;
        return $message;
    }
