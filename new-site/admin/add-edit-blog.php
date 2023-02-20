<?php require_once("header.php");?>
<?php require_once("left-nav.php");?>

<link href="assets/plugins/icheck/skins/all.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap-toggle/bootstrap-toggle.min.css" rel="stylesheet" type="text/css"/>
<?php
$blog_id = $_GET['blog_id'];

if($_REQUEST['delImage']!=""){
$isDel=db_query("UPDATE  tbl_blog SET  blog_image_name='' WHERE 1 and blog_id = '$blog_id'");	
@unlink("../blog_images/$_REQUEST[delImage]");
header("location:add-edit-blog.php?blog_id=$blog_id");
}

if(is_post_back()) {
  $blog_title=$_REQUEST['blog_title'];
  $blog_description=$_REQUEST['blog_description'];
  $blog_status=$_REQUEST['blog_status'];
  $blog_subject=$_REQUEST['blog_subject'];
  
$blog_url=ami_crete_url($blog_title);


/* if($blog_title=='Home'){
  $pg_url='index';
 }else{
$pg_url=ami_crete_url($blog_title);
}
$ordBY=db_scalar("select MAX(header_flash_order_by) from tbl_blog where 1");
$ordBY=$ordBY+1;*/


if($blog_id!='') {

/*
		//////////// IMAGE RESIZING START HERE //////////////////////////
// Code Created By Amitabh Kumar Sinha : Web Developer : Webkey Network Pvt. Ltd.  //
//   DATE : 31:07:2014 //
//------------FUNCTION TO GET IMAGE EXTENSION START---------------//
 function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }
 //------------FUNCTION TO GET IMAGE EXTENSION END---------------//
 	$image =$_FILES["file"]["name"];
	$uploadedfile = $_FILES['file']['tmp_name']; 
 	if ($image) { 	
	    $DelImage=db_scalar("select blog_image_name from tbl_blog where 1 and blog_id = '$blog_id'");
	    @unlink("../blog_images/$DelImage");
 		$filename = stripslashes($_FILES['file']['name']); 	
  		$extension = getExtension($filename);
 		$extension = strtolower($extension);		
		$imgNAME = $pg_url.rand(1,10).".".$extension;

move_uploaded_file($_FILES['file']['tmp_name'],"../blog_images/$imgNAME");
}else{
$imgNAME=db_scalar("select blog_image_name from tbl_blog where 1 and blog_id = '$blog_id'");
}

  $sqlupdate = "update tbl_blog set 
                     blog_title='$blog_title', 
             blog_image_name='$imgNAME',
             header_flash_type='Main',
             blog_description='$blog_description',             
             blog_status='$blog_status'  
             where blog_id = '$blog_id' ";
      
  
                     db_query($sqlupdate);
            
             set_session_msg("Flash image updated successfully !");


*/

  if($_FILES['file']['name']!="")
  {
     $DelImg=db_scalar("select blog_image_name from tbl_blog where 1 and  blog_id = '$blog_id' ");
   @unlink("../blog_images/$DelImg");



$rand=rand(100,10000);
   $file_name6=$rand.$_FILES['file']['name'];
  move_uploaded_file($_FILES['file']['tmp_name'],"../blog_images/$file_name6");        

 
  $sql = "update tbl_blog set blog_image_name='$file_name6' where blog_id = '$blog_id' ";

   db_query($sql);
  }

 $sql = "update tbl_blog set 
        blog_title='$blog_title', 
        blog_subject='$blog_subject',
        blog_url='$blog_url',
             blog_description='$blog_description',             
             blog_status='$blog_status'  
             where blog_id = '$blog_id' ";
     db_query($sql);
            
             set_session_msg("Blog updated successfully !");



////////////               IMAGE RESIZING END HERE                       //
   
}else{
		  //*************** INSERT NEW CATEGORY START ************************//
/*
//------------FUNCTION TO GET IMAGE EXTENSION START---------------//
 function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }
 //------------FUNCTION TO GET IMAGE EXTENSION END---------------//
 	$image =$_FILES["file"]["name"];
	$uploadedfile = $_FILES['file']['tmp_name']; 
 	if ($image) { 	
 		$filename = stripslashes($_FILES['file']['name']); 	
  		$extension = getExtension($filename);
 		$extension = strtolower($extension);
		$imgNAME = $pg_url.rand(1,10).".".$extension;		


move_uploaded_file($_FILES['file']['tmp_name'],"../blog_images/$imgNAME");
}*/


$rand=rand(100,10000);
  $imgNAME=$rand.$_FILES['file']['name'];
  move_uploaded_file($_FILES['file']['tmp_name'],"../blog_images/$imgNAME");     


////////////****************** IMAGE RESIZING END HERE *****************************//
		 $sqlinsert = "insert into tbl_blog set 
		                 blog_title='$blog_title', 
                     blog_subject='$blog_subject',
                     blog_url='$blog_url',
						 blog_image_name='$imgNAME',			 
						 blog_description='$blog_description',						 
						 blog_status='$blog_status',
             blog_add_date=now()";
		                 db_query($sqlinsert);
						
						 set_session_msg("Blog added successfully !");
						 
		           
  }
	header("Location: manage-blogs.php");
	exit;
	
}
if($blog_id!=''){
	$sql="select * from tbl_blog where blog_id = '$blog_id'";	
	$result = db_query($sql);
	if ($line_raw = mysqli_fetch_array($result)) {
		$line = ms_form_value($line_raw);
		@extract($line);
	}
}
?>


         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-newspaper-o"></i>
               </div>
               <div class="header-title">
                  <h1>Edit Blog</h1>
                  <small>Edit Blog Content</small>
                  
                  
