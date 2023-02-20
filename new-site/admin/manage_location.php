<?php require_once("header.php");?>
<?php require_once("left-nav.php");?>
<?php require_once ('../includes/photoshop.php');?>


<?php



if(isset($_POST['submit_location'])){
@extract($_POST);
 if(isset($_GET['edit_id'])){ 

    $sql="update tbl_location set 
            location_name='$location_name'
       where location_id= '$_GET[edit_id]' ";
             db_query($sql);
       $_SESSION["msg"]="Location updated successfully !";
             header("Location:manage_location.php");
             exit;
}else{



    echo $sql="insert into tbl_location set 
           location_name ='$location_name',
       location_status='Active',
       location_add_date=now()";
       db_query($sql);
      $_SESSION["msg"]="Location added successfully !";
       header("Location:manage_location.php");
       exit;
    
  }
}     
if(isset($_GET['edit_id'])){
$sql="select * from tbl_location where location_id='$_GET[edit_id]'";
$result2=db_query($sql);
$data_new=mysqli_fetch_array($result2);
}

?>



         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-user" aria-hidden="true"></i>

               </div>
               <div class="header-title">
                  <h1> Locations</h1>
                  <small>Manage Location</small>
                  
                  
<!-- <a href="category_list.php"><button id="btn-go-back" type="button" class="btn btn-labeled btn-inverse m-b-5 pull-right">
<span class="btn-label" ><i class="fa fa-chevron-circle-left"></i></span>Go Back
</button></a> -->

                  
               </div>
               
               
            </section>
            <!-- Main content -->
<script src="ckeditor/ckeditor.js"></script>            
            <section class="content">
                          <?php if($_SESSION["msg"]!=""){?>               
<div class="alert alert-success alert-dismissable fade in text-center" style="background-color:#dff0d8;border:none; color:#000;margin:10px 0 10px 0">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!&nbsp;&nbsp;&nbsp;</strong> <?=$_SESSION["msg"]?>
  </div>
<?php 
unset($_SESSION["msg"]);
}?>  
       

               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag" data-edit-title='false' data-close='false' data-reload='false'>
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4>Add/Edit Location</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
<form name="form1" method="post" onsubmit="return formValidation()" enctype="multipart/form-data" class="col-sm-12" >





<div class="clearfix"></div>
<div class="form-group col-lg-12">
<label>Location Name</label>
<input type="text" class="form-control" placeholder="Enter Location Name" required name="location_name" id="location_name"  value="<?=$data_new['location_name']?>">
</div>

<!-- <div class="form-group col-lg-8">
<label>Attribute Value</label>
<input type="text" class="form-control" placeholder="Enter Attribute Values" name="attribute_values" id="attribute_values"  value="<?=$data_new['attribute_values']?>">
<i class="fa fa-question-circle" data-toggle="tooltip" title="Use comma to separate the value"></i>
<span style="color:red; font-size:11px; font-weight:bold;">Example: value1, value2, value3....</span>
</div> -->
                    




 <div class="col-lg-12 reset-button">
                                                                 
                                 <button type="submit" name="submit_location" onclick="return select_one()" id="submit_location" class="btn btn-add">Submit</button>
                                
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            
            
            <?php
            
            if($st!=""){
$st=$_REQUEST['st'];
$attID=$_REQUEST['pid'];

if($st==1){
$sql="UPDATE tbl_location SET location_status='Inactive' WHERE location_id='$attID'  ";	
$res=db_query($sql);	
if($res>0){
$_SESSION["msg"]="Selected location is deactivated successfully.";	
}	
}else{
$sql="UPDATE tbl_location SET location_status='Active' WHERE location_id='$attID' ";	
$res=db_query($sql);	
if($res>0){
$_SESSION["msg"]="Selected location is activated successfully.";	
}	
	
}

header("Location:manage_location.php");
exit;
}



if(is_post_back()) {
   $Arr_size=sizeof($arr_ids);
	$arr_ids = $_REQUEST['arr_ids'];
	if(is_array($arr_ids)) {
		$str_ids = implode(',', $arr_ids); 
		if(isset($_REQUEST['Activate']) || isset($_REQUEST['Activate_x']) ) {
			db_query("update tbl_location set location_status='Active' where   location_id in ($str_ids)");
			$_SESSION["msg"]="selected locations are activated. ";
		}else if(isset($_REQUEST['Deactivate']) || isset($_REQUEST['Deactivate_x']) ) {
			db_query("update tbl_location set location_status='Inactive' where  location_id in ($str_ids)");
						$_SESSION["msg"]="selected locations are deactivated. ";
		}else  if(isset($_REQUEST['Delete']) || isset($_REQUEST['Delete_x']) ) {
  
      db_query("delete from tbl_location where  location_id in ($str_ids) ");
      $_SESSION["msg"]="selected locations are deleted. ";
    
      }
header("Location:manage_location.php");
exit;

		
	}

}


