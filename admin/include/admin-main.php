<?php
include("config.php");
class admin{
//function query to select table data
function select_objData($table,$o){
$this->table_name=$table;
global $con;		
$select_query=mysqli_query($con,"SELECT * FROM ".$this->table_name." $o ") or die("Can't select data from ".$this->table_name." table due to ".mysqli_error());
return $select_query;
}
//function query to select table data
function select_myobjData($table){
$this->table_name=$table;
global $con;		
$select_query=mysqli_query($con,"SELECT * FROM ".$this->table_name) or die("Can't select data from ".$this->table_name." table due to ".mysqli_error());
return $select_query;
}

//function query to insert data into table
function insert_notification($table){
$this->table_name=$table;
global $con;	

$file_name1 = $_FILES['image1']['name'];

$random_digit1 = md5(rand(1000,999)).date('his');

$new_file_name1 = $random_digit1.$file_name1;

$path1 = "img/".$new_file_name1;

move_uploaded_file($_FILES['image1']['tmp_name'], $path1);

$mtxt = addslashes($_REQUEST['mtxt']);
$currentTime=strtotime(date('d-m-Y  H:i:s'));	
$insert_query=mysqli_query($con,"insert into ".$this->table_name." set mtxt='$mtxt',img='$new_file_name1',notType='$_POST[notType]',dateTime='$currentTime'") or die("Can't insert data into ".$this->table_name." table due to ".mysqli_error());
if($insert_query)
return "ok";
else
return "fail";	
}

//function query to select table data
function select_MenuForData($table){
$this->table_name=$table;
global $con;		
$select_query=mysqli_query($con,"SELECT * FROM ".$this->table_name." where menu_id in(select menu_id from categories)") or die("Can't select data from ".$this->table_name." table due to ".mysqli_error());
return $select_query;
}

//function query to insert guest user table
function insert_guest_user($table,$utype){
$this->table_name=$table;
global $con;		

$name= $_POST['c_name'];
$email = $_POST['c_email'];
$mobile= $_POST['c_mobile'];
$c_designation= $_POST['c_designation'];
$created = date('Y-m-d');
$password = md5($_POST['c_password']);
$pass = $_POST['c_password'];
$address = $_POST['address'];
$reg_id = date('ihs').rand(0,99);

$tmpNameIs=$_FILES['pro_pic']['tmp_name'];
if(is_uploaded_file($tmpNameIs)){
 $imgNameIs= sha1(date('dmy').rand()).".jpg";
 //move uploaded file
 move_uploaded_file($tmpNameIs,"../image/".$imgNameIs);
}else{
$imgNameIs='';
}

$query ="insert into regis(name,email,mobile,password,pass,reg_date,pro_pic,address,reg_id,utype)";
$query .=" value('{$name}','{$email}','{$mobile}','{$password}','{$pass}',now(),'{$imgNameIs}','{$address}','{$reg_id}','{$utype}')";

  $insert_query=mysqli_query($con,$query);
  
	if(!$insert_query)
	{
		die('QUERY FAILD' . mysqli_error($con));
	}

if($insert_query)
return "ok";
else
return "fail";	
}

//function query to insert data into table
function insert_moving_txt($table){
$this->table_name=$table;
global $con;		
$mtxt = addslashes($_REQUEST['mtxt']);
$insert_query=mysqli_query($con,"insert into ".$this->table_name." set mtxt='$mtxt'") or die("Can't insert data into ".$this->table_name." table due to ".mysqli_error());

if($insert_query)
return "ok";
else
return "fail";	
}

//function query to insert data into table
function insert_sub_user($table){
$this->table_name=$table;
global $con;		
$username = addslashes($_REQUEST['username']);
$mobileNo = addslashes($_REQUEST['firstname']);
$password = md5($_REQUEST['password']);
$pass = $_REQUEST['password'];

$insert_query=mysqli_query($con,"insert into ".$this->table_name." set username='$username',firstname='$mobileNo',password='$password',lastname='$pass'") or die("Can't insert data into ".$this->table_name." table due to ".mysqli_error());

if($insert_query)
return "ok";
else
return "fail";	
}


//function query to insert data into table
function insert_pin_code($table){
$this->table_name=$table;
global $con;		
$menu = @mysqli_real_escape_string($con,$_REQUEST['menu']);
$insert_query=mysqli_query($con,"insert into pin_code set pin='$menu'") or die("Can't insert data into ".$this->table_name." table due to ".mysqli_error());

if($insert_query)
return "ok";
else
return "fail";	
}

//function query to insert data into table
function update_pin_code_objData($table,$id){
$this->table_name=$table;
global $con;		
$menu = @mysqli_real_escape_string($con,$_REQUEST['menu']);
$update_query=mysqli_query($con,"update pin_code set pin='$menu' where menu_id='$id'") or die("Can't insert data into ".$this->table_name." table due to ".mysqli_error());

if($update_query)
return 1;
else
return "fail";	
}

//function query to insert data into table
function insert_menu($table){
$this->table_name=$table;
global $con;		
$menu = addslashes($_REQUEST['menu']);
if($_FILES['m_image']['tmp_name']){
$mimage= md5(rand().date('ihs')).$_FILES['m_image']['name'];
$mimage_tmp=$_FILES['m_image']['tmp_name'];
move_uploaded_file($_FILES['m_image']['tmp_name'],"../image/product/".$mimage);
}
$insert_query=mysqli_query($con,"insert into ".$this->table_name." set category='$menu'") or die("Can't insert data into ".$this->table_name." table due to ".mysqli_error());

if($insert_query)
return "ok";
else
return "fail";	
}


//function query to insert data into table
function insert_package($table){
$this->table_name=$table;
global $con;		
$name = addslashes($_REQUEST['name']);
$validity = $_REQUEST['validity']." Days";
$pheading = addslashes($_REQUEST['pheading']);
$insert_query=mysqli_query($con,"insert into ".$this->table_name." set name='$name',planType='$_POST[planType]',template='$_POST[template]',stickers='$_POST[stickers]',back_remove='$_POST[back_remove]',hcolor='$_POST[hcolor]',bcolor='$_POST[bcolor]',validity='$validity',price='$_POST[price]',discountPrice='$_POST[discountPrice]',pheading='$pheading'") or die("Can't insert data into ".$this->table_name." table due to ".mysqli_error($con));

if($insert_query)
return "ok";
else
return "fail";	
}

// function query to insert data into table
function insert_cat($table){
$this->table_name=$table;
global $con;		
$cat = @mysqli_real_escape_string($con,$_POST['category']);
$mimage= md5(rand().date('his')).$_FILES['m_image']['name'];
$mimage_tmp=$_FILES['m_image']['tmp_name'];

$insert_query=mysqli_query($con,"insert into ".$this->table_name." set menu_id='$_POST[menu_id]',category_name='$cat',sub_menu_image='$mimage'") or die("Can't insert data into ".$this->table_name." table due to ".mysqli_error());
move_uploaded_file($_FILES['m_image']['tmp_name'],"../image/product/".$mimage);

if($insert_query)
return "ok";
else
return "fail";	
}

// function query to insert data into table
function insert_subcat($table){
$this->table_name=$table;
global $con;	
$subcat_name = @mysqli_real_escape_string($con,$_POST['sub_category']);
$insert_query=mysqli_query($con,"insert into ".$this->table_name." set cat_id='$_POST[cat_id]',menu_id='$_POST[menu_id]',subcat_name='$subcat_name',home_view='no'") or die($con);
if($insert_query)
return "ok";
else
return "fail";	
}

//function query to insert data into table
function insert_coupon($table){
$this->table_name=$table;
global $con;		
$coupon_name = @mysqli_real_escape_string($con,$_REQUEST['coupon_name']);
$insert_query=mysqli_query($con,"insert into ".$this->table_name." set coupon_per='$_REQUEST[coupon_per]',coupon_name='$coupon_name',coupon_type='$_REQUEST[coupon_type]'") or die("Can't insert data into ".$this->table_name." table due to ".mysqli_error());
if($insert_query)
return "ok";
else
return "fail";	
}
//function query to select table data by id
function select_objData_byId($table,$id){
$this->table_name=$table;
global $con;		
if($this->table_name=='menu' || $this->table_name=='pin_code')
$select_query=mysqli_query($con,"SELECT * FROM ".$this->table_name." WHERE menu_id='$id'") or die("Can't select data from ".$this->table_name." table due to ".mysqli_error());
if($this->table_name=='categories')
$select_query=mysqli_query($con,"SELECT * FROM ".$this->table_name." WHERE cat_id='$id'") or die("Can't select data from ".$this->table_name." table due to ".mysqli_error());
return mysqli_fetch_array($select_query);
}
//function query to update table
function update_objReply($table,$id){
$this->table_name=$table;
global $con;	
$reply = addslashes($_POST['replyIs']);
$update_query = mysqli_query($con,"UPDATE ".$this->table_name." SET replyIs = '".$reply."' WHERE id= '".$id."'") or die("Can't update menu name of ".$this->table_name." table due to ".mysqli_error()); 	
if($update_query)
return "ok";
else
return "fail";	
}


//function query to update table
function update_objData($table,$id){
$this->table_name=$table;
global $con;
if($this->table_name=="category"){
 $menu_name = addslashes($_POST['menu']);    
 $update_query = mysqli_query($con,"UPDATE ".$this->table_name." SET category = '".$menu_name."' WHERE id = '".$id."'") or die("Can't update menu name of ".$this->table_name." table due to ".mysqli_error()); 
}

if($this->table_name=="menu"){
$sel_query=mysqli_query($con,"select * from menu where menu_id='$id'") or die(mysqli_error());
@extract($result=mysqli_fetch_array($sel_query));
if($_FILES['menu_image']['name']==''){
$menu_name = @mysqli_real_escape_string($con,$_POST['menu']);
$menu_image=$result['menu_image'];

$update_query = mysqli_query($con,"UPDATE ".$this->table_name." SET menu = '".$menu_name."',menu_image='".$menu_image."' WHERE menu_id = '".$id."'") or die("Can't update menu name of ".$this->table_name." table due to ".mysqli_error()); 
}
else{
$menu_name = @mysqli_real_escape_string($con,$_POST['menu']);
$menu_image=md5(rand().date('ihs')).$_FILES['menu_image']['name'];

$update_query = mysqli_query($con,"UPDATE ".$this->table_name." SET menu = '".$menu_name."',menu_image='".$menu_image."' WHERE menu_id = '".$id."'") or die("Can't update menu name of ".$this->table_name." table due to ".mysqli_error()); 

move_uploaded_file($_FILES['menu_image']['tmp_name'],"../image/product/".$menu_image);
}
}

if($this->table_name=="categories"){
if(is_uploaded_file($_FILES['menu_image']['tmp_name'])){
$menu_Name=md5(rand().date('ihs')).$_FILES['menu_image']['name'];
$menu_image = ",sub_menu_image='$menu_Name'";
move_uploaded_file($_FILES['menu_image']['tmp_name'],"../image/product/".$menu_Name);
}
else{
$menu_image='';
}

@extract($result=mysqli_fetch_array($sub_sel_query));
$cat_name = @mysqli_real_escape_string($con,$_POST['catname']);

$update_query = mysqli_query($con,"UPDATE ".$this->table_name." SET category_name = '".$cat_name."' $menu_image WHERE cat_id= '".$id."'") or die("Can't update menu name of ".$this->table_name." table due to ".mysqli_error()); 	
}
if($update_query)
return "ok";
else
return "fail";	
}

/******************************************************************************************************/
function insert_product($table){
$this->table_name=$table;
global $con;	
/*-----------------------Multiple image uploading code start here----------------*/
  $name1=array();
  if(@count($_FILES['l_photo']['tmp_name'])){
    $i=0;
   foreach ($_FILES['l_photo']['tmp_name'] as $index=>$tmp_name){
    $tmpName = date('s').$_FILES[ 'l_photo' ][ 'name' ][ $index ];
    $tmpDest = $_FILES[ 'l_photo' ][ 'tmp_name' ][ $index ];	
    $i++;
	$ext = explode(".",$tmpName);
	$size = sizeof($ext);
	$r = md5($ext[0]);
    $filename = "../image/logo/".$r.".".$ext[$size-1];
	if( !empty( $tmpDest ) && is_uploaded_file( $tmpDest ) ) {
     $imgup=move_uploaded_file($tmpDest, $path.$filename);
	}
	 if(@$imgup)array_push($name1,$filename);
    }
     $img_upsd=json_encode($name1);
     $productlogoImg = ",logo='$img_upsd'";
    }else $productlogoImg='';
    
 $name2=array();
  if(@count($_FILES['s_photo']['tmp_name'])){
    $i=0;
   foreach ($_FILES['s_photo']['tmp_name'] as $index=>$tmp_name){
    $tmpName = date('s').$_FILES[ 's_photo' ][ 'name' ][ $index ];
    $tmpDest = $_FILES[ 's_photo' ][ 'tmp_name' ][ $index ];	
    $i++;
	$ext = explode(".",$tmpName);
	$size = sizeof($ext);
	$r = md5($ext[0]);
    $filename = "../image/shap/".$r.".".$ext[$size-1];
	if( !empty( $tmpDest ) && is_uploaded_file( $tmpDest ) ) {
     $imgup=move_uploaded_file($tmpDest, $path.$filename);
	}
	 if(@$imgup)array_push($name2,$filename);
    }
     $img_upsd=json_encode($name2);
     $productshapImg = ",leader_shap='$img_upsd'";
    }else $productshapImg='';
    
    
if(is_uploaded_file($_FILES['p_photo']['tmp_name'])){
    $imageName = rand().$_FILES['p_photo']['name'];
    move_uploaded_file($_FILES['p_photo']['tmp_name'],"../image/product/".$imageName);
    $productImg = ",image='$imageName'";
}else $productImg='';	

$name=addslashes($_POST['name']);
$result=mysqli_query($con,"INSERT INTO ".$this->table_name." SET cat_id='$_POST[menu_id]',name='$name',change_no='$_POST[change_no]' $productImg  $productlogoImg  $productshapImg") or die(mysqli_error());
				  
	if($result)
		return $msg="pass";
	else
	return $msg="fail";

}

function insert_logo($table){
$this->table_name=$table;
global $con;	
/*-----------------------Multiple image uploading code start here----------------*/
  $name1=array();
  if(@count($_FILES['l_photo']['tmp_name'])){
    $i=0;
   foreach ($_FILES['l_photo']['tmp_name'] as $index=>$tmp_name){
    $tmpName = date('s').$_FILES[ 'l_photo' ][ 'name' ][ $index ];
    $tmpDest = $_FILES[ 'l_photo' ][ 'tmp_name' ][ $index ];	
    $i++;
	$ext = explode(".",$tmpName);
	$size = sizeof($ext);
	$r = md5($ext[0]);
    $filename = "../image/logo/".$r.".".$ext[$size-1];
	if( !empty( $tmpDest ) && is_uploaded_file( $tmpDest ) ) {
     $imgup=move_uploaded_file($tmpDest, $path.$filename);
	}
	 if(@$imgup)array_push($name1,$filename);
    }
     $img_upsd=json_encode($name1);
     $productlogoImg = "logo='$img_upsd'";
    }else $productlogoImg='';
    
$result=mysqli_query($con,"INSERT INTO ".$this->table_name." SET $productlogoImg") or die(mysqli_error());
				  
	if($result)
		return $msg="pass";
	else
	return $msg="fail";

}

function insert_border($table){
$this->table_name=$table;
global $con;	
/*-----------------------Multiple image uploading code start here----------------*/
  $name1=array();
  if(@count($_FILES['b_photo']['tmp_name'])){
    $i=0;
   foreach ($_FILES['b_photo']['tmp_name'] as $index=>$tmp_name){
    $tmpName = date('s').$_FILES[ 'b_photo' ][ 'name' ][ $index ];
    $tmpDest = $_FILES[ 'b_photo' ][ 'tmp_name' ][ $index ];	
    $i++;
	$ext = explode(".",$tmpName);
	$size = sizeof($ext);
	$r = md5($ext[0]);
    $filename = "../image/border/".$r.".".$ext[$size-1];
	if( !empty( $tmpDest ) && is_uploaded_file( $tmpDest ) ) {
     $imgup=move_uploaded_file($tmpDest, $path.$filename);
	}
	 if(@$imgup)array_push($name1,$filename);
    }
     $img_upsd=json_encode($name1);
     $productlogoImg = "border='$img_upsd'";
    }else $productlogoImg='';
    
$result=mysqli_query($con,"INSERT INTO ".$this->table_name." SET $productlogoImg") or die(mysqli_error());
				  
	if($result)
		return $msg="pass";
	else
	return $msg="fail";

}

function insert_shap($table){
$this->table_name=$table;
global $con;	
/*-----------------------Multiple image uploading code start here----------------*/
 $name2=array();
  if(@count($_FILES['s_photo']['tmp_name'])){
    $i=0;
   foreach ($_FILES['s_photo']['tmp_name'] as $index=>$tmp_name){
    $tmpName = date('s').$_FILES[ 's_photo' ][ 'name' ][ $index ];
    $tmpDest = $_FILES[ 's_photo' ][ 'tmp_name' ][ $index ];	
    $i++;
	$ext = explode(".",$tmpName);
	$size = sizeof($ext);
	$r = md5($ext[0]);
    $filename = "../image/shap/".$r.".".$ext[$size-1];
	if( !empty( $tmpDest ) && is_uploaded_file( $tmpDest ) ) {
     $imgup=move_uploaded_file($tmpDest, $path.$filename);
	}
	 if(@$imgup)array_push($name2,$filename);
    }
     $img_upsd=json_encode($name2);
     $productshapImg = "leader_shap='$img_upsd'";
    }else $productshapImg='';
    
   $result=mysqli_query($con,"INSERT INTO ".$this->table_name." SET $productshapImg") or die(mysqli_error());
				  
	if($result)
		return $msg="pass";
	else
	return $msg="fail";
}

function insert_ADV($table){
$this->table_name=$table;
global $con;	
$menu_id = @mysqli_real_escape_string($con,$_REQUEST['menu_id']);
$cat_id = @mysqli_real_escape_string($con,$_REQUEST['cat_id']);
$subcat_id = @mysqli_real_escape_string($con,$_REQUEST['subcat_id']);		
$adv_link = @mysqli_real_escape_string($con,$_REQUEST['linkName']);
// $h_heading = @mysqli_real_escape_string($con,$_REQUEST['h_heading']);
$img_upsd=rand().$_FILES['photo']['name'];
if(empty($menu_id))$menu_id=0;
if(empty($cat_id))$cat_id=0;
if(empty($subcat_id))$subcat_id=0;

if($table=='adv_tbl0')
$insert_query=mysqli_query($con,"insert into ".$this->table_name." set menu_id='$menu_id',cat_id='$cat_id',subcat_id='$subcat_id',img='$img_upsd',Adv='$adv_link',pos_ad='$_POST[pos_ad]', s_heading='$_POST[s_heading]'") or die("Can't insert data into ".$this->table_name." table due to ".mysqli_error($con));
else
$insert_query=mysqli_query($con,"insert into ".$this->table_name." set menu_id='$menu_id',cat_id='$cat_id',subcat_id='$subcat_id',img='$img_upsd',Adv='$adv_link',pos_ad='$_POST[pos_ad]'") or die("Can't insert data into ".$this->table_name." table due to ".mysqli_error($con));
if($table=='adv_tbl0')
move_uploaded_file($_FILES['photo']['tmp_name'],"../image/banner_top/".$img_upsd);
if($table=='adv_tbl1')
move_uploaded_file($_FILES['photo']['tmp_name'],"../image/banner_top/".$img_upsd);
if($table=='adv_tbl2')
move_uploaded_file($_FILES['photo']['tmp_name'],"../image/banner_top/".$img_upsd);
if($table=='adv_tbl3')
move_uploaded_file($_FILES['photo']['tmp_name'],"../image/banner_top/".$img_upsd);
if($table=='adv_tbl4')
move_uploaded_file($_FILES['photo']['tmp_name'],"../image/banner_top/".$img_upsd);
if($table=='adv_tbl5')
move_uploaded_file($_FILES['photo']['tmp_name'],"../image/banner_top/".$img_upsd);
if($table=='adv_tbl6')
move_uploaded_file($_FILES['photo']['tmp_name'],"../image/banner_top/".$img_upsd);
if($table=='adv_tbl7')
move_uploaded_file($_FILES['photo']['tmp_name'],"../image/banner_top/".$img_upsd);

	   if($insert_query)
	    return "ok";
	   else
	    return "fail";

}

////// help & App Product Data Insert
function insert_AppProduct($table){
	$this->table_name=$table;
	global $con;	
	$App_title = @mysqli_real_escape_string($con,$_REQUEST['a_title']);		
	$app_desc = @mysqli_real_escape_string($con,$_REQUEST['a_desc']);
	$p_image1=rand().$_FILES['p_photo']['name'];
	// if(empty($menu_id))$menu_id=0;
	// if(empty($cat_id))$cat_id=0;
	// if(empty($subcat_id))$subcat_id=0;
	
	$insert_query=mysqli_query($con,"insert into ".$this->table_name." set p_title='$App_title',p_description='$app_desc',p_image='$p_image1'") or die("Can't insert data into ".$this->table_name." table due to ".mysqli_error($con));
	move_uploaded_file($_FILES['p_photo']['tmp_name'],"../image/banner_top/".$p_image1);
	
		   if($insert_query)
			return "ok";
		   else
			return "fail";
	
	}

////// About Us Data Insert
function insert_ADV1($table){
	$this->table_name=$table;
	global $con;	
	$title1 = @mysqli_real_escape_string($con,$_REQUEST['pos_ad1']);		
	$linkName1 = @mysqli_real_escape_string($con,$_REQUEST['linkName1']);
	
	$insert_query=mysqli_query($con,"insert into ".$this->table_name." set title='$title1',description='$linkName1'") or die("Can't insert data into ".$this->table_name." table due to ".mysqli_error($con));
	
		   if($insert_query)
			return "ok";
		   else
			return "fail";
	
	}

