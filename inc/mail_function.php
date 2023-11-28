<?php
function mail_fire($data){

    $to_email="info@primeimmigrations.com";
    $email_subject=$data['subject'];
    $email = $data['email'];
    $name = $data['name'];
    $subject = $data['subject'];
    $message = $data['message'];
    $headers="From: $email" . "\r\n"."Reply-To: $email"."\r\n".'X-Mailer: PHP/'. phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $message = '<table align="left">
                  <tr>
                  <td colspan="2"><img src="https://www.primeimmigrations.com/img/logo/logo.png"  alt="" style="width: 162px;"></td>
                  </tr>
                  <tr><td colspan="2">Hi, ' . $name . '</td></tr>
                  <tr><td colspan="2">Prime Immigration LLP provides the most professional visa Consultancy Services to all our customers. Unlike other businesses, we deal with decisions which can change people’s lives and we respect this fact and take all measures to outperform our expectations. One right decision can change your life forever and we help you find that right decision. We make the complicated process of migrating abroad easy for you by breaking it down to small easy steps...<a href="https://www.primeimmigrations.com/about.php">Read more</a></td></tr>
                  <tr>
                    <td colspan="2">Customer Enquiry Details:</td>
                  </tr>
                    <tr>
                      <th  style="width: 9%;">Name:</th>
                      <td>' . $name . '</td>
                    </tr>
                    <tr>
                      <th  style="width: 9%;">Email:</th>
                      <td>' . $email . '</td>
                    </tr>
                    <tr>
                      <th  style="width: 9%;">Subject:</th>
                      <td>' . $subject . '</td>
                    </tr>
                    <tr>
                      <th  style="width: 9%;">Message:</th>
                      <td>' . $message . '</td>
                    </tr>
                    <tr>
                    <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                    <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                    <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="2"><strong>Company Details</strong></td>
                    </tr>
                    <tr>
                      <td colspan="2">WOLK - A CoWorking Space Bakshi House 40-41 Chiranjiv Tower, Nehru Place New Delhi, Delhi 110019</td>
                    </tr>
                    <tr>
                    <td colspan="2"><a href="tel:8178788054">+91 8178788054</a> | <a href="tel:9891718870">+91 9891718870</a></td>
                    </tr>
                    <tr>
                    <td colspan="2">' . $to_email . '</td>
                    </tr>
                    ';
     $secretKey="6LfXb3IaAAAAAMNIu4VES3eTNzZs4d2rwdBzoG6l";
    $responseKey=$_POST['g-recaptcha-response'];
    $UserIP=$_SERVER['REMOTE_ADDR'];
    $url="https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$UserIP";
    $response=file_get_contents($url);
    $response=json_decode($response);

    if ($response->success) {
            
      mail($to_email,$email_subject,$message,$headers);
      $name = ucwords($name);
      echo ucwords("<span style='color: #0054a6;'>".$name."! "."Thank you for getting in touch! One of our executive will get back to you shortly.");
      
    }     
    else
    {
      echo"Invalid captcha";
    }
}
function success_mail(){
 
}  
  
