<?php 
 include('admin/config.php');
 $sessionID = session_id();
 //get session id data exists or not
 $sl_data_Q = mysqli_query($con,"select * from `register` where sessionId='$sessionID'");
 include 'inc/header.php'; 
?>
        <!-- Start Slider Area -->
        <div class="intro-area">
           <div class="main-overly"></div>
            <div class="intro-carousel">
                <div class="intro-content">
                    <div class="slider-images">
                        <img src="img/slider/h1.jpg" alt="">
                    </div>
                    <div class="slider-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- layer 1 -->
                                            <div class="layer-1-2">
                                                <h1 class="title2">Prime Immigration LLP <br> <class="color">Way to Future</span></h1>
                                            </div>
                                            <!-- layer 3 -->
                                            <div class="layer-1-3">
                                                <a href="check-your-eligibility.php" class="ready-btn left-btn" >Check your Eligibilty</a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-content">
                    <div class="slider-images">
                        <img src="img/slider/h2.jpg" alt="">
                    </div>
                    <div class="slider-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- layer 1 -->
                                            <div class="layer-1-2">
                                                <h1 class="title2">Poineer in Craft of Immigration<br> Prime Immigration LLP.</h1>
                                            </div>
                                            
                                            <!-- layer 3 -->
                                            <div class="layer-1-3">
                                                <a href="check-your-eligibility.php" class="ready-btn left-btn" >Check your Eligibilty</a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            


        <div class="intro-content">
                    <div class="slider-images">
                        <img src="img/slider/s2.jpg" alt="">
                    </div>
                    <div class="slider-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- layer 1 -->
                                            <div class="layer-1-2">
                                                <h1 class="title2"></h1>
                                            </div>
                                            
                                            <!-- layer 3 -->
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

 <div class="intro-content">
                    <div class="slider-images">
                        <img src="img/slider/h3.jpg" alt="">
                    </div>
                    <div class="slider-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- layer 1 -->
                                            <div class="layer-1-2">
                                                <h1 class="title2">Poineer in Craft of Immigration<br> Prime Immigration LLP.</h1>
                                            </div>
                                            
                                            <!-- layer 3 -->
                                            <div class="layer-1-3">
                                                <a href="check-your-eligibility.php" class="ready-btn left-btn" >Check your Eligibilty</a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- End Slider Area -->
        <!-- Welcome service area start -->
        <div class="services-area bg-color area-padding">
            <div class="container">
               <div class="row">

					<div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                        <h3>Greetings from <span class="color">Prime Immigration LLP !</span></h3> <p class="hidden-sm">Prime Immigration LLP is one of the most seasoned and renowned Immigration brands globally with a successful experience, in providing guidance and processing of Immigrant and non-Immigrant visa applications. We service individuals, families, and corporates.</p>
						</div>
					</div>
				</div>
               <!-- Start project Area -->
                <div class="project-area bg-color-2">
                    <div class="container">
                        <div class="row">
                            <div class="project-carousel">
                                <!-- single-awesome-project start -->
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    
                                        <div class="awesome-img">
                                            <a href="#">
                                                <img src="img/project/1.jpg" alt="" />
                                            </a>
                                            
                                        </div>
                                        <div class="project-dec">
                                            <h4>Highly experienced team of professionals</h4>
                                        </div>
                                    
                                </div>
                                 <div class="col-md-4 col-sm-4 col-xs-12">
                                    
                                        <div class="awesome-img">
                                            <a href="#">
                                                <img src="img/project/2.jpg" alt="" />
                                            </a>
                                            
                                        </div>
                                        <div class="project-dec">
                                            <h4>The highest visa success rate in the industry</h4>
                                        </div>
                                    
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    
                                        <div class="awesome-img">
                                            <a href="#">
                                                <img src="img/project/3.jpg" alt="" />
                                            </a>
                                            
                                        </div>
                                        <div class="project-dec">
                                            <h4>Free visa consultation for your application</h4>
                                        </div>
                                    
                                </div>
                                
                                
                               
                                    <!-- single-awesome-project end -->
                                </div>
                            </div>      
                        </div>  
                    </div>
                    <!-- End main content -->
                </div>
                <!-- End project Area -->
            </div>
        </div>
        <!-- Welcome service area End -->
        <!-- about-area start -->
        <div class="about-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-image">
                            <img src="img/about/ab.jpg" alt="">
                            
                        </div>
                    </div>
                    <!-- column end -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-content">
                            <h4>ABOUT US</h4>
                            <p class="hidden-sm">Prime Immigration LLP is experts at handling visa and immigration applications for various countries. Our past experience of successful visa applications with hundreds of candidates gives us the power to give you insightful recommendations that will make sure you get your visa processed easily. We believe every application has its own merit and every individual must be guided properly for the best-case scenario according to their interest and requirements. We work hand in hand with you to turn your dreams into reality.</p>
                            <div class="about-details">
                                <div class="single-about">
                                    <a href="#"><i class="icon icon-chart-bars"></i></a>
                                    <div class="icon-text">
                                        <h5>Team of Professionals</h5>
                                        <p>Our Technical Expertise Across The Market</p>
                                    </div>
                                </div>
                                <div class="single-about">
                                    <a href="#"><i class="icon icon-license"></i></a>
                                    <div class="icon-text">
                                        <h5>Most Successful Immigration Consultants</h5>
                                        <p>We’re Trusted By More Than 3506 Clients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about-area end -->
        <!-- Start offer -->
        
        <!-- End offer -->
        <!-- Start Service area -->
		<div class="services-area bg-color area-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
							<h3>What We <span class="color">Offer You</span></h3>
						    <p>What we are offering to customers</p>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="services-all">
                    	<!-- Start services -->
						<div class="col-md-4 col-sm-6 col-xs-12">
						   <div class="single-services">
								<div class="service-inner">
								    <a class="service-icon" href="#">
                                        <i class="flaticon-presentation-17"></i>
                                    </a>
                                    <div class="service-content">
                                        <h4><a href="#">Job Assistance</a></h4>
                                        <p>The world today has become a small place. Everyone has a lot of opportunities to work in different countries during their lifetime. <br><br><br></p>
                                    </div>
								</div>
							</div>
						</div>
					    <div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-services">
							    <div class="service-inner">
                                    <a class="service-icon" href="#">
                                        <i class="flaticon-notes"></i>
                                    </a>
                                    <div class="service-content">
                                        <h4><a href="#">Business Visa</a></h4>
                                        <p>The world has now become a small place. Global trade is now a reality in every corner of the world. You witness and buy products everyday which are manufactured and traded by people of different nationalities.</p>
                                    </div>
								</div>
							</div>
						</div>
						<!-- Start services -->
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-services">
                                <div class="service-inner">
                                    <a class="service-icon" href="#">
                                        <i class="flaticon-graph-3"></i>
                                       </a>
                                    <div class="service-content">
                                        <h4><a href="#">Student Visa</a></h4>
                                        <p>Studying abroad is one decision in a student’s life that can change their life forever. Millions of students go to different countries every year to study for different courses.<br><br></p>
                                    </div>
								</div>
							</div>
						</div>
						<!-- Start services -->
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-services">
							    <div class="service-inner">
                                    <a class="service-icon" href="#">
                                       <i class="flaticon-graph"></i>
                                    </a>
                                    <div class="service-content">
                                        <h4><a href="#">Tourist Visa Service</a></h4>
                                        <p>We proudly present ourselves as tourist visa expert Consultants. Over the past few years of dealing with tourist visa cases for more than 20 countries, we have perfected the art of making and filing a winning visa application.</p>
                                    </div>
								</div>
							</div>
						</div>
						<!-- Start services -->
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-services">
							    <div class="service-inner">
                                    <a class="service-icon" href="#">
                                       <i class="flaticon-barcode-1"></i>
                                    </a>
                                    <div class="service-content">
                                        <h4><a href="#">Canada PR</a></h4>
                                        <p>If you have been planning to migrate to Canada and it has been one of your dreams from some time, you have come to the right place. <br><br><br></p>
                                    </div>
								</div>
							</div>
						</div>
						<!-- Start services -->
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-services">
							    <div class="service-inner">
                                    <a class="service-icon" href="#">
                                       <i class="flaticon-pie-chart-1"></i>
                                    </a>
                                    <div class="service-content">
                                        <h4><a href="#">Counselling Service</a></h4>
                                        <p>Whenever you plan to study or migrate abroad, it is the biggest decision of your life. We must take all measures possible to make sure that we make the right decision for our future.<br><br></p>
                                    </div>
								</div>
							</div>
						</div>
                        <div class="col-md-12 text-center">
                        	<a class="load-more-btn" href="services.php">More services</a>
                        </div>
                    </div>
				</div>
			</div>
		</div>
		<!-- End Service area -->
        <!-- Start Counter Area -->
        <div class="counter-area fix">
            <div class="container-full">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="fun-title">
                            <h3>We pride ourselves on our fast, efficient and friendly service. We work hard to ensure that your system is installed with as little disruption to your home or business as possible.</h3>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="fun-content">
                            <div class="fun_text">
                                <i class="icon icon-smile"></i>
                                <span class="counter">3506</span>
                                <h5>Happy Customer</h5>
                            </div>
                            <!-- fun_text  -->
                            <div class="fun_text">
                                <i class="icon icon-license"></i>
                                <span class="counter">10050</span>
                                <h5>Complete project</h5>
                            </div>

                        </div>
					</div>
                </div>
                <!-- end Row -->
            </div>
        </div>
        <!-- End Counter Area -->
       
        
        
        <!-- Start Add area -->
        <div class="add-area area-padding parallax-bg" data-stellar-background-ratio="0.6">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="add-content">
                            <h4>Prime Immigration LLP </h4>
                            <br><br><br><br>
                            <div class="add-contact">
                                <span class="call-us"><i class="icon icon-phone-handset"></i>Toll free : +91 8178-7880-54,91+01146541655</span>
                                <span class="call-us mail-us"><i class="icon icon-envelope"></i>Mail us : info@primeimmigrations.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Add area -->
        <!-- Start Blog area -->
        <!-- Start FAQ area -->
        <div class="faq-area bg-color-2 area-padding">
            <div class="container">
                <div class="row">
                    <!-- Start Column Start -->
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="company-faq">
                            <div class="sub-headline">
                                <h4>Why Prime Immigration LLP</h4>
                            </div>
                            <div class="faq-full">
                                <div class="faq-details">
                                    <div class="panel-group" id="accordion">
                                        <!-- Panel Default -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="check-title">
                                                    <a data-toggle="collapse" class="active" data-parent="#accordion" href="#check1">
                                                        <span class="acc-icons"></span>We promise to deeply research your interests
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="check1" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <p>
                                                        
                                                    </p>        
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Panel Default -->
                                        <!-- Panel Default -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="check-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#check2">
                                                        <span class="acc-icons"></span>We advise you on the best possible options
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="check2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>
                                                       
                                                    </p>                                        
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Panel Default -->
                                        <!-- Panel Default -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="check-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#check3">
                                                        <span class="acc-icons"></span>We are open about all policies and procedures and explain them in the first meeting
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="check3" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                    <p>
                                                        
                                                    </p>    
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Panel Default -->  
                                        <!-- Panel Default -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="check-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#check4">
                                                        <span class="acc-icons"></span>Student visa and migration visa consultancy
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="check4" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                    <p>
                                                       
                                                    </p>    
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Panel Default -->
                                        <!-- Panel Default -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="check-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#check5">
                                                        <span class="acc-icons"></span>Trusted professionals with years of experience
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="check5" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>
                                                        
                                                    </p>                                        
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Panel Default -->                                      
                                    </div>
                                </div>
                                <!-- End FAQ -->
                            </div>
                        </div>
                    </div>
                    <!-- End Column -->
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="faq-content">
                            <h4>Get in Touch With Us</h4>
                            <div class="faq-quote">
                                <div class="row">
                                    <form method="get" action="mailcode.php" class="contact-form">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                                            
                                            <input type="email" class="email form-control" id="email" name="email" placeholder="Email" required data-error="Please enter your email">
                                            
                                            <input type="text" class="email form-control" id="mobile" name="mobile" placeholder="(+1) Mobile Number" required data-error="Please enter your mobile number with country code">
                                            
                                            <input type="text" id="msg_subject" name="msg_subject" class="form-control" placeholder="Subject" required="" data-error="Please enter your message subject">
                                            
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <textarea id="message" name="mess" rows="7" placeholder="Message" class="form-control" required data-error="Write your message"></textarea>
                                            
                                            <button type="submit" id="submit" class="quote-btn" name="SubmitForm">Submit</button>
                                            
                                        </div>   
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Column -->
                </div>
            </div>
        </div>

        <!-- End FAQ area -->
        <!-- End Blog area -->
