<?php 
	error_reporting(0);
	include("include/admin-main.php"); 
    include("include/header.php");
	$obj=new admin();
    $adv_details=$obj->select_objData("all_headingtbl","order by id");
    $adv_details1=$obj->select_objData("all_headingtbl","where tbl='$_REQUEST[id]'");
    $SliderHeading = mysqli_fetch_array($adv_details1);

	$menu_details=$obj->select_objData("menu","");
     if(isset($_POST['banner_submit']))
	{
		$insert_menu1=$obj->insert_ADV5("all_headingtbl",$_REQUEST['id']);
		
		if($insert_menu1=="ok")
		{			
		?>
<script type="text/javascript">
		alert("Data Inserted Successfully");
		window.location.href="<?php echo $_REQUEST['page']?>.php";
		</script>
<?php		
	}
	else
	{	?>
<script type="text/javascript">
		alert("Error! Data Not Inserted");
		window.location.href="<?php echo $_SERVER['HTTP_REFERER'];?>";
		</script>
<?php echo mysqli_error();
	}
	}

	/* this code is used for delete */
if($_REQUEST['action']=="delete")
{
$sl_Q=mysqli_query($con,"select * from all_headingtbl where id=".$_REQUEST['id']);
$adData=mysqli_fetch_array($sl_Q); 
unlink("product/forad2/".$adData['img']);
	if(mysqli_query($con,"delete from all_headingtbl where id=".$_REQUEST['id']))
	{	?>
<script type="text/javascript">
		alert("Data Deleted Successfully");
		window.location.href="<?php echo $_SERVER['HTTP_REFERER'];?>";
		</script>
<?php
	}
	else
	{	?>
<script type="text/javascript">
		alert("Error! Data Not Deleted");
		window.location.href="<?php echo $_SERVER['HTTP_REFERER'];?>";
		</script>
<?php
	}
}
 /* this code is used for inactive */
if($_REQUEST['action']=='Inactive'){
    if(mysqli_query($con,"update all_headingtbl set status='Inactive' where adv_id=".$_REQUEST['id'])){
	?>
<script>
	alert("Menu deactive successfully");
	window.location.href="<?php echo $_SERVER['HTTP_REFERER'];?>";
	</script>
<?php
	}
	else{
	?>
<script type="text/javascript">
		alert("Error! Data Not Deactive");
		window.location.href="<?php echo $_SERVER['HTTP_REFERER'];?>";
		</script>
<?php 
	}
}
 /* this code is used for active */
