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
                        <h2>Booking</h2>
                        <ul class="breadcrumb-inn">
                            <li><a href="<?=$site_url?>">Home</a></li>
                            <li class="active"><a>Booking</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
$user_name="";
$user_mobile="";
$booking_date="";
$booking_pack_id="";
$booking_pack_name="";
$booking_pack_price="";


if(isset($_POST['submit_booking']))
{
$user_name=$_REQUEST['booking_name'];
$user_mobile=$_REQUEST['booking_mobile_no'];
$booking_pack_id=$_REQUEST['booking_package_id'];
$booking_date=$_REQUEST['booking_date'];
$booking_pack_name=db_scalar("select category_name from tbl_category where category_id='$booking_pack_id' ");
$booking_pack_price=db_scalar("select category_discount_price from tbl_category where category_id='$booking_pack_id' ");

$sql="insert into tbl_booking set
booking_date='$booking_date',
booking_package_id='$booking_pack_id',
booking_package_name='$booking_pack_name',
booking_user_name='$user_name',
booking_user_mobile='$user_mobile',
booking_payment_status='Pending',
booking_add_date=now()";
if(db_query($sql))
{
$last_id=db_scalar("select max(booking_id) from tbl_booking");
}


}



?>






    <!-- About Page Start -->
    <section class="peulis-about-page section_70" style=" background-color: lightgray;  ">
        <div class="container">

<div class="row" style="margin-bottom: 20px;">
<div class="col-md-6 offset-md-3" >
    <h2 class="text-center" ><strong><?=$booking_pack_name?></strong></h2>
    <br>  <br>
    
 <div class="row" >   
<div class="col-md-4">
Available Seat : &nbsp;<span style="border:solid white; border-width:10px;"></span>
</div>

<div class="col-md-4">
Selected Seat : &nbsp;<span style="border:solid green; border-width:10px;"></span>
</div>

<div class="col-md-4">
Booked Seat : &nbsp;<span style="border:solid red; border-width:10px;"></span>
</div>
</div>

<!--  <div class="row">   
<div class="col-md-4">
Seat No. :1,2,3,4
</div>

<div class="col-md-4">
Base Fare :₹700
</div>

<div class="col-md-4">
Total Fare :₹2800
</div>
</div> -->


</div>


</div>

<form action="<?=$site_url?>/final-booking.html" method="post">

<input type="hidden" name="booking_date" value="<?=$booking_date?>">
<input type="hidden" name="user_name" value="<?=$user_name?>">
<input type="hidden" name="user_mobile" value="<?=$user_mobile?>">
<input type="hidden" name="booking_pack_id" value="<?=$booking_pack_id?>">
<input type="hidden" name="booking_pack_name" value="<?=$booking_pack_name?>"> 
<input type="hidden" name="booking_pack_price" value="<?=$booking_pack_price?>">
<input type="hidden" name="booking_last_id" value="<?=$last_id?>">




<div class="row" style="margin-bottom: 20px;"> 
<div class="col-md-4 offset-md-4" >
<div class="book-tour-field clearfix">
<select class="wide" name="booking_pickup_point" id="booking_pickup_point" onchange="get_seat_status(this.value)">

<option value=""> --- Select Pickup Point --- </option>
<?php
$loca_sql=db_query("select * from tbl_location where location_status='Active' order by location_id asc ");
while($loca_res=mysqli_fetch_array($loca_sql))
{?>
<option value="<?=$loca_res['location_id']?>"><?=$loca_res['location_name']?></option>
<?}?>
</select>
</div>
</div>
</div>


<div class="row" style="margin-bottom: 20px;">
 <div class="col-lg-12" id="show_seat_status">


<table width="100%" style="display:none;">
<tr align="right">
<td>4<label ><input type="checkbox" name="booking_seat[]" value="4" class="seat-checkbox" ><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>8<label ><input type="checkbox" name="booking_seat[]" value="8" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>12<label ><input type="checkbox" name="booking_seat[]" value="12" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>16<label ><input type="checkbox" name="booking_seat[]" value="16" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>20<label ><input type="checkbox" name="booking_seat[]" value="20" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>24<label ><input type="checkbox" name="booking_seat[]" value="24" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>28<label ><input type="checkbox" name="booking_seat[]" value="28" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>32<label ><input type="checkbox" name="booking_seat[]" value="32" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>36<label ><input type="checkbox" name="booking_seat[]" value="36" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>40<label ><input type="checkbox" name="booking_seat[]" value="40" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td style="text-align:right;">45
    <label ><input type="checkbox" name="booking_seat[]" value="45" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
