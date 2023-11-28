<html class="no-js" lang="en">
<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>
			<?php
			$title = basename(pathinfo($_SERVER['PHP_SELF'])['basename'],".php");
			if ($title == 'about')
			  {
			  	echo 'About us:: Prime Immigration LLP';
			  }elseif ($title == 'solution') {
			  	echo 'Solution:: Prime Immigration LLP';
			  }elseif ($title == 'vision-and-mission') {
			  	echo 'Vision and Mission:: Prime Immigration LLP';
			  }elseif ($title == 'services') {
			  	echo 'Services:: Prime Immigration LLP';
			  }elseif ($title == 'contact-us') {
			  	echo 'Contact Us:: Prime Immigration LLP';
			  }
			else 
				{
					echo "Home :: Prime Immigration LLP";
				} ?>				
		</title>
		<meta name="description" content="Prime Immigration is the best immigration consultants in India offering pr skilled visa, job visa, study visa, business and investor visa.">
		<meta name="keywords" content="visa consultants, australia immigration consultants, canada immigration consultant in delhi, best immigration consultant in india, global immigration consultant, visa immigration consultants, tourist visa consultants">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon -->		
		<link rel="shortcut icon" type="image/x-icon" href="img/logo/favicon.png">

		<!-- all css here -->

		<!-- bootstrap v3.3.6 css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- owl.carousel css -->
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.transitions.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- font-awesome css -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/icon.css">
		<link rel="stylesheet" href="css/flaticon.css">
		<!-- magnific css -->
        <link rel="stylesheet" href="css/magnific.min.css">
		<!-- venobox css -->
		<link rel="stylesheet" href="css/venobox.css">
		<!-- style css -->
		<link rel="stylesheet" href="style.css">
		<!-- responsive css -->
		<link rel="stylesheet" href="css/responsive.css">

		<!-- modernizr css -->
		<script src="js/vendor/modernizr-2.8.3.min.js"></script>
		<style>
			.quadrat {
  -webkit-animation: NAME-YOUR-ANIMATION 1s infinite;  /* Safari 4+ */
  -moz-animation: NAME-YOUR-ANIMATION 1s infinite;  /* Fx 5+ */
  -o-animation: NAME-YOUR-ANIMATION 1s infinite;  /* Opera 12+ */
  animation: NAME-YOUR-ANIMATION 1s infinite;  /* IE 10+, Fx 29+ */
}

@-webkit-keyframes NAME-YOUR-ANIMATION {
  0%, 49% {
    background-color: #0054a6;
  }
  50%, 100% {
    background-color: #e50000;
  }
}
</style>
	</head>
		<body>

	
        <!-- <div id="preloader"></div> -->
        <header class="header-one">
            <!-- Start top bar -->
            <div class="topbar-area fix hidden-xs">
                <div class="container">
                    <div class="row">
                       <div class="col-md-3 col-sm-3">
                           <div class="topbar-left">
                                
                                <div class="top-social">
                                    <ul>
                                        
                                        <li><a href="https://www.instagram.com/primeimmigrationllp" target="_blank";><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="https://twitter.com/LlpPrime" target="_blank";><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://www.facebook.com/primeimmigrationllp" target="_blank";><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://www.linkedin.com/company/83283153/admin/" target="_blank";><i class="fa fa-linkedin"></i></a></li>

                                    </ul> 
                                </div>
							</div>
                        </div>
                        <div class=" col-md-9 col-sm-9">
                            <div class="topbar-right">
                                <ul>
                                    <li><a href="mailto:info@primeimmigrationllp.com"><i class="fa fa-envelope"></i> info@primeimmigrations.com</a></li>
                                    <li><a href="tel:8178788054"><i class="fa fa-phone"></i> +91 8178788054 | 01144462243 |</a></li>
                                     <li><a href="pay-now.php">Pay Now</a></li>
                                </ul>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End top bar -->
            <!-- header-area start -->
            <div id="sticker" class="header-area hidden-xs">
                <div class="container">
                    <div class="row">
                        <!-- logo start -->
                        <div class="col-md-2 col-sm-2">
                            <div class="logo">
                                <!-- Brand -->
                                <a class="navbar-brand logo-small page-scroll sticky-logo" href="index.php">
                                    <img src="img/logo/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- logo end -->
                        <div class="col-md-10 col-sm-10 header-right-area">
                            
                            <!-- mainmenu start -->
                            <nav class="navbar navbar-default">
                                <div class="collapse navbar-collapse" id="navbar-example">
                                    <div class="main-menu">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a class="pagess" href="index.php">Home</a>
												<!-- <ul class="sub-menu">
													<li><a href="index.php">Home 01</a></li>
													<li><a href="index-2.php">Home 02</a></li>
													<li><a href="index-3.php">Home 03</a></li>
													<li><a href="index-4.php">Home 04</a></li>
												</ul> -->
											</li>
											<li><a class="pagess" href="about.php">About us</a>
												
											</li>
											<li class="mega-menu"><a class="pagess" href="#"><b class="quadrat" style="color: #fff;padding: 5px;">Canada</b></a>
												<ul class="sub-menu mega-sub-menu">
													<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="permanent-resident-canada.php">Permanent Resident Canada</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="canada-immigration.php">Canada Immigration</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="how-to-immigrate-to-canada-from-india.php">How to Immigrate to Canada</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="canada-pr-point-system.php">Canada PR Point System</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="points-calculator.php">Canada Points Calculator</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="Canada-Immigration-Visa-Requirements.php">Requirements - Canada Immigration Visa</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="immigration-benefits-ca.php">Benefits of Canada Immigration</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="express-entry-comprehensive-ranking-system-criteria.php">Comprehensive Ranking System</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="application-process-and-waiting-period.php">Canada PR Process </a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="canada-pr-visa-faqs.php">Canada PR Visa FAQs</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="canada-express-entry.php">Canada Express Entry</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="canada-express-entry-process.php">Canada Express Entry Process</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="latest-express-entry-immigration-draws.php">Latest Draws Express Entry Program</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="express-entry-canada-job-bank.php">Express Entry - Canada Job Bank</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="express-entry-provincial-nomination.php">Express Entry - Provincial Nomination</a></li>