if($_REQUEST['action']=='Active'){
    if(mysqli_query($con,"update all_headingtbl set status='Active' where adv_id=".$_REQUEST['id'])){
	?>
<script>
	alert("Menu active successfully");
	window.location.href="<?php echo $_SERVER['HTTP_REFERER'];?>";
	</script>
<?php
	}
	else{
	?>
<script type="text/javascript">
		alert("Error! Data Not Deactive");
		window.location.href="<?php echo $_SERVER['HTTP_REFERER'];?>";
		</script>
<?php 
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="img/favicon.png">
<title>
<?php include("include/title.php")?>
Add Details</title>
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-reset.css" rel="stylesheet">
<!--external css-->
<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet">
<link href="css/style-responsive.css" rel="stylesheet" />
<script src="css1/js/jquery.min.js" type="text/javascript"></script>
<script src="css1/js/ddsmoothmenu.js" type="text/javascript"></script>
<script type="text/javascript" src="css1/js/menu.js"></script>
<script src="css1/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="css1/js/ckeditor/ckeditor.js"></script>
<link href="../css/pro_dropdown_2.css" rel="stylesheet" type="text/css">
</head>
<script type="text/javascript">
               function del(){
                    var msg = confirm('Are Your want to delete this record');
                    if(!msg){
                        return false;
                    }else {
                        return true;
                    }
					}
					
				function changeSts(){
                    var msg = confirm('Are Your want to change status');
                    if(!msg){
                        return false;
                    }else {
                        return true;
                    }
					}
                
</script>
<body>
<?php include 'popup.php';?>
<!--header end-->
<!--sidebar start-->
<?php  include 'menu.php' ?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <!-- page start-->
    <script type="text/javascript">

function showUser123(str)

{

if (str=="")

  {

  document.getElementById("txtHint").innerHTML="";

  return;

  }

if (window.XMLHttpRequest)

  {// code for IE7+, Firefox, Chrome, Opera, Safari

  xmlhttp=new XMLHttpRequest();

  }

else

  {// code for IE6, IE5

  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");

  }

xmlhttp.onreadystatechange=function()

  {

  if (xmlhttp.readyState==4 && xmlhttp.status==200)

    {

    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;

    }

  }

xmlhttp.open("GET","getuser.php?q="+str,true);

xmlhttp.send();

}

</script>
    <script type="text/javascript">

function showUser1234(str)

{
if (str=="")

  {

  document.getElementById("txtHint1").innerHTML="";

  return;

  }

if (window.XMLHttpRequest)

  {// code for IE7+, Firefox, Chrome, Opera, Safari

  xmlhttp=new XMLHttpRequest();

  }

else

  {// code for IE6, IE5

  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");

  }

xmlhttp.onreadystatechange=function()

  {

  if (xmlhttp.readyState==4 && xmlhttp.status==200)

    {

    document.getElementById("txtHint1").innerHTML=xmlhttp.responseText;

    }

  }

xmlhttp.open("GET","getuser2.php?q="+str,true);

xmlhttp.send();

}

</script>
    <div class="row">
            </div>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><?php if(mysqli_num_rows($adv_details1)>0)echo "Edit";else echo "Add";?> New </h4>
              </div>
              <div class="modal-body">
              <form method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
                  <div class="form-group">
                  <div class="form-group">
                    <label class="col-lg-4 control-label">Slider Heading</label>
                    <div class="col-lg-8">
                      <input type="text" class="form-control" id="linkName" placeholder="Enter Heading" value="<?php echo $SliderHeading['heading']?>" name="banner_heading" autocomplete="off">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <input type="submit" name="banner_submit" value="Submit" class="btn btn-send">
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
      </div>
      </div>
      


      <!-- <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading"> <b> ADD Details</b> </header>
          <table class="table table-striped table-advance table-hover">
            <thead>
              <tr>
                <th>Seq. No</th> -->
               <!-- <th>Category Name</th>
                <th>Sub Category</th>
                <th class="hidden-phone">SubToSub Category</th>-->
                <!-- <th>Image</th>
				<th>Link Name</th>
                <th>Position</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $a=1;
					  while($row = mysqli_fetch_array($adv_details)){
                     @extract($row); 
                      ?>
              <tr>
                <td class="hidden-phone"><?php echo $a; ?></td> -->
               <!-- <?php $sel_menu=mysqli_fetch_array(mysqli_query($con,"select menu from menu where menu_id='$menu_id'"))?>
                <td><?php echo $sel_menu['menu'];?></td>
                <?php $sel_cat=mysqli_fetch_array(mysqli_query($con,"select category_name from categories where cat_id='$cat_id'"))?>
                <td><?php echo $sel_cat['category_name'];?></td>
                <?php $sel_subcat=mysqli_fetch_array(mysqli_query($con,"select subcat_name from subcategory where subcat_id='$subcat_id'"))?>
                <td class="hidden-phone"><?php echo $sel_subcat['subcat_name'];?></td>-->
                <!-- <td><img src="../image/banner_top/<?php echo $img; ?>"  height="50px"/></td>
				<td><?php echo $Adv;?></td>
                <td><?php echo $pos_ad;?></td>
                <td><a href="<?php echo $_SESSION['PHP_SELF'];?>?action=delete&id=<?php echo $adv_id; ?>" title="delete">
                  <button class="btn btn-danger btn-xs" onclick='return del()'><i class="icon-trash "></i></button>
                  </a>
                  <a href="editbanner.php?id=<?php echo $adv_id; ?>">
                <button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button></a>
                  <?php if($status=='Active'){?>
                  <a href="<?php echo $_SESSION['PHP_SELF'];?>?action=Inactive&id=<?php echo $adv_id; ?>" title="Active">
                  <button class="btn btn-danger btn-xs" onclick='return changeSts()'><i class="icon-ok"></i></button>
                  </a>
                  <?php } else{?>
                  <a href="<?php echo $_SESSION['PHP_SELF'];?>?action=Active&id=<?php echo $adv_id?>" title="Inactive">
                  <button class="btn btn-danger btn-xs" onclick='return changeSts()' style="padding: 1px 6px;"><i class="icon-remove"></i></button>
                  </a>
                  <?php }?>
                </td>
              </tr>
              <?php  $a++; } ?>
            </tbody>
          </table>
        </section>
      </div>
    </div> -->
    <!-- page end-->
  </section>
</section>
<!--main content end-->
</section>
<!-- js placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="js/respond.min.js" ></script>
<!--common script for all pages-->
<script src="js/common-scripts.js"></script>
</body>
</html>
