<?php

class DB_Queries {

    public function insertContactFormData($db, $contactFormData) {

        try {
            $sql = "INSERT INTO contacts (first_name, last_name, email, subject, message )
                    VALUES (:firstName, :lastName, :email, :subject, :message )";
                       $stmt = $db->prepare($sql);
                       $stmt->bindparam(':firstName', $contactFormData->firstName);
                       $stmt->bindparam(':lastName',  $contactFormData->lastName);
                       $stmt->bindparam(':email',     $contactFormData->email);
                       $stmt->bindparam(':subject',   $contactFormData->subject);
                       $stmt->bindparam(':message',   $contactFormData->message);                     
                       $stmt->execute();  
            return true;            
        }
        catch(Exception $e) {     
            return false;
        }
    }
}