<?php

class DB_Queries {

    public function insertContactFormData($db, $contactFormData) {

        try {
            $sql = "INSERT INTO contacts (name, company_name, email, subject, message )
                    VALUES (:name, :companyName, :email, :subject, :message )";
                       $stmt = $db->prepare($sql);
                       $stmt->bindparam(':name', $contactFormData->name);
                       $stmt->bindparam(':companyName', $contactFormData->companyName);
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