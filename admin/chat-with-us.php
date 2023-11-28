<?php 
 include('config.php');
 $sessionID = $_POST['userId'];
 if(isset($_POST['action']) && $_POST['action']==0){
   $ins_chat_Q = mysqli_query($con,"INSERT INTO `chatting_tbl` SET user_id='$sessionID',chatmessage_vendor='$_POST[mess]'") or die(mysqli_error($con));
   //get all data
   $sel_all_Q = mysqli_query($con,"SELECT * FROM `chatting_tbl` WHERE user_id='$sessionID'") or die(mysqli_error());
   $userMessage='<div class="messages chat" id="chatContainer">';
   while($data=mysqli_fetch_array($sel_all_Q)){
   if(!empty($data['chatmessage_user'])){
      $userMessage.='<div class="chat stark"><p>'.$data['chatmessage_user'].'</p></div>';
	}
	 if(!empty($data['chatmessage_vendor'])){
       $userMessage.='<div class="chat parker" align="right">'.$data['chatmessage_vendor'].'</div>';
	 }
   }
   $userMessage.="</div>";
   
   echo $userMessage;
 }else if(isset($_POST['action']) && $_POST['action']==2){
    //get all data
   $sel_all_Q = mysqli_query($con,"SELECT * FROM `chatting_tbl` WHERE user_id='$sessionID'") or die(mysqli_error());
   $userMessage='<div class="messages chat" id="chatContainer">';
   while($data=mysqli_fetch_array($sel_all_Q)){
   if(!empty($data['chatmessage_user'])){
      $userMessage.='<div class="chat stark">'.$data['chatmessage_user'].'</div>';
	}
	 if(!empty($data['chatmessage_vendor'])){
       $userMessage.='<div class="chat parker" align="right">'.$data['chatmessage_vendor'].'</div>';
	 }
   }
   $userMessage.="</div>";
   echo $userMessage;
 }else{
   echo 0;
 }
?> 