<?php include 'inc/footer.php'; ?>

<style>
.mb_floaticon {
    position: fixed;
    right: 15px;
    bottom: 0;
    z-index: 99;
}
.chat_floaticon {
    position: fixed;
    right: 15px;
    bottom: 0;
    z-index: 99;
}
</style>

<script>
function myOpenFunction() {
  var x = document.getElementById("chatpanel");
  if (x.style.display === "none") {
    x.style.display = "block";

  } else {
    x.style.display = "none";
  }
  document.getElementById("chatbtn").style.display = "none"; 
}
//close function
function myCloseFunction() {
    document.getElementById("chatbtn").style.display = "block"; 
    document.getElementById("chatpanel").style.display = "none";
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->

function submitData(){
  var chat1st = document.getElementsByClassName('messagefst')[0].value;
  var chat2nd = document.getElementsByClassName('messagecode')[0].value;
  const input = document.querySelector("input#test-input");
  const inputCode = document.querySelector("input#test-code");
  
    if(chat2nd==''){
	  inputCode.classList.add("apply-shake");  
	  setTimeout(function(){
	  inputCode.classList.remove("apply-shake");
	  },2000);
	}else if(chat1st==''){
	  input.classList.add("apply-shake");
	  setTimeout(function(){
	  input.classList.remove("apply-shake");
	  },2000);
	}else{  
	    var newid = document.getElementById('newid').value; 
		document.getElementsByClassName('messagefst')[0].value='';
		if(chat2nd==0)myData =  'mess='+chat1st+'&action='+newid+'&userId=<?php echo $sessionID?>'; 
		 else myData =  'mess='+chat2nd+' '+chat1st+'&action='+newid+'&userId=<?php echo $sessionID?>'; 
       jQuery.ajax({
			type: "POST", // HTTP method POST or GET
			url: "chat-with-us.php", //Where to make Ajax calls
		dataType:"text", // Data type, HTML, json etc.
		data:myData, //Form variables
	success:function(response){
	 //alert(response);
	if(response==1){
	  document.getElementsByClassName('introself')[0].innerHTML='';
	  document.getElementsByClassName('introself')[0].innerHTML='<input type="hidden" id="newid " value="0" readonly="" /><input type="text" placeholder="Enter Message Here" class="form-control messagefst" id="test-input" style="border-top: 0;border-left: 0;  border-right: 0;border-radius: 0;">';
	  window.location='index.php';
	}else{
	document.getElementsByClassName('message')[0].innerHTML=response; 
	chatContainer.scrollTop = chatContainer.scrollHeight;
 }
	
			//reg("#responds").append(response); 
		   //$("#messageWTxt").html('<font color="#222">Please share OTP '+response+' to seller for confirmation the work finished.</font>');
		},
		error:function (xhr, ajaxOptions, thrownError){
			reg("#submitbtn").show(); //show submit button
				reg("#LoadingImage").hide(); //hide loading image
				alert(thrownError);
			 }
			});
	
	}
}
</script>
<script src="js/mk-jquery-min.js"></script>


<style>
@import url("https://fonts.googleapis.com/css?family=Red+Hat+Display:400,500,900&display=swap");

::-webkit-scrollbar {
    width: 10px;
    background-color:#f4faff;
}
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px #673AB7;
}
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px #2196F3;
}

