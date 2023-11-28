<?php 
if(isset($_POST['submitNow'])){
    $to_email="info@primeimmigrations.com,team@primeimmigrations.com";
    $email_subject="Enquiry From Primeimmigrations.com For Assessment Form";
    $email = $_POST['email'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile_no'];
	$pcountry = $_POST['pcountry'];
	
    $message = "<b>Assessment Form Details:-</b> <br><br>Name: ".$name."<br>Email ID: ".$email."<br>Phone Number: ".$mobile."<br>Date of Birth: ".$_POST['dob']."<br>Highest Qualification: ".$_POST['qualification']."<br>Current designation: ".$_POST['designation']."<br>Current CTC: ".$_POST['current_ctc']."<br>Total experience: ".$_POST['tot_exp']."<br>Process Country: ".$_POST['pcountry']."<br>Marrital Status: ".$_POST['marital_sts'];
    
    $headers="From: $email" . "\r\n"."Reply-To: $email"."\r\n".'X-Mailer: PHP/'. phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    
    mail($to_email,$email_subject,$message,$headers);
    
    //for customer
    
    $message1 = "<b>Assessment Form Details:-</b> <br><br>Name: ".$name."<br>Email ID: ".$email."<br>Phone Number: ".$mobile."<br>Date of Birth: ".$_POST['dob']."<br>Highest Qualification: ".$_POST['qualification']."<br>Current designation: ".$_POST['designation']."<br>Current CTC: ".$_POST['current_ctc']."<br>Total experience: ".$_POST['tot_exp']."<br>Process Country: ".$_POST['pcountry']."<br>Marrital Status: ".$_POST['marital_sts']."<br><br><br><br><b>Terms & Conditions Accepted By You As <a href='https://primeimmigrations.com/terms-conditions.php'>Here</a></b><br><br>Thanks & Regards<br>www.primeimmigrations.com";
    
    $headers1="From: $to_email" . "\r\n"."Reply-To: $to_email"."\r\n".'X-Mailer: PHP/'. phpversion();
    $headers1 .= "MIME-Version: 1.0\r\n";
    $headers1 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    
    mail($email,$email_subject,$message1,$headers1);
   
   echo "<script>alert('Assessment Form has been submitted successfully')</script>";
   echo "<script>window.location='/'</script>";
}
include 'inc/header.php'; ?>
<div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb">
                    <div class="bread-inner">
                        <div class="section-headline white-headline">
                            <h2>Assessment  <span class="color">Form</span></h2>
                        </div>
                        <ul class="breadcrumb-bg">
                             <li class="home-bread"><a href="index.php">Home</a></li>
                            <li>Assessment Form</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="team-area bg-color pd-35">
    <div class="container">
        <!-- section head -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3></span> Assessment  <span class="color">Form</h3>
                </div>
            </div>
        </div>
        <div class="row">
            
    <div class='text-justify innerpage-text'>
	<h5 align="center">Self/ Primary Applicant Details:</h5>

    <form method="post">
        <table class="datatable points-table-form">
            <tbody>
                <tr>
                    <td class="td"><span>Name</span><br />
                    <input class="txtb form-control" name="name" type="text" required />
                    </td>
                </tr>
                <tr>
                    <td class="td"><span>Email ID</span><br />
                    <input class="txtb form-control" name="email" type="text" required />
                    </td>
                </tr>
				<tr>
                    <td class="td"><span>Phone Number.</span><br />
                    <input class="txtb form-control" name="mobile_no" type="text" required />
                    </td>
                </tr>
				<tr>
                    <td class="td"><span>Date of Birth</span><br />
                    <input class="txtb form-control" name="dob" type="date" required />
                    <br />
                    </td>
                </tr>
                <tr>
                    <td class="td"><span>Highest Qualification</span><br />
                    <input class="txtb form-control" name="qualification" type="text" required />
                    </td>
                </tr>
				<tr>
                    <td class="td"><span>Current Designation</span><br />
                    <input class="txtb form-control" name="designation" type="text" required />
                    </td>
                </tr>
				<tr>
                    <td class="td"><span>Current CTC</span><br />
                    <input class="txtb form-control" name="current_ctc" type="text" required />
                    </td>
                </tr>
				<tr>
                    <td class="td"><span>Total Experience</span><br />
                    <input class="txtb form-control" name="tot_exp" type="text" required />
                    </td>
                </tr>
				<tr>
                    <td class="td"><span>Process Country</span><br />
                    <input class="txtb form-control" name="pcountry" type="text" required />
                    </td>
                </tr>
				<tr>
                    <td class="td"><span>Marital Status</span><br />
                    <input class="txtb form-control" name="marital_sts" type="text" required />
                    </td>
                </tr>
                <tr>
                    <td class="td">
					<input type="checkbox" required/>&nbsp;&nbsp;&nbsp;&nbsp;<a href="terms-conditions.php" target="_blank"> Terms &amp; Conditions</a></td>
                </tr>
				<tr>
                    <td class="td">
					<input class="button" name="submitNow" id="btn_show" type="submit" value="Submit" /></td>
                </tr>
                <tr>
                    <td class="td">
                        <div class="success-msg"></div>
                    </td>
                </tr>
            </tbody>
        </table>    
    </form>
    

                
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'inc/footer.php'; ?>