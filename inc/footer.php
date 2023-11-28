        <!-- Start Footer bottom Area -->
        <footer class="footer-1">
            <div class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-5 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <div class="footer-logo">
                                    	<a href="#"><img src="img/logo/footer-logo.png" alt=""></a>
                                    </div>
                                    <p>
                                        Prime Immigration LLP is one of the most seasoned and renowned Immigration brands globally with a successful experience, in providing guidance and processing of Immigrant and non-Immigrant visa applications. We service individuals, families, and corporates.
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Quick Links</h4>
                                    <ul class="footer-list">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php">About Us</a></li>
                                        <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                        <li><a href="terms-conditions.php">Terms & Conditions</a></li>
                                        <li><a href="refund-policy.php">Refund Policy</a></li>
										<li><a href="disclaimer.php">Disclaimer</a></li>
                                        <li><a href="#">Canada</a></li>
                                        <li><a href="quebec.php">Quebec</a></li>
                                        
                                        <li><a href="contact-us.php">Contact Us</a></li>
                                       
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <!-- end single footer -->
                        <div class="col-md-3 col-sm-4 col-xs-12">
                           <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Our Best Services</h4>
                                    <ul class="footer-list">
                                <li><a href="counselling-service.php">Counselling</a></li>
                                <li><a href="tourist-visa-service.php">Tourist Visa</a></li>
                                <li><a href="student-visa-service.php">Student Visa</a></li>
                                <li><a href="business-visa-service.php">Business Visa</a></li>
                                <li><a href="check-your-eligibility.php">Check Your Eligibility</a></li>
                                     </ul>
                                        
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Contact Us</h4>
                                </div>
                                <div class="footer-info">
                                    <div class="adress">
                                        <i class="fa fa-map-marker mr-3"></i>
                                        <p>103, Pocket 4, <br>
                                      Sector 11, Dwarka<br>
                                       New Delhi 110075</p>
                                  </div>
                              <div class="mail">
                                        <i class="fa fa-envelope-o"></i>
                                        <p><a href="#">info@primeimmigrations.com</a></p>
                                    </div>
                                     
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <p>
                                    Copyright © 2022
                                    <a href="#">Prime Immigration LLP</a> All Rights Reserved.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 powered-by"></div>
                  </div>
                </div>
            </div>
        </footer>

        <a href="https://api.whatsapp.com/send?phone=918178788054&text=" target="_blank">
            <div class="whatsapp-link">
                <div class="whatsapp-icon">
                    <img src="img/whatsapp.png" class="img-fluid">
                </div>
            </div>
        </a>

		<!-- all js here -->

		<!-- jquery latest version -->
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
		<!-- bootstrap js -->
		<script src="js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Counter js -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- waypoint js -->
		<script src="js/waypoints.js"></script>
        <!-- stellar js -->
        <script src="js/jquery.stellar.min.js"></script>
        <!-- Chart JS -->
        <script src="js/Chart.bundle.min.js"></script>
        <script src="js/Chart.js"></script>
		<!-- magnific js -->
        <script src="js/magnific.min.js"></script>
		<!-- venobox js -->
		<script src="js/venobox.min.js"></script>
        <!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
		<!-- Form validator js -->
		<script src="js/form-validator.min.js"></script>
		<!-- plugins js -->
		<script src="js/plugins.js"></script>
		<!-- main js -->
		<script src="js/main.js"></script>
		 <script src="/backend/themes/yellow/js/bootstrap.min.js"></script>
         <script type="text/javascript" src="/backend/themes/yellow/js/jquery.waypoints.min.js"></script>
        <script type="text/javascript" src="/backend/themes/yellow/js/jquery.counterup.min.js"></script>
        <script src="/backend/themes/yellow/js/owl.carousel.min.js"></script>
        <script src="/backend/themes/yellow/js/ss-lightbox.js"></script>
        <script src="/backend/themes/yellow/js/custom.js"></script>
        <script type="text/javascript" src="/backend/themes/yellow/datepicker/bootstrap-datepicker.min.js"></script>
  <script type="text/javascript">
            $(function(){
    jQuery('img.svg').each(function(){
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');
    
        jQuery.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');
    
            // Add replaced image's ID to the new SVG
            if(typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if(typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass+' replaced-svg');
            }
    
            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');
            
            // Check if the viewport is set, else we gonna set it if we can.
            if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
            }
    
            // Replace image with new SVG
            $img.replaceWith($svg);
    
        }, 'xml');
    
    });
});

        </script>
               <!----<script src="http://code.tidio.co/qo3kpyexsx0aolzjy0apot97q2tvdtek.js" async></script>--->
	</body>

</html>