	////// Privacy Policy Us Data Insert
function insert_ADV2($table){
	$this->table_name=$table;
	global $con;	
	$privacy_title = @mysqli_real_escape_string($con,$_REQUEST['privacy_title']);		
	$privacy_desc = @mysqli_real_escape_string($con,$_REQUEST['privacy_desc']);
	
	$insert_query=mysqli_query($con,"insert into ".$this->table_name." set title='$privacy_title',description='$privacy_desc'") or die("Can't insert data into ".$this->table_name." table due to ".mysqli_error($con));
	
		   if($insert_query)
			return "ok";
		   else
			return "fail";
	
	}

	////// terms & Conditions Data Insert
function insert_ADV3($table){
	$this->table_name=$table;
	global $con;	
	$terms_title = @mysqli_real_escape_string($con,$_REQUEST['terms_title']);		
	$terms_desc = @mysqli_real_escape_string($con,$_REQUEST['terms_desc']);
	
	$insert_query=mysqli_query($con,"insert into ".$this->table_name." set title='$terms_title',description='$terms_desc'") or die("Can't insert data into ".$this->table_name." table due to ".mysqli_error($con));
	
		   if($insert_query)
			return "ok";
		   else
			return "fail";
	
	}
	////// help & Conditions Data Insert
function insert_ADV4($table){
	$this->table_name=$table;
	global $con;	
	$help_title = @mysqli_real_escape_string($con,$_REQUEST['help_title']);		
	$help_desc = @mysqli_real_escape_string($con,$_REQUEST['help_desc']);
	
	$insert_query=mysqli_query($con,"insert into ".$this->table_name." set title='$help_title',description='$help_desc'") or die("Can't insert data into ".$this->table_name." table due to ".mysqli_error($con));
	
		   if($insert_query)
			return "ok";
		   else
			return "fail";
	
	}