$start = intval($start);
$pagesize = intval($pagesize)==0?$pagesize=DEF_PAGE_SIZE:$pagesize;

$order_by == '' ? $order_by = 'location_id' : true;
$order_by2 == '' ? $order_by2 = 'asc' : true;
 
$sql = "select * from tbl_location where 1  ";
$sql = apply_filter($sql, $location_name, 'like','location_name');
$sql .= " order by $order_by $order_by2 ";
$sql .= " limit $start, $pagesize ";
//echo $sql;
$pager = new midas_pager_sql($sql, $pagesize, $start);
if($pager->total_records) {
	$result = db_query($sql);
}
            ?>
            <section class="content">
               <div class="row">

<?php if($_SESSION["msg"]!=""){?>               
<div class="alert alert-success alert-dismissable fade in text-center" style="background-color:#dff0d8;border:none; color:#000;margin:10px 0 0 0">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!&nbsp;&nbsp;&nbsp;</strong> <?=$_SESSION["msg"]?>
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
                                 <h4> Location List</h4>
                              </a>
                           </div>
                        </div>
                        
                        



                        
                        <div class="panel-body">
                       
<? if($pager->total_records>0) {?>                       
                       
                           <div class="table-responsive">
<form action="" method="post" enctype="multipart/form-data">                           
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">                                      
                                       <th class="text-center">S.No.</th>            
                                       <th class="text-center">Name</th>   
                                       <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                       <th class="text-center"><input name="check_all" type="checkbox" id="check_all" value="1" onclick="checkall(this.form)" /></th>
                                    </tr>
                                 </thead>
                                 
<tbody>
           
           <style>
.val_sty{
   padding:4px;
padding-top: 2px;
   background-color: black;
   color: white;
   font-weight: bold;
   border-radius: 8px;
   font-size: 11px;
}
</style>                        
<?
$cnt=0;
while ($line_raw = mysqli_fetch_array($result)) {
	$line = ms_display_value($line_raw);
	@extract($line);
	$css = ($css=='trOdd')?'trEven':'trOdd';
?>                                   
                                    <tr>
                            
                            
                            <td class="text-center v-middle"><?=++$cnt?></td>
                            

                                     
<td class="v-middle" >
<p><?=$line_raw["location_name"]?></p>
</td>






<td class="text-center v-middle">
<?php if($line_raw["location_status"]=="Active"){?>
<a href="manage_location.php?st=1&pid=<?=$line_raw["location_id"]?>"><span class="label-custom label label-default">Active</span></a>
<?php }else{?>
<a href="manage_location.php?st=0&pid=<?=$line_raw["location_id"]?>"><span class="label-danger label label-default">Inactive</span></a>
<?php }?>

</td>
 



<td class="text-center v-middle">
<a href="manage_location.php?edit_id=<?=$line_raw["location_id"]?>"><button type="button" class="btn btn-add btn-sm" ><i class="fa fa-pencil"></i></button>
</a>                                          
</td>


<td class="text-center v-middle"><input name="arr_ids[]" type="checkbox" id="arr_ids[]" value="<?=$location_id?>" /></td>                                           
                                       
                                    </tr>
<?php
}
?>
                                    
<tr> <td colspan="9">


 <?php // if($_SESSION['sess_admin_type']=='Admin'){ ?>

<button  style="background-color:#CA0000;border:solid #CA0000" type="submit" name="Delete" onClick="return select_chk()"  class="btn btn-primary pull-left ml5 " >Delete</button>


                          
                          <? //} ?>


 


<button type="submit" name="Deactivate"  class="btn btn-danger pull-right mr5" >Make Inactive</button>

<button type="submit" name="Activate" class="btn btn-success pull-right mr5" >Make Active</button>

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
             
               <!-- /.modal -->
               <!-- Modal -->    
               <!-- Customer Modal2 -->
               
               <!-- /.modal -->
            </section>
            
            
            
            
            <!-- /.content -->
         </div>


         <script language="javascript" type="text/javascript">
function select_one(){

if(document.getElementById('admin_userid').value==0){   
alert("Enter Username !");
document.getElementById('admin_userid').focus();
return false;
}
if(document.getElementById('admin_password').value==0){   
alert("Enter Password !");
document.getElementById('admin_password').focus();
return false;
}

var chks = document.getElementsByName('access[]');
var hasChecked = false;
for (var i = 0; i < chks.length; i++){
if (chks[i].checked){
hasChecked = true;
break;
}else{
hasChecked = false;
}
}
if (hasChecked == false){
alert("Please select at least one access !");
return false;
}else{
return true;
}
}
</script>

<?php require_once("footer.php"); ?>
 