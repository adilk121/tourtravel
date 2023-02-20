<?php include("site-header.php"); ?>


<style>

    .seat-checkbox[type=checkbox] {
  display: none;
}
.seat-checkbox-label {
/*  border: 1px solid #000;*/
  display: inline-block;
  padding: 3px;
    background: white;
  /* background: url("unchecked.png") no-repeat left center; */ 
  /* padding-left: 15px; */
}
.seat-checkbox[type=checkbox]:checked + .seat-checkbox-label {
  background: green;
  color: #fff;
  /* background-image: url("checked.png"); */
}
</style>



    <!-- Breadcrumb Area Start -->
    <section class="peulis-breadcrumb-area">
        <div class="breadcrumb-top">
            <div class="container">
                <div class="col-lg-12">
                    <div class="breadcrumb-box">
                        <h2>Booking Details</h2>
                        <ul class="breadcrumb-inn">
                            <li><a href="<?=$site_url?>">Home</a></li>
                            <li class="active"><a>Booking Details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php

if(isset($_POST['booking_next_step']))
{
$booking_date=$_REQUEST['booking_date'];
$user_name=$_REQUEST['user_name'];
$user_mobile=$_REQUEST['user_mobile'];
$booking_pack_id=$_REQUEST['booking_pack_id'];
$booking_pack_name=$_REQUEST['booking_pack_name'];


$booking_pack_price=$_REQUEST['booking_pack_price'];
$booking_pickup_point_id=$_REQUEST['booking_pickup_point'];
$booking_pickup_point_name=db_scalar("select location_name from tbl_location where location_id='$booking_pickup_point_id' ");
$booking_selected_seat=implode(",", $_REQUEST['booking_seat']);
$no_of_person=sizeof($_REQUEST['booking_seat']);
$total=$no_of_person*$booking_pack_price;
$id=$_REQUEST['booking_last_id'];




$sql="update tbl_booking set
booking_package_price='$booking_pack_price',
booking_persons='$no_of_person',
booking_selected_seat='$booking_selected_seat',
booking_total_price='$total',
booking_pickup_point_id='$booking_pickup_point_id',
booking_pickup_point_name='$booking_pickup_point_name',
booking_user_email='',
booking_user_address='' where booking_id='$id' ";
if(db_query($sql))
{
 // echo "updated";
}



}



if(isset($_POST['booking_now']))
{
  $sql="update tbl_booking set
booking_user_name='$_REQUEST[booking_user_name]',
booking_user_email='$_REQUEST[booking_user_email]',
booking_user_address='$_REQUEST[booking_user_address]' where booking_id='$_REQUEST[update_id]' ";
//echo $sql;
if(db_query($sql))
{
header("location:payment.html?i=$_REQUEST[update_id]");
}
}

?>






    <!-- About Page Start -->
<section class="peulis-about-page section_70">
  <div class="container">



<form action="" method="post">


  <table class="table table-hover" >
    <thead>
      <tr>
       <th colspan=2><h2>Booking Details</h2></th>
      </tr>
    </thead>
    <tbody>
     <tr>
  <td>
    <b>Package Name</b>
  </td>
  <td>
   <?=$booking_pack_name?>
  </td>
</tr>

<tr>
  <td>
     <b> Seat No(s)</b>
  </td>
  <td>
     <?=$booking_selected_seat?>
  </td>
</tr>

<tr>
  <td>
     <b> No of Passengers(s)</b>
  </td>
  <td>
     <?=$no_of_person?>
  </td>
</tr>

<tr>
  <td>
   <b>  Pickup Point</b>
  </td>
  <td>
     <?=$booking_pickup_point_name?>
  </td>
</tr>


<tr>
  <td>
    <b> Travel Date</b>
  </td>
  <td>
  <?=date('d-M-Y', strtotime($booking_date))?>
  </td>
</tr>

<tr>
  <td>
    <b> Adult X <?=$no_of_person?></b>
  </td>
  <td>
  ₹<?=$booking_pack_price?>
  </td>
</tr>


<tr>
  <td>
    <b> Grand total</b>
  </td>
  <td>
      ₹<?=$total?>
  </td>
</tr>
    </tbody>
  </table>







<input type="hidden" name="update_id" value="<?=$id?>">

<div class="row" style="margin-bottom: 20px;"> 
<div class="col-md-4 offset-md-4 jumbotron" >

<h3 class="text-center">Traveller Detail</h3>
<hr>
  
<?php if($user_name==""){?>
<p>  <input type="text" class="form-control" name="booking_user_name" placeholder="Enter your name" required></p>
<?}else{?>
<input type="hidden" name="booking_user_name" value="<?=$user_name?>">
<?}?>

<p> <br> <input type="email" class="form-control" name="booking_user_email" placeholder="Enter your email" required></p>
<p> <br> <input type="text" class="form-control" name="booking_user_address" placeholder="Enter your address"  required></p>


<br>
  <center>
<input type="submit"  value="Book Now" name="booking_now"  class="btn btn-primary btn-lg">
</center>
</div>
</div>










</form>


        </div>
    </section>
    <!-- About Page End -->


   <?php  // include("index-package-section.php"); ?>




<?php include("site-footer.php"); ?>