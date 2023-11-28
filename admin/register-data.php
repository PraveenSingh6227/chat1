<?php
include("include/admin-main.php"); 
    include("include/header.php");
	//require('../phpmailer/class.phpmailer.php');
	$obj=new admin();
    $reg_details=$obj->select_objData("register","order by id DESC");
?>	
<section class="wrapper">
    <!-- page start-->
    <section class="panel">
      <header class="panel-heading">Customer Details <span style="float:right"><a href="export-data.php"><i class="fa fa-download"></i> Download</a></span></header>
      <div class="panel-body">
        <div class="adv-table">
          <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
            <thead>
              <tr>
					<th style="display:none;">Seq. No</th>
					<th>Customer Details</th>
					<th>Message</th>
				  </tr>
            </thead>
            <tbody>
              <?php $a=1;
					while($row = mysqli_fetch_array($reg_details)){
					extract($row);
					//select count new message
					$rowCount = mysqli_num_rows(mysqli_query($con,"select id from `chatting_tbl` where user_id='$sessionId' and chatting_status='Not Read' and chatmessage_user IS NOT NULL"));
					?>
                      <tr class="gradeA">
                        <td class="center hidden-phone" style="display:none;"><?php echo $id;?></td>
						<td>ID:<?php echo $reg_id."<br>".$email."<br>".$dateTime;?><br><br>
						<a href="details.php?action=delete&id=<?php echo $row['id']; ?>" title="Delete">
                          <button class="" onClick="return confirm('Are you want to delete?')"><i class="icon-trash "></i></button>
                        </a>
						</td>
						<td><b>
						<?php 
						  echo '<span style="padding:5px; background-color:#0054a6; border-radius:100%;color:#fff;">'.$rowCount.'</span><br>';
						  echo '<a href="chatting.php?userid='.$sessionId.'" target="_blank" style="padding-top:5px;" id="chid"><font color="#0054a6"> <i class="fa fa-comment"></i> Chat With</font></a>';
						?></b>
						<br />
                        <a href="export-chat-data.php?chatid=<?php echo $sessionId?>&mobileno=<?php echo $email?>"><i class="fa fa-download"></i> Download</a>
						</td>
                      </tr>
			  <?php 
			   $a++;
			   } ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <!-- page end-->
  </section>