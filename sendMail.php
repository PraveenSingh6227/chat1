<?php 
    $to_email="info@primeimmigrations.com";
    $email_subject="Enquiry From Primeimmigrations.com For Assessment Form";
    $email = $data['email'];
    $name = $data['name'];
    $subject = $data['subject'];
    $message = $data['message'];
    $headers="From: $email" . "\r\n"."Reply-To: $email"."\r\n".'X-Mailer: PHP/'. phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $message = "Test";
?>