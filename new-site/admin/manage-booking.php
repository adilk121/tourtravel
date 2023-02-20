<?php require_once("header.php");?>
<?php require_once("left-nav.php");?>
<style>
.v-middle {
vertical-align:middle !important;
}
</style>






<?php
if(is_post_back()) {
     $Arr_size=sizeof($arr_ids);
     
   $arr_ids = $_REQUEST['arr_ids'];
   if(is_array($arr_ids)) {
      $str_ids = implode(',', $arr_ids); 
      if(isset($_REQUEST['Delete']) || isset($_REQUEST['Delete_x']) ) {
         db_query("delete from  tbl_booking where booking_id in ($str_ids)");
         
          $_SESSION["msg"]="Selected booking is deleted successfully."; 
          
      }  else if(isset($_REQUEST['Paid']) || isset($_REQUEST['Paid_x']) ) {
         $res=db_query("update  tbl_booking set booking_payment_status = 'Paid' where booking_id in ($str_ids)");
          $_SESSION["msg"]="Selected booking is paid successfully."; 
         
      }  else if(isset($_REQUEST['Unpaid']) || isset($_REQUEST['Unpaid_x']) ) {
         $res=db_query("update  tbl_booking set booking_payment_status = 'Pending' where booking_id in ($str_ids)");
          $_SESSION["msg"]="Selected booking is unpaid successfully."; 
         
      }
   }

   header("Location: ".$_SERVER['HTTP_REFERER']);
   exit;
}


if($_REQUEST['search_value'])
{
 $search_con="and booking_user_name like '%$_REQUEST[search_value]%' OR booking_user_email like '%$_REQUEST[search_value]%' OR booking_user_mobile like '%$_REQUEST[search_value]%' OR booking_payment_status='$_REQUEST[search_value]' ";
 
}


$start = intval($start);
$pagesize = intval($pagesize)==0?$pagesize=DEF_PAGE_SIZE:$pagesize;

$order_by == '' ? $order_by = 'booking_id' : true;
$order_by2 == '' ? $order_by2 = 'desc' : true;
 
$sql = "select * from  tbl_booking   where 1 $search_con";
$sql = apply_filter($sql, $reg_name, 'like','booking_package_name');
$sql .= " order by $order_by $order_by2 ";
$sql .= " limit $start, $pagesize ";
//echo $sql;
$pager = new midas_pager_sql($sql, $pagesize, $start);
if($pager->total_records) {
   $result = db_query($sql);
}
?>

<script language="JavaScript" type="text/javascript" src="../includes/general.js"></script>

         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-user-circle-o" aria-hidden="true"></i>

               </div>
               <div class="header-title">
                  <h1>Booking
                  
<?php /*?><a href="add-user.php"><button class="btn btn-success pull-right bold " ><i class="fa fa-user-circle-o fa-lg font-black"></i> Add User</button></a><?php */?>

                  
                  </h1>
                  <small>Booking List</small>

                  
                  
               </div>


           
               
            </section>
            <!-- Main content -->
            <section class="content">


              <div class="row">
    
    <div class="col-lg-6">
<form action="" method="get">
    <input type="text" required name="search_value" value="<?=$_REQUEST['search_value']?>" placeholder="Name/Email/Phone/Paid/Pending" style="width:250px;">
    <input type="submit" value="Search" >
<?php
if($_REQUEST['search_value']!=""){?>
<a href="manage-booking.php">Clear</a>
<?}?>
</form>
</div>

 <div class="col-lg-6 text-right">
<select onchange="set_filter(this.value)">
    <option value="All" <?php if($_REQUEST['filter_value']=="All"){?> selected <?}?> >All</option>
    <option value="Complete" <?php if($_REQUEST['filter_value']=="Complete"){?> selected <?}?>>Complete</option>
    <option value="Incomplete" <?php if($_REQUEST['filter_value']=="Incomplete"){?> selected <?}?>>Incomplete</option>
</select>    
</div> 



</div>

               <div class="row">

<?php if($_SESSION["msg"]!=""){?>               
<div class="alert alert-success alert-dismissable fade in text-center" style="background-color:#dff0d8;border:none; color:#000;margin:10px 0 0 0">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!&nbsp;&nbsp;&nbsp;</strong> <?=$_SESSION["msg"]?>.
  </div>
<?php 
unset($_SESSION["msg"]);
}?>     

<div class="col-lg-12">

<? if($pager->total_records!=0) {?>
<div class="col-lg-6 text-left" >
<? $pager->show_displaying()?>
</div>
<div class="col-lg-6 text-right" >Records Per Page:
<?=pagesize_dropdown('pagesize', $pagesize);?>
</div>
<?php
}
?>

</div>


                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag" data-edit-title='false' data-close='false' data-reload='false'>
                        
                        
                           
                        
                        
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4>Booking List</h4>
                              </a>
                           </div>
                        </div>
                        
                        



                        
                        <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
