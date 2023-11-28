<?php
include("include/header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="img/favicon.png">
<title><?php include("include/title.php")?> | Dashbord</title>
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-reset.css" rel="stylesheet">
<link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!--external css-->
<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet">
<link href="css/style-responsive.css" rel="stylesheet" />
</head>
<body>
<?php include 'popup.php';?>
<!--header end-->
<!--sidebar start-->
<?php include 'menu.php'; ?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
<section class="wrapper">
<!--state overview start-->
<div class="row state-overview">
  <div class="col-lg-3 col-sm-6">
    <section class="panel">
      <div class="symbol red"> <i class="fa fa-calendar"></i> </div>
      <div class="value">
        <h3> <?php echo date('d/m/y'); ?> </h3>
        <p>Today</p>
      </div>
    </section>
  </div>
  <div class="col-lg-3 col-sm-6">
    <section class="panel">
      <div class="symbol red"> <i class="fa fa-clock-o"></i> </div>
      <div class="value">
        <h3> <?php echo date('H:i:s');?> </h3>
        <p>Time</p>
      </div>
    </section>
  </div>
  <div class="col-lg-3 col-sm-6">
    <section class="panel">
      <div class="symbol red"> <i class="fa fa-calendar-plus-o"></i> </div>
      <div class="value">
        <h3> <?php echo date('D');?> </h3>
        <p>Day</p>
      </div>
    </section>
  </div>
  <div class="col-lg-3 col-sm-6">
    <section class="panel">
      <div class="symbol red"> <i class="fa fa-calendar-plus-o"></i> </div>
      <div class="value">
        <h3> <?php echo date('M');?> </h3>
        <p>Month</p>
      </div>
    </section>
  </div>
</div>
<!-- page start-->
<!--footer end-->
<!-- js placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="js/jquery.sparkline.js" type="text/javascript"></script>
<script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="js/owl.carousel.js" ></script>
<script src="js/jquery.customSelect.min.js" ></script>
<script src="js/respond.min.js" ></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
<!--common script for all pages-->
<script src="js/common-scripts.js"></script>
<!--script for this page-->
<script src="js/sparkline-chart.js"></script>
<script src="js/easy-pie-chart.js"></script>
<script src="js/count.js"></script>
<script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
</body>
</html>