function check_eligibility_mail_fire($data){

    $to_email="info@primeimmigrations.com";
    $email = $data['Email'];
    $email_subject = 'Candidate eligibility';
    $message = $data['message'];

    $name = $data['Name'];
    $Email = $data['Email'];
    $City = $data['City'];
    $age = $data['age'];
    $speak = $data['speak'];
    $listen = $data['listen'];
    $read = $data['read'];
    $write = $data['write'];
    $qualification = $data['qualification'];
    $experience = $data['experience'];
    $employment = $data['employment'];
    $adaptability = $data['adaptability'];
    $age_text = $data['age_text'];
    $english_text = $data['english_text'];
    $speak_text = $data['speak_text'];
    $listen_text = $data['listen_text'];
    $read_text = $data['read_text'];
    $write_text = $data['write_text'];
    $qualification_text = $data['qualification_text'];
    $experience_text = $data['experience_text'];
    $employment_text = $data['employment_text'];
    $adaptability_text = $data['adaptability_text'];

    $headers="From: $email" . "\r\n"."Reply-To: $email"."\r\n".'X-Mailer: PHP/'. phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $message = '<table align="left">
                  <tr>
                  <td colspan="2"><img src="https://www.primeimmigrations.com/img/logo/logo.png"  alt="" style="width: 162px;"></td>
                  </tr>
                  <tr><td colspan="2">Hi, ' . $name . '</td></tr>
                  <tr>
                    <td colspan="2">Candidate Details:</td>
                  </tr>
                  <tr>
                      <th  style="width: 9%;">Name:</th>
                      <td>' . $name . '</td>
                    </tr>
                    <tr>
                      <th  style="width: 9%;">Email:</th>
                      <td>' . $Email . '</td>
                    </tr>
                    <tr>
                      <th  style="width: 9%;">City:</th>
                      <td>' . $City . '</td>
                    </tr>
                    <tr>
                      <th  style="width: 9%;">age:</th>
                      <td>' . $age . '</td>
                    </tr>
                    <tr>
                      <th  style="width: 9%;">speak:</th>
                      <td>' . $speak . '</td>
                    </tr>
                    <tr>
                      <th  style="width: 9%;">listen:</th>
                      <td>' . $listen . '</td>
                    </tr>
                    <tr>
                      <th  style="width: 9%;">read:</th>
                      <td>' . $read . '</td>
                    </tr>
                    <tr>
                      <th  style="width: 9%;">write:</th>
                      <td>' . $write . '</td>
                    </tr>
                    <tr>
                      <th  style="width: 9%;">Qualification:</th>
                      <td>' . $qualification . '</td>
                    </tr>
                    <tr>
                      <th  style="width: 9%;">Experience:</th>
                      <td>' . $experience . '</td>
                    </tr>
                    <tr>
                      <th  style="width: 9%;">Employment:</th>
                      <td>' . $employment . '</td>
                    </tr>
                    <tr>
                      <th  style="width: 9%;">Edaptability:</th>
                      <td>' . $adaptability . '</td>
                    </tr>
                    <tr>
                      <th  style="width: 9%;">Age text:</th>
                      <td>' . $age_text . '</td>
                    </tr>
                    <tr>
                      <th  style="width: 9%;">English text:</th>
                      <td>' . $english_text . '</td>
                    </tr>
                    <tr>
                      <th  style="width: 9%;">Speak text:</th>
                      <td>' . $speak_text . '</td>
                    </tr>
                    <tr>
                      <th  style="width: 9%;">Qualification text:</th>
                      <td>' . $qualification_text . '</td>
                    </tr>
                    <tr>
                      <th  style="width: 9%;">Experience text:</th>
                      <td>' . $experience_text . '</td>
                    </tr>
                    <tr>
                      <th  style="width: 9%;">Employment text:</th>
                      <td>' . $employment_text . '</td>
                    </tr>
                    <tr>
                      <th  style="width: 9%;">Adaptability text:</th>
                      <td>' . $adaptability_text . '</td>
                    </tr>
                    <tr>
                    <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                    <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                    <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="2"><strong>Company Details</strong></td>
                    </tr>
                    <tr>
                      <td colspan="2">WOLK - A CoWorking Space Bakshi House 40-41 Chiranjiv Tower, Nehru Place New Delhi, Delhi 110019</td>
                    </tr>
                    <tr>
                    <td colspan="2"><a href="tel:8178788054">+91 8178788054</a> | <a href="tel:9891718870">+91 9891718870</a></td>
                    </tr>
                    <tr>
                    <td colspan="2">' . $to_email . '</td>
                    </tr>
                    ';
     $secretKey="6LfXb3IaAAAAAMNIu4VES3eTNzZs4d2rwdBzoG6l";
    $responseKey=$data['recaptcha'];
    $UserIP=$_SERVER['REMOTE_ADDR'];
    $url="https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$UserIP";
    $response=file_get_contents($url);
    $response=json_decode($response);

    if ($response->success) {
            
      mail($to_email,$email_subject,$message,$headers);
      $name = ucwords($name);
      $msg = ucwords("<span style='color: #0054a6;'>".$name."! "."Thank you for getting in touch! One of our executive will get back to you shortly.");
      echo json_encode(array('success' => $msg));
      
    }     
    else
    {
      echo"Invalid captcha";
    }
}
?>