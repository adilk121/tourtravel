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
                        <h2>Payment</h2>
                        <ul class="breadcrumb-inn">
                            <li><a href="<?=$site_url?>">Home</a></li>
                            <li class="active"><a>Payment</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php
$id=$_REQUEST['i'];
$res=mysqli_fetch_array(db_query("select * from tbl_booking where booking_id='$id' "));

?>

    <!-- About Page Start -->
<section class="peulis-about-page section_70">
  <div class="container">



<form action="<?=$site_url?>/thanks.html" method="post">

<input type="hidden" name="id" value="<?=$res['booking_id']?>" >


  <table class="table table-hover" >
    <thead>
      <tr>
       <th colspan=2><h2>Confirm Details</h2></th>
      </tr>
    </thead>
    <tbody>
     <tr>
  <td>
    <b>Name</b>
  </td>
  <td>
   <?=$res['booking_user_name']?>
  </td>
</tr>

<tr>
  <td>
     <b>Address</b>
  </td>
  <td>
    <?=$res['booking_user_address']?>
  </td>
</tr>

<tr>
  <td>
     <b> Email</b>
  </td>
  <td>
       <?=$res['booking_user_email']?>
  </td>
</tr>

<tr>
  <td>
   <b>  Phone</b>
  </td>
  <td>
       <?=$res['booking_user_mobile']?>
  </td>
</tr>


<tr>
  <td>
    <b> Tour Package</b>
  </td>
  <td>
   <?=$res['booking_package_name']?>
  </td>
</tr>

<tr>
  <td>
    <b> Seat(s) No.</b>
  </td>
  <td>
     <?=$res['booking_selected_seat']?>
    </td>
</tr>


<tr>
  <td>
    <b> Journey Date</b>
  </td>
  <td>
  <?=date('d-M-Y', strtotime($res['booking_date']))?>

  </td>
</tr>

<tr>
  <td>
    <b> Boarding Point</b>
  </td>
  <td>
     <?=$res['booking_pickup_point_name']?>
  </td>
</tr>

<tr>
  <td>
    <b> Total Amount</b>
  </td>
  <td>
      ₹<?=$res['booking_total_price']?>
  </td>
</tr>
    </tbody>
  </table>







<div class="row" style="margin-bottom: 20px;"> 
<div class="col-md-4 offset-md-4 jumbotron" >

  <center>
<input type="submit"  value="Pay Now" name="booking_now"  class="btn btn-success btn-lg">
</center>
</div>
</div>










</form>


        </div>
    </section>
    <!-- About Page End -->




   <?php //include("index-package-section.php"); ?>




<?php include("site-footer.php"); ?>