.chat {
    position: relative;
    flex-direction: column;
    justify-content: space-between;
    width: 350px;
    height: 200px;
    z-index: 2;
    box-sizing: border-box;
    border-radius: 1rem;
    padding: 10px;
    /*overflow-y: scroll;*/
	overflow-y: auto;
}

.chat .parker{
	box-sizing: border-box;
    padding: 5px 20px 20px 10px;
    margin: 1rem 1rem 1rem auto;
    background: #0054a6;
    border-radius: 1.125rem 1.125rem 0 1.125rem;
    min-height: 2.25rem;
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
    text-align: right;
    box-shadow: 0 0 2rem rgba(0, 0, 0, 0.075), 0rem 1rem 1rem -1rem rgba(0, 0, 0, 0.1);
    overflow: hidden;
	height:auto;
	color:#FFFFFF;
}

.chat .stark{
    box-sizing: border-box;
    padding: 8px 10px 10px 15px;
    margin: 1rem;
    background: #FFF;
    border-radius: 1.125rem 1.125rem 1.125rem 0;
    min-height: 2.25rem;
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
    max-width: 66%;
    box-shadow: 0 0 2rem rgba(0, 0, 0, 0.075), 0rem 1rem 1rem -1rem rgba(0, 0, 0, 0.1);
	overflow: hidden;
	height:auto;
}