</tr>


<tr align="right">
<td>3<label ><input type="checkbox" name="booking_seat[]" value="3" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>7<label ><input type="checkbox" name="booking_seat[]" value="7" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>11<label ><input type="checkbox" name="booking_seat[]" value="11" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>15<label ><input type="checkbox" name="booking_seat[]" value="15" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>19<label ><input type="checkbox" name="booking_seat[]" value="19" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>23<label ><input type="checkbox" name="booking_seat[]" value="23" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>27<label ><input type="checkbox" name="booking_seat[]" value="27" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>31<label ><input type="checkbox" name="booking_seat[]" value="31" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>35<label ><input type="checkbox" name="booking_seat[]" value="35" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>39<label ><input type="checkbox" name="booking_seat[]" value="39" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td style="text-align:right;">44
    <label ><input type="checkbox" name="booking_seat[]" value="44" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
</tr>


<tr align="center">
<td colspan="11" align="right">43
    <label ><input type="checkbox" name="booking_seat[]" value="43" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

</tr>


<tr align="right">
<td>2<label ><input type="checkbox" name="booking_seat[]" value="2" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>6<label ><input type="checkbox" name="booking_seat[]" value="6" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>10<label ><input type="checkbox" name="booking_seat[]" value="10" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>14<label ><input type="checkbox" name="booking_seat[]" value="14" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>18<label ><input type="checkbox" name="booking_seat[]" value="18" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>22<label ><input type="checkbox" name="booking_seat[]" value="22" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>26<label ><input type="checkbox" name="booking_seat[]" value="26" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>30<label ><input type="checkbox" name="booking_seat[]" value="30" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>34<label ><input type="checkbox" name="booking_seat[]" value="34" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>38<label ><input type="checkbox" name="booking_seat[]" value="38" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td style="text-align:right;">42
    <label ><input type="checkbox" name="booking_seat[]" value="42" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
</tr>


<tr align="right">
<td>1<label ><input type="checkbox" name="booking_seat[]" value="1" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>5<label ><input type="checkbox" name="booking_seat[]" value="5" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>9<label ><input type="checkbox" name="booking_seat[]" value="9" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>13<label ><input type="checkbox" name="booking_seat[]" value="13" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>17<label ><input type="checkbox" name="booking_seat[]" value="17" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>21<label ><input type="checkbox" name="booking_seat[]" value="21" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>25<label ><input type="checkbox" name="booking_seat[]" value="25" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>29<label ><input type="checkbox" name="booking_seat[]" value="29" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>33<label ><input type="checkbox" name="booking_seat[]" value="33" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td>37<label ><input type="checkbox" name="booking_seat[]" value="37" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
<td style="text-align:right;">41
    <label ><input type="checkbox" name="booking_seat[]" value="41" class="seat-checkbox"><span  class="seat-checkbox-label"><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
</tr>
</table>

 
                </div>
            </div>







<div class="row">
<div class="col-md-4 offset-md-4" >
<div class="book-tour-field clearfix text-center">
<input type="submit"  value="continue" name="booking_next_step" class="btn btn-primary btn-lg" onclick="return validate_continue()" >
</div>
</div>
</div>




</form>


        </div>
    </section>
    <!-- About Page End -->

<script>
  function get_seat_status(location_id)
  {
   /* alert("Location id "+location_id);
    alert("Pack id <?=$booking_pack_id?>");
    alert("booking <?=$booking_date?>");*/

$.ajax({
url:"<?=$site_url?>/check_booking_seat.php",
type:"post",
data:{location_id:location_id, pack_id:"<?=$booking_pack_id?>", booking_date:"<?=$booking_date?>"},
success:function(data)
{
document.getElementById("show_seat_status").innerHTML=data;
}

});


  }

</script>


 <script language="javascript" type="text/javascript">
function validate_continue(){

if(document.getElementById('booking_pickup_point').value==0){   
alert("Please select pickup point !");

return false;
}


var chks = document.getElementsByName('booking_seat[]');
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
alert("Please select at least one seat !");
return false;
}else{
return true;
}
}
</script>


   <?php //include("index-package-section.php"); ?>




<?php include("site-footer.php"); ?>