<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="express-entry-faqs.php">Express Entry - Frequently Asked Questions (FAQs)</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="canada-federal-skilled-workers-program-petition-process.php">Canada FSW Program Petition Process</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="canada-federal-skilled-worker-fsw-selection-criteria.php">FSW Selection Criteria – Point System</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="atlantic-immigration-pilot-program.php">Atlantic Immigration Pilot Program</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="express-entry-occupation-list.php">Occupation List of Canada </a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="nova-scotia-demand-pccupation-list.php">Nova Scotia In-Demand Occupation List</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="alberta-occupation-in-demand-list.php">Alberta Occupation in-Demand List</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="manitoba-occupation-in-demand-list.php">Manitoba Occupation in-Demand List</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="quebec-occupation-in-demand-list.php">Quebec Occupation in-Demand List</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="canada-pnp.php">Canada PNP- Skilled Workers</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="ontario-pnp.php">Ontario PNP</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="nova-scotia-provincial-nominee-program-skilled-professionals.php">Nova Scotia PNP</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="albertapnp.php">Alberta PNP</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="sinp-points-calculator.php">SINP Points Calculator </a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="saskatchewan-immigrant-nominee-program.php">Saskatchewan PNP</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="British-Columbia-Provincial-Nomination-Skilled-Professionals.php">British Columbia Provincial Nomination for Skilled Professionals</a></li>



<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="manitoba-provincial-nomination-skilled-professionals.php">Manitoba Provincial Nomination For Skilled Professionals</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="canada-pnp-draw.php">Latest Canada PNP Draw</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="canada-family-visa.php">Canada Family Visa</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="canada-spouse-visa.php">Canada Spouse Visa</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="canada-parents-visa.php">Canada Parents Visa</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="canada-business-visa.php">Canada Business Visa</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="self-employed-visa-canada.php">Self Employed Visa Canada</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="c11-visa-canada.php">C-11 Visa Canada</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="ca-entrepreneur-program.php">Canada Entrepreneur Program</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="britishcolumbia.php">British Columbia for Entrepreneur</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="saskatchewan-immigrant-nominee-program-sinp-businessmen.php">Saskatchewan Immigrant Nominee Program for Businessmen</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="manitoba-provincial-nominee-program-for-business.php">Manitoba Provincial Nominee Program for Business</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="provincial-nominee-programs-businessman-and-investors.php">Canada PNP - Businessmen and Investors</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="on-line-IELTS-coaching.php">On-line IELTS Coaching</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="minimum-ielts-score-for-canada-pr-visa.php">Minimum IELTS Score For Canada PR </a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="average-salary-in-canada.php">Average Salary in Canada</a></li>


<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="labour-market-impact-assessment.php">Labour Market Impact Assessment (LMIA)</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="express-entry-how-to-increase-your-chances-getting-selected-from-pool.php">How to increase your chances of getting selected from the pool!</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="authorized-representative-canada.php">Authorized Representative-Canada</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="canada-immigration-fraud-prevention-measures.php">Canada Immigration Fraud Prevention </a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="personal-branding.php">Personal Branding</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="canada-visit-visa.php">Canada Visit Visa</a></li>