@media(max-width:460px){
 .chat{width:100%}
}
@media(max-width:320px){
 .chat{width:100%}
}

@-webkit-keyframes typing {
  0%, 75%, 100% {
    transform: translate(0, 0.25rem) scale(0.9);
    opacity: 0.5;
  }
  25% {
    transform: translate(0, -0.25rem) scale(1);
    opacity: 1;
  }
}

@keyframes typing {
  0%, 75%, 100% {
    transform: translate(0, 0.25rem) scale(0.9);
    opacity: 0.5;
  }
  25% {
    transform: translate(0, -0.25rem) scale(1);
    opacity: 1;
  }
}
</style>
<style>
 /* Standard syntax */
@keyframes shake {
  10%, 90% {
    transform: translate3d(-1px, 0, 0);
  }

  20%, 80% {
    transform: translate3d(2px, 0, 0);
  }

  30%, 50%, 70% {
    transform: translate3d(-4px, 0, 0);
  }

  40%, 60% {
    transform: translate3d(4px, 0, 0);
  }
}

.apply-shake {
    animation: shake 0.82s cubic-bezier(.36,.07,.19,.97) both;
}

</style>

<div id="chatpanel" class="chat_floaticon" style="display:none">
 <div class="row" style="background:#fff;border-top-left-radius: 15px;border-top-right-radius: 15px;">
 <img src="chat.png" style="cursor:pointer; width:100%" onclick="myCloseFunction()">
 <div style="padding:15px">
 <div class="message"></div>
 <?php
  if(mysqli_num_rows($sl_data_Q)>0){
  echo '<input type="hidden" id="test-code" class="messagecode" value="0" readonly="" /><input type="hidden" id="newid" value="0" readonly="" /><input type="text" placeholder="Enter Message Here" class="form-control messagefst" id="test-input" style="border-top: 0;border-left: 0;  border-right: 0;border-radius: 0;">';
 ?>
<script>
function showAlert() {
        var newid = 2; 
	    myData =  'action='+newid+'&userId=<?php echo $sessionID?>'; 
        jQuery.ajax({
			type: "POST", // HTTP method POST or GET
			url: "chat-with-us.php", //Where to make Ajax calls
		dataType:"text", // Data type, HTML, json etc.
		data:myData, //Form variables
	success:function(response){
	  document.getElementsByClassName('message')[0].innerHTML=response; 
	  chatContainer.scrollTop = chatContainer.scrollHeight;
    },
		error:function (xhr, ajaxOptions, thrownError){
			reg("#submitbtn").show(); //show submit button
				reg("#LoadingImage").hide(); //hide loading image
				alert(thrownError);
			 }
			});
  
}

setInterval(showAlert, 5000);
</script>
 <?php 
 }else{?>
  <div class="introself">
  <b>Please indroduce yourself:</b>
  <input type="hidden" id="newid" value="1" readonly="" />
  <div style="display: flex;">
  <input type="text" name="code" placeholder="+91" class="form-control messagecode" autocomplete="off" id="test-code" style="border-top: 0;border-left: 0;  border-right: 0;border-radius: 0;width: 50px;"/>
  <input type="tel" placeholder="Enter Mobile No" name="emailId" class="form-control messagefst" autocomplete="off" id="test-input" style="border-top: 0;border-left: 0;  border-right: 0;border-radius: 0;">
  </div>
  </div>
 <?php }?>
  <a href="javascript:avoid(0)" onClick="submitData()" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('btnsubmit','','btnsubmit_hover.png',1)">
   <img src="btnsubmit.png" name="btnsubmit" width="70" height="69" style="cursor:pointer;float:right;padding:10px" border="0" id="btnsubmit" />
  </a>
  <p>&nbsp;</p>
</div> 
</div>
</div>
		
        <div class="mb_floaticon" id="chatbtn">
		  <img width="250" height="250" onclick="myOpenFunction();audio.play()" style="cursor:pointer" src="chat-with-us.png" data-ll-status="loaded" class="entered lazyloaded">
		</div>
        <script>
            const audio = new Audio();
            audio.src = "img/beep.mp3";
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.js"  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- <script type="text/javascript">
  $(document).ready(function() {
    $("#test-input").emojioneArea();
  });
</script> -->
<script type="text/javascript">
  $(document).ready(function() {
    $("#test-input").emojioneArea();
  });
</script>
