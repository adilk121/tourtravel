<?php
require_once ('../includes/dbsmain.inc.php'); 
if(is_post_back()) {
if($changepass!=$confirmpass) {
$arr_error_msgs[] = "Password and retype password do not match ?";
}else{
$pass=db_scalar("select admin_password from tbl_admin where 1 and admin_id='".$_SESSION['sess_admin_login_id']."'");
  if($pass == $password) {
	   $sql2=db_query("update tbl_admin set admin_password='$changepass' where 1 and admin_id='".$_SESSION['sess_admin_login_id']."'");
		$arr_error_msgs[] = "Password Changed Successfully.";
	} else{
   $arr_error_msgs[] = "Invalid old password ?";
  }
 }
} 
?>
<?php include ('top.inc.php'); ?>
            <link href="styles.css" rel="stylesheet" type="text/css">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td id="pageHead"><div id="txtPageHead">Change Admin Password </div></td>
              </tr>
            </table>
            <div style="float:left; margin-left:490px;"><b><? include('error_msgs.inc.php');?></b></div>
            <form action="" method="post" name="form1" id="form1" onsubmit="return passValidation();">
              <table width="458" align="left" cellpadding="0" cellspacing="0" class="tableForm" style="margin-top:15px; margin-left:350px; border:2px outset #fff; padding:15px;">
                <tr>
                  <td width="160" class="tdLabel" style="padding:5px;"><b>Old&nbsp;Password&nbsp;:</b></td>
                  <td style="padding:5px;"><input type="password" name="password" id="password" class="textfield" style="width:233px; height:25px;">
                  </td>
                </tr>
                <tr>
                  <td class="tdLabel" style="padding:5px;"><b>New&nbsp;Password&nbsp;:</b></td>
                  <td style="padding:5px;"><input type="password" name="changepass" id="changepass" class="textfield" style="width:233px; height:25px;">
                  </td>
                </tr>
                <tr>
                  <td class="tdLabel" style="padding:5px;"><b>Confirm&nbsp;New&nbsp;Password&nbsp;:</b></td>
                  <td style="padding:5px;"><input type="password" name="confirmpass" id="confirmpass" class="textfield" style="width:233px; height:25px;">
                  </td>
                </tr>
                <tr>
                  <td class="label" style="padding:5px;">&nbsp;</td>
                  <td style="padding:5px;"><input type="image" name="imageField" src="images/buttons/submit.gif" /></td>
                </tr>
              </table>
            </form>
<script type="text/javascript">
function passValidation(){
function trim(str){				
 return str.replace(/^\s*|\s*$/g,'');
}
if(trim(document.getElementById('password').value)==0){		
  alert("Please enter old password !");
  document.getElementById('password').focus();
  return false;
 }
if(trim(document.getElementById('changepass').value)==0){		
  alert("Please enter new password !");
  document.getElementById('changepass').focus();
  return false;
 }
 if(trim(document.getElementById('confirmpass').value)==0){		
  alert("Please confirm new password !");
  document.getElementById('confirmpass').focus();
  return false;
 }
}
</script>			
            <?php include ('bottom.inc.php'); ?>