<? if($pager->total_records>0) {?>                           
                           
                           <div class="table-responsive">
<form action="" method="post" enctype="multipart/form-data">                           
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">                                      
                                       <th class="text-center">S.No.</th>            
                                       <th class="text-center">User Info.</th>                                       
                                       <th class="text-center">Travel Date</th>
                                       <th class="text-center">Booking Details</th>
                                       <th class="text-center">Payment Status</th>
                                      <!--  <th class="text-center">Action</th>-->
                                       <th class="text-center"><input name="check_all" type="checkbox" id="check_all" value="1" onclick="checkall(this.form)" /></th> 
                                    </tr>
                                 </thead>
                                 
<tbody>
                                   
<?
$cnt=0;
while ($line_raw = mysqli_fetch_array($result)) {
   $line = ms_display_value($line_raw);
   @extract($line);
   $css = ($css=='trOdd')?'trEven':'trOdd';
?>                                   
                                    <tr>
                            
                            
                            <td class="text-center v-middle"><?=++$cnt?></td>
                                     
<td class="text-left v-middle"> 

<p><?=$line_raw["booking_user_name"]?></p>
<p><?="<strong>Phone : </strong>".$line_raw["booking_user_mobile"]?></p>
<p><?="<strong>Email : </strong>".$line_raw["booking_user_email"]?></p>     
<p><?="<strong>Address : </strong>".$line_raw["booking_user_address"]?></p>     
</td>
                                     
<td class="text-center v-middle">
<p class="bg-yellow bold"><?=date("d M y",strtotime($line_raw["booking_date"]))?></p>
</td>


<td class="text-left v-middle">
    <p><?="<strong>Order Id : </strong> ATB".$line_raw["booking_id"]?></p>
<p><?=$line_raw["booking_package_name"]?></p>
<p><?="<strong>No of person : </strong>".$line_raw["booking_persons"]?></p>
<p><?="<strong>Seat no : </strong>".$line_raw["booking_selected_seat"]?></p>     
<p><?="<strong>Pickup Point : </strong>".$line_raw["booking_pickup_point_name"]?></p>     
<p><?="<strong>Total Amount : </strong>₹".$line_raw["booking_total_price"]?></p>     

</td>

<td class="text-center v-middle">
    
<?php
if($line_raw["booking_payment_status"]=="Paid")
{?>
<span class="label-custom label label-default"><?=$line_raw["booking_payment_status"]?></span>
<?}else{?>
<span class="label-custom label label-default" style="background-color:orange !important;"><?=$line_raw["booking_payment_status"]?></span>
<?}?>
<?php /*if($line_raw["reg_status"]=="Active"){?>
<a href="manage-booking.php?st=1&pid=<?=$line_raw["reg_id"]?>"><span class="label-custom label label-default">Active</span></a>
<?php }else{?>
<a href="manage-booking.php?st=0&pid=<?=$line_raw["reg_id"]?>"><span class="label-danger label label-default">Inactive</span></a>
<?php }*/?>

</td>
                                   <?/*    <td class="text-center v-middle">

<!-- <p><a href="javascript:void(0);" onClick ="PopupWindowCenter('registration_detail.php?user_id=<?=$reg_id?>&user_type=<?=$reg_user_type?>', 'PopupWindowCenter',1000,400)"><strong style="font-size:12px;"><button type="button" class="btn btn-view btn-sm" ><i class="fa fa-search"></i></button></strong></a>   -->
<p><a href="registration_detail.php?user_id=<?=$reg_id?>&user_type=<?=$reg_user_type?>" target="_blank" ><strong style="font-size:12px;"><button type="button" class="btn btn-view btn-sm" ><i class="fa fa-search"></i></button></strong></a>  

</p>

<!-- <p><a href="add-user.php?reg_id=<?=$line_raw["reg_id"]?>"><button type="button" class="btn btn-add btn-sm" ><i class="fa fa-pencil"></i></button>
</a> </p> -->

<p><a href="manage-booking.php?del_id=<?=$line_raw["reg_id"]?>"><button type="button" class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></button>
</a> </p>                                         
                                       </td>

*/?>  
<td class="text-center v-middle"><input name="arr_ids[]" type="checkbox" id="arr_ids[]" value="<?=$booking_id?>" /></td>      
                                   
                                       
                                    </tr>
<?php
}
?>
                                    
 <tr> <td colspan="6">

<button class="btn btn-danger pull-left" type="submit" name="Delete"><i class="fa fa-trash-o"></i>&nbsp;Delete</button>

<button type="submit" name="Unpaid"  class="btn btn-warning pull-right " >Make Unpaid</button>

<button type="submit" name="Paid" class="btn btn-success pull-right mr5" >Make Paid</button>
</td></tr>                                   
                                    
                                    
                                 </tbody>
</form>
                              </table>
                              
<? $pager->show_pager();?>
                                             
                              
                           </div>
<?php }else{?>
<div class="col-lg-12 msg text-center">Sorry, no records found.</div>
<?php }?>
                                  
                           
                        </div>
                     </div>
                  </div>
               </div>
               <!-- customer Modal1 -->
               
               <!-- /.modal -->
               <!-- Modal -->    
               <!-- Customer Modal2 -->
               
               <!-- /.modal -->
            </section>
            <!-- /.content -->
         </div>
<?php require_once("footer.php"); ?>