	////// help & Conditions Data Insert
function insert_ADV5($table,$id){
	$this->table_name=$table;
	global $con;	
	$heading = @mysqli_real_escape_string($con,$_REQUEST['banner_heading']);
	$sl_check_Q = mysqli_query($con,"select * from ".$this->table_name." where tbl='$id'");	
	if(mysqli_num_rows($sl_check_Q)>0){

		$insert_query=mysqli_query($con,"update ".$this->table_name." SET heading='$heading' where tbl='$id'") or die("Can't insert data into ".$this->table_name." table due to ".mysqli_error($con));
		if($insert_query)
		 return "ok";
		else
		 return "fail";
		

	}else{
		$insert_query=mysqli_query($con,"insert into ".$this->table_name." SET heading='$heading',tbl='$id'") or die("Can't insert data into ".$this->table_name." table due to ".mysqli_error($con));
		if($insert_query)
		 return "ok";
		else
		 return "fail";

	} 	
	
	}



//code to select product detail
function select_seller_product($table,$o){
$this->table_name=$table;
global $con;	
$qry = mysqli_query($con,"SELECT * FROM ".$this->table_name." $o ") or die("select query fail".mysqli_error());
  return $qry;
 
}

//code to select product order 
function select_order_product($table,$o){
$this->table_name=$table;
global $con;	
$qry = mysqli_query($con,"SELECT * FROM ".$this->table_name." $o ") or die("select query fail".mysqli_error());
  return $qry;
 
}

//code to select product detail
function select_seller_details($table,$sid){
$this->table_name=$table;
global $con;	
$qry = mysqli_query($con,"SELECT * FROM ".$this->table_name." where reg_id='$sid'") or die("select query fail".mysqli_error());
return mysqli_fetch_array($qry);
}
//code to select seller product
function select_myproduct($table){
$this->table_name=$table;
global $con;	
$qry = mysqli_query($con,"SELECT * FROM ".$this->table_name) or die("select query fail".mysqli_error());
  return $qry;
 
}
//code to select seller product
function select_product($table,$o){
$this->table_name=$table;
global $con;	
$qry = mysqli_query($con,"SELECT * FROM ".$this->table_name." $o ") or die("select query fail".mysqli_error());
  return $qry;
 
}

//code to insert product detail
function select_order($car){
$this->table_name=$car;
$qry = mysqli_query($con,"SELECT * FROM ".$this->table_name."") or die("select query fail".mysqli_error());
  return $qry;
 
}
//code to insert product detail
function select_register($car){
$this->table_name=$car;
$qry = mysqli_query($con,"SELECT * FROM ".$this->table_name." order by uid") or die("select query fail".mysqli_error());
  return $qry;
 
}
function insert_register($table){
$this->table_name=$table;
global $con;	

$result=mysqli_query($con,"INSERT INTO ".$this->table_name."(name,email,password,img) 
    value('$_POST[name]','$_POST[email]','$_POST[password]','woman.jpg')") or die(mysqli_error());
				  
				   if($result)
				$result=mysqli_query($con,"SELECT * FROM ".$this->table_name." WHERE email='$_POST[email]' AND password='$_POST[password]' ") or die(mysqli_error());
$result2 = mysqli_fetch_array($result);
session_start();
$_SESSION['user']=$result2['id'];
echo "<script>alert('Username Register Successfully')</script>";
header('location:index.php');

}

//code to insert product detail
function insert_register22($table){
$this->table_name=$table;
global $con;	

$result=mysqli_query($con,"INSERT INTO ".$this->table_name."(name,email,password,img) 
    value('$_POST[name]','$_POST[email]','$_POST[password]','woman.jpg')") or die(mysqli_error());
				  
				   if($result)
$result=mysqli_query($con,"SELECT * FROM ".$this->table_name." WHERE email='$_POST[email]' AND password='$_POST[password]' ") or die(mysqli_error());
$result2 = mysqli_fetch_array($result);
session_start();
$_SESSION['user']=$result2['id'];
echo "<script>alert('Username Register Successfully')</script>";
header('location:shipping.php');
}

//code to insert product detail
//check user for login
function insert_register1($table){
$this->table_name=$table;
global $con;	
$result=mysqli_query($con,"SELECT * FROM ".$this->table_name." WHERE email='$_POST[email]' AND password='$_POST[password]' ") or die(mysqli_error());
$result2 = mysqli_fetch_array($result);
if(mysqli_num_rows($result)>0){
session_start();
$_SESSION['user']=$result2['id'];
header('location:index.php');
}
else{
echo "<script>alert('Username or password is not correct')</script>";
}
}
//check user for login
function insert_register2($table){
$this->table_name=$table;
global $con;	
$result=mysqli_query($con,"SELECT * FROM ".$this->table_name." WHERE email='$_POST[email]' AND password='$_POST[password]' ") or die(mysqli_error());
$result2 = mysqli_fetch_array($result);
if(mysqli_num_rows($result)>0){
session_start();
$_SESSION['user']=$result2['id'];
header('location:shipping.php');
}
else{
echo "<script>alert('Username or password is not correct')</script>";
}
}

function insert_shipping($table){
$this->table_name=$table;
global $con;	

$result=mysqli_query($con,"INSERT INTO ".$this->table_name."(user_id,f_name,l_name,address,city,zip,country,f_name1,l_name1,address1,city1,zip1,country1) 
    value('$_POST[user_id]','$_POST[f_name]','$_POST[l_name]','$_POST[address]','$_POST[city]','$_POST[zip]','$_POST[country]','$_POST[f_name1]','$_POST[l_name1]','$_POST[address1]','$_POST[city1]','$_POST[zip1]','$_POST[country1]')") or die(mysqli_error());
				  
				   if($result)
				
echo "<script>alert('Data Saved Successfully')</script>";
header('location:payment.php');

}

}//closing of class
?>