<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="quebec-visa.php">Quebec Immigration</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="skilled-worker-program.php">Quebec Skilled Worker Program</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="Quebec-Immigration-Application-Process-Requirements.php">Quebec Immigration Application Process</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="how-about-quebec-skilled-worker-program.php">Quebec Counselling Tips</a></li>
<li><a style="padding:7px 5px;background: #f00 !important; color: #fff; line-height: 15px; border-radius: 5px; margin: 5px 2px; width: 140px;" href="check-you-eligibility.php" target="_blank" title="Check Your Eligibility">Check Your Eligibility</a></li>
<li><a style="padding:7px 5px;background: #f00 !important; color: #fff; line-height: 15px; border-radius: 5px; margin: 5px 2px; width: 155px;" href="authorized-representative-canada.php" target="_blank" title="RCIC Registered Agent">RCIC Registered Agent</a></li>
												</ul>
											</li>
											<li class="mega-menu"><a class="pagess" href="#"><b class="quadrat" style="color: #fff;padding: 5px;">Australia</b></a>
												<ul class="sub-menu mega-sub-menu">
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="australia-immigration.php">Australia Immigration</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="australia-skilled-independent-sub-class-189-immigration-visa.php">Australia Skilled Independent Visa 189</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="australia-skilled-nominated-subclass-190-immigration-visa.php">Australia Skilled Nominated Visa 190</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="skilled-work-regional-provisional-visa-491.php">Skilled Work Regional Visa 491</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="skilled-employer-sponsored-regional-provisional-visa-494.php">Skilled Employer Sponsored Regional (Provisional) Visa 494</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="check-your-eligibility-for-australia.php">Points Calculator for 189/190/491 Visa</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="australia-family-visa.php">Family Visa Australia</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="new-point-test-for-australia-migration.php">Australia Point System</a></li>


<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="how-to-immigrate-to-australia-from-india.php">How to Immigrate to Australia</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="australian-immigration-requirements.php">Australian Immigration Requirements</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="know-about-benefits-of-immigration-to-australia.php">Benefits of Immigration to Australia</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="getting-service-for-immigration-to-australia-from-india.php">Service for Immigration to Australia</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="occupation-lists.php">Australia's New Skilled Occupation List</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="occupation-lists.php">Australia Skilled Occupation List Under ANZSCO</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="act-occupation-list.php">Australian Capital Territory Occupation List</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="australia-skilled-workers-occupation-list-open-2015-2016.php">Australia Skilled Workers Occupation List</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="how-to-apply-for-skilled-nominated-subclass-190-visa.php">How to Apply for Australia Skilled - Subclass 190 Visa</a></li>



<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="skilled-nominated-subclass-190-visa-points-system.php">Australia Skilled Nominated - Sub Class 190 Visa Points System</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="skilled-nominated-subclass-190-visa-how-visa-works-basic-requirements.php">Australia Skilled - Sub Class 190 Visa: Basic Requirements</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="nsw-skilled-occupation-list-190.php">New South Wales Occupation List for Subclass 190</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="australia-business-innovation-investment-provisional-subclass-188-visa.php">Business Investment Temporary Subclass 188 Visa</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="australia-business-visa.php">Australia Business Visa</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="business-innovation-investment-residence-sub-class-888-visa.php">Australia Business - Subclass 888 Visa</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="australia-business-talent-permanent-subclass-132-visa.php">Australia Business - Subclass 132 Visa</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="australia-employer-nomination-scheme-subclass-186.php">Australia Employer Nomination Scheme - Subclass 186 Visa</a></li>

