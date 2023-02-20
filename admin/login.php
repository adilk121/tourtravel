<?php
ob_start();
require_once("../includes/dbsmain.inc.php");

if(is_post_back()) {
 	$sql="select * from tbl_admin where admin_userid='$_POST[login_id]' and admin_status = 'Active'";
	$result = db_query($sql);
	if ($line_raw = mysqli_fetch_assoc($result)) {
		@extract($line_raw);
		if ($admin_password==$_POST['password']) {
			$_SESSION['sess_admin_login_id'] = $admin_id;
			$_SESSION['user_id']=$admin_id;
			$_SESSION['user_name']=$admin_name;
			$_SESSION['ADMIN_ACCESS'] = $admin_access;
			$_SESSION['sess_admin_type'] = $admin_user_type;
			if($return_page=='') {
				header("location: index.php");
				exit;
			} else {
				header("location: ".$return_page);
				exit;
			}
		} else {
			$arr_error_msgs[] = "Invalid Login ID or Password";
		}
	} else {
		$arr_error_msgs[] = "Invalid Login ID or Password";
	}
}
?>

<link href="styles.css" rel="stylesheet" type="text/css">
<? include("top.inc.php");?>

<form action="" method="post">
  <table width="368"  border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="368" align="left"><img src="images/secure_login.gif" alt="Main Administrator Login" /></td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td valign="top"><b><?php include("error_msgs.inc.php");?></b></td>
    </tr>
    <tr>
      <td><table width="100%"  border="0" cellpadding="15" cellspacing="1" bgcolor="#CFCFCF">
          <tr>
            <td bgcolor="#F5F5F5"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="13%" align="left"><img src="images/icons/keys.gif" width="32" height="32" /></td>
                  <td width="87%" align="left" valign="top"><span style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; color:#1E518F; font-weight:bold">Welcome to <?php echo SITE_NAME ?> Administration Suite!</span></td>
                </tr>
                <tr>
                  <td align="left">&nbsp;</td>
                  <td align="left" valign="top" class="blue_txt">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="2" align="left"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="34%" valign="top" class="txtLight">Please enter a valid username and password to gain access to the administration console.</td>
                        <td width="66%" align="right" valign="top"><table width="80%"  border="0" cellpadding="7" cellspacing="1" bgcolor="#CFCFCF">
                            <tr>
                              <td bgcolor="#EFEFEF"><table width="100%"  border="0" cellspacing="0" cellpadding="1">
                                  <tr>
                                    <td align="left"><strong>Username</strong></td>
                                  </tr>
                                  <tr>
                                    <td align="left"><input name="login_id" type="text" class="textfield" id="login_id" value="<?=$login_id?>" size="30" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left"><strong>Password</strong></td>
                                  </tr>
                                  <tr>
                                    <td align="left"><input name="password" type="password" class="textfield" value="<?=$password?>" size="30" /></td>
                                  </tr>
                                  
                                  <tr>
                                    <td align="right" style="padding-top:5px"><input type="image" src="images/buttons/submit.gif" alt="Submit" border="0" /></td>
                                  </tr>
                              </table></td>
                            </tr>
                        </table></td>
                      </tr>
                  </table></td>
                </tr>
            </table></td>
          </tr>
      </table></td>
    </tr>
  </table>
</form>
<? include("bottom.inc.php");?>