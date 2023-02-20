<?php
require_once("../includes/dbsmain.inc.php");
$headerID=$_REQUEST['header_id'];
$DelImageId=$_REQUEST['DelID'];
 if(!empty($DelImageId)){ 
   $DelImg=db_scalar("select $DelImageId from tbl_header where 1");
   @unlink("../header_files/$DelImg");
   $sqldel="update tbl_header set $DelImageId='' where 1 and header_id='$headerID'";
   db_query($sqldel);
   set_session_msg("Header Updated Successfully !");
   header("Location: header_f.php?header_id=$headerID");
   exit;
 }

if(is_post_back()) {

$result3 = db_scalar("select header_logo from tbl_header where 1");
$result4 = db_scalar("select header_welcome_image from tbl_header where 1");
	
	
if($_FILES['header_logo']['name']){
	$DelHLImage=db_scalar("select header_logo from tbl_header where 1");
	@unlink("../header_files/$DelHLImage");
	$file_name6=$_FILES['header_logo']['name'];
	move_uploaded_file($_FILES['header_logo']['tmp_name'],"../header_files/$file_name6");        
	$sql_edit6=",header_logo='$file_name6'";
}else{
$sql_edit6=",header_logo='$result3'";
}
if($_FILES['header_welcome_image']['name']){
	$DelHWImage=db_scalar("select header_welcome_image from tbl_header where 1");
	@unlink("../header_files/$DelHWImage");
	$file_name7=$_FILES['header_welcome_image']['name'];
	move_uploaded_file($_FILES['header_welcome_image']['tmp_name'],"../header_files/$file_name7");        
	$sql_edit7=",header_welcome_image='$file_name7'";
}else{
$sql_edit7=",header_welcome_image='$result4'";
}

$delquery=db_query("truncate table tbl_header");

$sql = "insert into tbl_header set 
		  header_status='Active'
		  $sql_edit6
		  $sql_edit7,
		  header_add_date=now()";
		  db_query($sql);
		  set_session_msg("Header Added Successfully !");
		  header("Location: manage-header.php");
		  exit;
 }
if($headerID!='') {
	$result = db_query("select * from tbl_header where header_id = '$headerID'");
	if ($line_raw = mysqli_fetch_array($result)) {
		@extract($line_raw);
	}
}
?>
<link href="styles.css" rel="stylesheet" type="text/css">
<?php include("top.inc.php");?>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td id="pageHead"><div id="txtPageHead"> Add/Edit Header Image</div></td>
              </tr>
            </table>
            <div align="right" style="font-size:12px; font-weight:bold; margin-right:10px;"><a href="manage-header.php">Back to Header List</a>&nbsp;</div>
            <strong class="msg" style="margin-left:500px; margin-bottom:5px;">
            <?=display_sess_msg()?>
            </strong>
            <form name="form1" method="post" enctype="multipart/form-data">
              <table width="55%"  border="0" align="center" cellpadding="0" cellspacing="0" class="tableForm" style="border:1px outset #fff;">
                <?php if($header_logo){?>
                <tr>
                  <td width="30%" class="tdLabel" style="padding:8px;"><b style="color:#316200;">Current Logo  :</b></td>
                  <td width="70%" align="left" class="tdData" style="padding:8px;"><img src="../header_files/<?=$header_logo?>" height="60" width="60"  border="0"> <a href="header_f.php?DelID=header_logo&header_id=<?=$_REQUEST['header_id']?>" title="Delete Image"><span style="float:right; margin-right:15px;"><img src="images/no.gif" style="vertical-align:middle;" /></span></a></td>
                </tr>
                <? } ?>
                <tr>
                  <td width="30%" class="tdLabel" style="padding:8px;"><b>Header  Logo :</b></td>
                  <td width="70%" class="tdData" style="padding:8px;"><input type="file" name="header_logo" id="header_logo"></td>
                </tr>
              </table>
              <table width="55%"  border="0" align="center" cellpadding="0" cellspacing="0" class="tableForm" style="border:1px outset #fff; margin-top:5px;">
                <?php if($header_welcome_image){?>
                <tr>
                  <td width="30%" class="tdLabel" style="padding:8px;"><b style="color:#316200;">Current Welcome Image  :</b></td>
                  <td width="70%" class="tdData" style="padding:8px;"><img src="../header_files/<?=$header_welcome_image?>" height="60" width="60"  border="0"><a href="header_f.php?DelID=header_welcome_image&header_id=<?=$_REQUEST['header_id']?>" title="Delete Image"><span style="float:right; margin-right:15px;"><img src="images/no.gif" style="vertical-align:middle;" /></span></a></td>
                </tr>
                <? } ?>
                <tr>
                  <td width="30%" class="tdLabel" style="padding:8px;"><b>Header Welcome Image :</b></td>
                  <td width="70%" class="tdData" style="padding:8px;"><input type="file" name="header_welcome_image" id="header_welcome_image"></td>
                </tr>
              </table>
              <table width="55%"  border="0" align="center" cellpadding="0" cellspacing="0" class="tableForm" style="border:1px outset #fff; margin-top:5px; margin-bottom:10px;">
                <tr>
                  <td width="30%" class="tdLabel" style="padding:8px;">&nbsp;</td>
                  <td width="70%" class="tdData" style="padding:8px;"><input type="submit" name="HeaderSubmit" value="Submit" class="button" style="font-size:13px; font-weight:bold; height:27px; background-color:#006BD7; border-radius:4px; cursor:pointer; width:100px;"/></td>
                </tr>
              </table>
            </form>
            <?php include("bottom.inc.php");?>