<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="state-sponsorship-skilled-occupation-list-victoria.php">Victoria State Sponsorship Skilled Occupation List</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="south-australia-state-nominated-occupation-list.php">South Australia State Nomination Skilled Occupation List</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="south-australia-supplementary-skilled-list.php">South Australia Supplementary Skilled List</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="western-australian-skilled-migration-occupation-list.php">Western Australian Skilled Migration Occupation List</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="queensland-skilled-occupation-list.php">Queensland Skilled Occupation List</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="tasmanian-skilled-occupation-list.php">Tasmanian Skilled Occupation List</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="aus-skilledselect-faq.php">Frequently Asked Questions - FAQ</a></li>
<li><i class="fa fa-angle-double-right" style="line-height:1.5"></i>&nbsp;<a href="australia-global-talent-visa-program.php">Australia Global Talent Visa Program</a></li>
												</ul>
											</li>
											<li><a class="pagess" href="quebec.php">Quebec</a>
                                             <ul class="sub-menu">
                                             <li><a href="skilled-worker-program.php">Quebec Skilled Worker Program</a></li>
                                             <li><a href="quebec-counselling-tips.php">Quebec Counselling Tips</a></li>
                                             <li><a href="Quebec-Immigration-Application-Process.php">Quebec Immigration Application Process</a></li>
                                             
                                             </ul></li>

											<li><a class="pagess" href="#">Other Services</a>
												<ul class="sub-menu">
													<li><a href="counselling-service.php">Counselling</a></li>
													<li><a href="tourist-visa-service.php">Tourist Visa</a></li>
													<li><a href="student-visa-service.php">Student Visa</a></li>
													<li><a href="business-visa-service.php">Business Visa</a></li>
												</ul>
											</li>
											<li><a href="check-your-eligibility.php">
											<b class="quadrat" style="color: #fff;padding: 5px;">Check Your Eligibility</b></a></li>
											<li><a href="assessment-form.php">Assessment Form</a></li>
											<li><a href="contact-us.php"><b class="quadrat" style="color: #fff;padding: 5px;">contacts</b></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!-- mainmenu end -->
                        </div>
                    </div>
                </div>
            </div>
			
			
            <!-- header-area end -->
            <!-- mobile-menu-area start -->
            <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <div class="logo">
                                    <a href="index.php"><img src="img/logo/logo.png" alt="" /></a>
                                </div>
                                <nav id="dropdown">
                                    <ul>
                                        <li><a class="pagess" href="index.php">Home</a>
												<!-- <ul class="sub-menu">
													<li><a href="index.php">Home 01</a></li>
													<li><a href="index-2.php">Home 02</a></li>
													<li><a href="index-3.php">Home 03</a></li>
													<li><a href="index-4.php">Home 04</a></li>
												</ul> -->
											</li>
											<li><a class="pagess" href="about.php">About us</a>
												
											</li>
											<li class="mega-menu"><a class="pagess" href="#">Canada</a>
												<ul class="sub-menu mega-sub-menu">
													<li><a href="#">Permanent Resident Canada</a></li>
<li><a href="#">Canada Express Entry</a></li>
<li><a href="#">Canada Express Entry Process</a></li>
<li><a href="#">Canada Points Calculator</a></li>
<li><a href="#">Canada PR Point System</a></li>
<li><a href="#">Canada Immigration</a></li>
<li><a href="#">Requirements - Canada Immigration Visa</a></li>
<li><a href="#">Occupation List of Canada </a></li>
<li><a href="#">How to Immigrate to Canada</a></li>
<li><a href="#">Benefits of Canada Immigration</a></li>
<li><a href="#">Canada Family Visa</a></li>

<li><a href="#">Canada Parents Visa</a></li>
<li><a href="#">Canada Spouse Visa</a></li>
<li><a href="#">Comprehensive Ranking System</a></li>
<li><a href="#">Latest Draws Express Entry Program</a></li>
<li><a href="#">Self Employed Visa Canada</a></li>
<li><a href="#">Application Process and Waiting Period</a></li>
<li><a href="#">Express Entry - Canada Job Bank</a></li>
<li><a href="#">Express Entry - Provincial Nomination</a></li>
<li><a href="#">Canada Business Visa</a></li>
<li><a href="#">Canada FSW Program Petition Process</a></li>
<li><a href="#">FSW Selection Criteria – Point System</a></li>
<li><a href="#">Personal Branding</a></li>



												</ul>
											</li>
											<li><a class="pagess" href="quebec.php">Quebec</a>
                                             <ul class="sub-menu">
                                             <li><a href="skilled-worker-program.php">Quebec Skilled Worker Program</a></li>
                                             <li><a href="quebec-counselling-tips.php">Quebec Counselling Tips</a></li>
                                             <li><a href="Quebec-Immigration-Application-Process.php">Quebec Immigration Application Process</a></li>
                                            
                                             </ul></li>
											<li><a class="pagess" href="#">Other Services</a>
												<ul class="sub-menu">
													<li><a href="counselling-service.php">Counselling</a></li>
													<li><a href="tourist-visa-service.php">Tourist Visa</a></li>
													<li><a href="student-visa-service.php">Student Visa</a></li>
													<li><a href="business-visa-service.php">Business Visa</a></li>
												</ul>
											</li>
											<li>
											<a href="check-your-eligibility.php"><b class="quadrat" style="color: #fff;padding: 5px;border-radius: 15px;">Check Your Eligibility</b></a></li>
											
											<li><a href="contact-us.php">contacts</a></li>
                                        </ul>
                                 
                                </nav>
                            </div>					
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area end -->		
        </header>
        <!-- header end -->