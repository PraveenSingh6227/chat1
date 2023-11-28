<?php
 $name = "Mithlesh kumar";
 $email = "mkumar96.mithlesh@gmail.com";
 $mobileno = 8743979965;
 $address = "abc";
 $city = "Delhi";
 $state = "Delhi";
 $pincode = 110027;
 
 $message = '<br>Customer Details:-<br><br>Name: '.$name."<br>Email ID: ".$email."<br>Mobile No: ".$mobileno."<br>Address: ".$address."<br>City: ".$city."<br>State: ".$state."<br>PIN Code: ".$pincode;
 
 $message .="<br><br>Thanks & Regards<br>Support Number 45546454545";
 
 $message1 .="My Resume: "; 
  
 //echo $message1;

$mail = new PHPMailer;
$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = "khettohome.com";                 // Specify main and backup server
//$mail->Host = "Give IP Address";                 // If the above does not work.
$mail->Port = 25;                                    // Set the SMTP port
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = "order@khettohome.com";                // SMTP username
$mail->Password = "admin@@987";                  // SMTP password
//$mail->SMTPSecure = "ssl";                            // Enable encryption, 'ssl' also accepted

$mail->From = 'order@khettohome.com';

$mail->FromName = 'Grocery';
$mail->AddAddress($email);  // Add a recipient

$mail->IsHTML(true); 
	
   //send mail to customer 
	$sendmail_customer = $mail->AddAddress($email,$name);
	$mail->Subject = "Order details on khettohome.com"; 
	$mail->Body = $message;     
	$mail->Send(); 
	$mail->ClearAddresses(); 		
	
   //send mail to admin
	$sendmail_admin = $mail->AddAddress("order@khettohome.com","Grocery"); 
	$mail->Subject = "A new order from khettohome.com";
	$mail->Body = $message1; 
	$mail->Send(); 
		
		  echo "<script>alert('Your order has been submitted successfully!')</script>";
		  echo "<script>window.location='http://khettohome.com/clear-cart.php'</script>";
	}else{
		 echo "<script>window.location='/'</script>";
		 }
 
?>	