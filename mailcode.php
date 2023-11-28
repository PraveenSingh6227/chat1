<?php
//$_SERVER['HTTP_REFERER'];
if(isset($_GET['SubmitForm'])){
    
require('phpmailer/class.phpmailer.php');    
	$name=$_GET['name'];
	$email=$_GET['email'];
	$mobileno=$_GET['mobile'];
	$mess=$_GET['mess'];
	$sub = $_GET['msg_subject'];
	
	$message = " Name: " . $name ."<br> Email: " . $email."<br> Mobile No: " . $mobileno . "<br> Subject: " . $sub. "<br> Message: " . $mess;
	
	
$mail = new PHPMailer;
$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = "primeimmigrations.com";                 // Specify main and backup server
//$mail->Host = "Give IP Address";                 // If the above does not work.
$mail->Port = 25;                                    // Set the SMTP port
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = "info@primeimmigrations.com";                // SMTP username
$mail->Password = "prime@123";                  // SMTP password
//$mail->SMTPSecure = "ssl";                            // Enable encryption, 'ssl' also accepted

$mail->From = 'info@primeimmigrations.com';

$mail->FromName = 'Primeimmigrations';
//$mail->AddAddress($email);  // Add a recipient

$mail->IsHTML(true); 
	
   //send mail to customer 
	$sendmail_customer = $mail->AddAddress("info@primeimmigrations.com","Primeimmigrations");
	$mail->Subject = "Enquiry from primeimmigrations.com"; 
	$mail->Body = $message;     
	if($mail->Send()){
	  echo "<script>alert('Your Message was sent successfully !')</script>";
	  echo "<script>window.location='$_SERVER[HTTP_REFERER]'</script>";
	}
	else{
	echo "<script>alert('Error! Please try again.')</script>";	
	echo "<script>window.history.back()</script>";
	}
}
?>