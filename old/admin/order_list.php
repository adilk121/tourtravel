<?php
ob_start();
require_once("../includes/dbsmain.inc.php");
if(is_post_back()) {
	$arr_ids = $_REQUEST['arr_ids'];
	if(is_array($arr_ids)) {
		$str_ids = implode(',', $arr_ids); 
		if(isset($_REQUEST['Delete']) || isset($_REQUEST['Delete_x']) ) {
			db_query("delete from tbl_order where ord_id in ($str_ids)");
		}
	}
	header("Location: ".$_SERVER['HTTP_REFERER']);
	exit;
}

$start = intval($start);
$pagesize = intval($pagesize)==0?$pagesize=DEF_PAGE_SIZE:$pagesize;

$order_by == '' ? $order_by = 'ord_id' : true;
$order_by2 == '' ? $order_by2 = 'desc' : true;

$catgid=($_REQUEST[id]!=0) ? $_REQUEST[id] : 0;	 
$sql = "select * from tbl_order where 1 and ord_doj!='0000-00-00'";
$sql = apply_filter($sql, $ord_person_name, 'like','ord_person_name');

if($_REQUEST['ordST']!=''){
	if($_REQUEST['ordST']=='Paid'){
		$sql .= " and ord_status='Paid' ";
	}
	if($_REQUEST['ordST']=='Not Paid'){
		$sql .= " and ord_status='Not Paid' ";
	}
	if($_REQUEST['ordST']=='Failed'){
		$sql .= " and ord_status='Failed' ";
	}
}


if($_REQUEST['ord_doj']!=''){

$sql .= " and ord_doj='$_REQUEST[ord_doj]' AND  ord_status='Paid'";

}





//echo $sql;
$sql .= " order by $order_by $order_by2 ";
$sql .= " limit $start, $pagesize ";

$pager = new midas_pager_sql($sql, $pagesize, $start);
if($pager->total_records) {
	$result = db_query($sql);
}
?>
<link href="styles.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/javascript" src="../includes/general.js"></script>
<?php include("top.inc.php");?>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td id="pageHead"><div id="txtPageHead"> Order list </div></td>
              </tr>
            </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td id="content"><form method="get" name="form2" id="form2" onSubmit="return confirm_submit(this)">
                    <br />
                    <table  border="0" align="center" cellpadding="2" cellspacing="0" class="tableSearch" style="width:300px; height:90px;border:2px outset #fff;">
                      <tr align="center">
                        <th colspan="6" ><span style="float:left">Search</span> <span style="color:#03C; font-size:13px;float:right">*Select date to see paid order</span></th>
                      </tr>
                      <tr>
                        <td class="tdLabel" style="padding-top:10px">Name</td>
                        <td style="padding-top:10px">
<input name="ord_person_name" type="text" value="<?=$ord_person_name?>" placeholder=" Enter Name Here" style="width:200px; height:24px;" />
</td>

<td style="padding-top:10px">