<a href="manage-blogs.php"><button id="btn-go-back" type="button" class="btn btn-labeled btn-inverse m-b-5 pull-right">
<span class="btn-label" ><i class="fa fa-chevron-circle-left"></i></span>Go Back
</button></a>

                  
               </div>
               
               
            </section>
            <!-- Main content -->
<script src="ckeditor/ckeditor.js"></script>            
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag" data-edit-title='false' data-close='false' data-reload='false'>
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4>General Information</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
<form name="form1" method="post" onsubmit="return formValidation()" enctype="multipart/form-data" class="col-sm-12" >
                             
                             

                            
<div class="form-group col-lg-6">
<label>Blog Image</label>
<?php if($blog_image_name!=""){ ?>
<img src="../blog_images/<?=$blog_image_name?>" class="form-control" style="width:360px;height:200px" />
<?php }else{?>
<img src="assets/dist/img/no-image.jpg" class="form-control" style="width:360px;height:200px" />
<?php }?>

<?php if($blog_image_name!=""){ ?>
<div class="col-lg-12 " ><a href="add-edit-blog.php?delImage=<?=$blog_image_name?>&blog_id=<?=$blog_id?>" style="font-weight:600;margin-left:15px;text-decoration:underline;margin-top:20px" >Remove Image</a>                  
</div>
<?php }?>

</div>

<div class="form-group col-lg-6" style="padding-top:100px">
<input type="file" name="file" id="file" />

 <p class="img-size">Widh : 700px, Height : 460px</p> 
</div>


                             
                            
<div class="form-group col-lg-12">
<label>Blog Title</label>
<input type="text" class="form-control" placeholder="Enter Title" name="blog_title" id="blog_title" value="<?=$blog_title?>" >
                             </div>

<div class="form-group col-lg-12">
<label>Blog Subject</label>
<input type="text" class="form-control" placeholder="Enter Subject" name="blog_subject" id="blog_subject" value="<?=$blog_subject?>" >
</div>
                             


                             <div class="form-group col-lg-12">
                                 <label>Blog Description</label>
 <textarea class="form-control" name="blog_description" rows="3" id="editor1"><?=$blog_description?></textarea>
                              </div>
                             
<script>

//CKEDITOR.replace( 'editor1');

  CKEDITOR.replace( 'editor1', {
        uiColor: '#ACACAC',
        toolbar: [
          [ 'Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
          [ 'FontSize', 'TextColor', 'BGColor' ]
        ]
      });

</script>

                              
                                            
                             
                             

                                                          
                            
                             
                            
                           
<div class="form-group col-lg-3">
<select name="blog_status" class="form-control" >
                      <option value="Active" <?php if($blog_status=='Active'){ ?> selected="selected" <? } ?>>Active</option>
                      <option value="Inactive" <?php if($blog_status=='Inactive'){ ?> selected="selected" <? } ?>>Inactive</option>
                    </select>


</div>                             
       


                             
                             
                             
                           
                              
                             
                              <div class="col-lg-12 reset-button">
                                                                 
                                 <button type="submit" class="btn btn-add">Update</button>
                                
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>
<?php require_once("footer.php"); ?>
 