<input name="ord_doj" type="date" value="<?=$ord_doj?>" style="width:200px; height:24px;" />
</td>
                        <td style="padding-top:10px">&nbsp;</td>
                        <td style="padding-top:10px"><input name="pagesize" type="hidden" id="pagesize" value="<?=$pagesize?>" /></td>
                        <td style="padding-top:10px">
                          <input type="image" name="imageField" src="images/buttons/search.gif" />
                         </td>
                      </tr>
                      
                      <?php if($_REQUEST['ord_person_name'] || $_REQUEST['ord_date']!=""){ ?>
                      <tr><td colspan="3" align="center"> 
                          <a href="order_list.php"><span style="vertical-align:top; margin-left:5px; font-size:12px; color:#0000CC; font-weight:bold; font-family:Arial, Helvetica, sans-serif;">View All</span></a>
                          </td></tr>
                          <? } ?>


                    </table>


                  </form>
                 
                  <br />
                  <? if($pager->total_records==0) {?>
                  <div class="msg">Sorry, no records found.</div>
                  <? } else { ?>
                  <div align="right">
                    <? $pager->show_displaying()?>
                  </div>
                  <div style="float:left;">Records Per Page:
                    <?=pagesize_dropdown('pagesize', $pagesize);?>
                  </div> <div style="font-size:14px; font-weight:600; text-align:center; margin-bottom:5px;">Filter By: <a href="order_list.php">All</a> &raquo; <a href="order_list.php?ordST=Paid" style="color:#006600;">Paid</a> &raquo; <a href="order_list.php?ordST=Not Paid" style="color:#0033CC;">Not Paid</a> &raquo; <a href="order_list.php?ordST=Failed" style="color:#FF0000;">Failed</a></div>
                 <form method="post" name="form1" id="form1" onsubmit="confirm_submit(this)">                 
                    <table width="100%"  border="0" cellpadding="0" cellspacing="1" class="tableList" style="border:1px outset #fff;">
                      <tr>
                        <th width="25%" nowrap="nowrap" style="font-size:12px; padding:9px;">Order For/ Order Amount</th>
                        <th width="8%" nowrap="nowrap" style="font-size:12px; padding:9px;">Vehicle</th>
                        <th width="6%" nowrap="nowrap" style="font-size:12px; padding:9px;">Name/Email/Mobile</th>
                        <th width="9%" nowrap="nowrap" style="font-size:12px; padding:9px;">Address</th>
						 <th width="5%" nowrap="nowrap" style="font-size:12px; padding:9px;">Person</th>
                        <th width="11%" nowrap="nowrap" style="font-size:12px; padding:9px;">Pickup</th>
                        <th width="11%" nowrap="nowrap" style="font-size:12px; padding:9px;">Booking From</th>
                        <th width="8%" nowrap="nowrap" style="font-size:12px; padding:9px;">Payment Status <?=sort_arrows('category_status')?></th>
                        <th width="14%" style="font-size:12px; padding:9px;">Book/Journey Date</th>
                        <th width="4%"><input name="check_all" type="checkbox" id="check_all" value="1" onclick="checkall(this.form)" /></th>
                      </tr>
                      <?php
							while ($line_raw = mysql_fetch_array($result)) {
								$line = ms_display_value($line_raw);
								@extract($line);
								$css = ($css=='trOdd')?'trEven':'trOdd';
							?>
                      <tr class="<?=$css?>" align="center">
                        <td style="font-size:12px;"><p><?=$ord_ord_name?></p><p><strong>( <?=$ord_amount?> )</strong></p></td>
                        <td style="font-size:12px;"><?=$ord_pack_type?></td>
                        <td style="font-size:12px;"><?=$ord_person_name?> <br/> <?=$ord_email?> <br/> <?=$ord_mobile?></td>
                        <td style="font-size:12px;"><?=$ord_adrs?></td>
						<td style="font-size:12px;"><?=$ord_person_no?></td>
                        <td style="font-size:12px;"><?=$ord_pickup_point?></td>
                        <td style="font-size:12px;"><?=$ord_web_url?></td>
                        <td nowrap="nowrap" style="font-size:12px;">
						
<?php if($ord_status=="Paid"){?>						
<span style="color:green;font-weight:600"><?=$ord_status?></span>
<?php }?>

<?php if($ord_status=="Not Paid"){?>						
<span style="color:blue;font-weight:600"><?=$ord_status?></span>
<?php }?>


<?php if($ord_status=="Failed"){?>						
<span style="color:red;font-weight:600"><?=$ord_status?></span>
<?php }?>

                        
                        </td>
                        <td nowrap="nowrap" style="font-size:12px;">
                        <p><strong style="color:#0000CC;"><?=$ord_date?></strong></p>
                        <p style="margin-bottom:7px; color:#006600;"><strong><?=$ord_doj?></strong></p>
                        </td>
                        <td align="center"><input name="arr_ids[]" type="checkbox" id="arr_ids[]" value="<?=$ord_id?>" /></td>
                      </tr>
                      <? } ?>
                    </table>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td align="right" style="padding:2px">
                          <?php if($_SESSION['sess_admin_type']=='Admin'){ ?>
                          <input type="submit" name="Delete" value="Delete" class="button" onClick="return select_chk()" style="font-size:14px; font-weight:bold; height:34px; background-color:#CA0000; border-radius:4px; cursor:pointer; width:110px;"/>
                          <? } ?>
                        </td>
                      </tr>
                    </table>
                  </form>
                  <? $pager->show_pager();?>
                  <? } ?>
                </td>
              </tr>
            </table>
<script language="javascript">
function select_chk(){
var chks = document.getElementsByName('arr_ids[]');
var hasChecked = false;
for (var i = 0; i < chks.length; i++){
if (chks[i].checked){
  hasChecked = true;
  break;
  }
}
if (hasChecked == false){
alert("Please Select At Least One.");
return false;
}
}
</script>            
<?php include("bottom.inc.php");?>

