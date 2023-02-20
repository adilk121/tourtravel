<?php 
ob_start();
require_once("includes/dbsmain.inc.php");
include("site-main-query.php");

$location_id=$_POST['location_id'];
$pack_id=$_POST['pack_id'];
$booking_date=$_POST['booking_date'];

$seat_sql=db_query("select booking_selected_seat from tbl_booking where booking_date='$booking_date' and booking_package_id='$pack_id' and booking_pickup_point_id='$location_id' and booking_payment_status='Paid' ");
while($seatRES=mysqli_fetch_array($seat_sql))
{
	$seat_resArr[]=$seatRES['booking_selected_seat'];
}

if($seat_resArr!="")
{
$seat=implode(",",$seat_resArr);

$seat_res=explode(",",$seat);
}else{
	$seat_res[]=0;
}




?>

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


.seat-checkbox-label-booked {
/*  border: 1px solid #000;*/
  display: inline-block;
  padding: 3px;
    background: red;
}
</style>




<table width="100%" >
<tr align="right">
    <td rowspan="5"><img src="images/driver.png" ></td>
<td><label ><input type="checkbox" name="booking_seat[]" value="4" class="seat-checkbox"  <?php if (in_array(4, $seat_res)) { ?> disabled <? } ?> ><span   <?php if (in_array(4, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?> ><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="8" class="seat-checkbox" <?php if (in_array(8, $seat_res)) { ?> disabled <? } ?>><span  <?php if (in_array(8, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="12" class="seat-checkbox" <?php if (in_array(12, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(12, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="16" class="seat-checkbox" <?php if (in_array(16, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(16, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="20" class="seat-checkbox" <?php if (in_array(20, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(20, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="24" class="seat-checkbox" <?php if (in_array(24, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(24, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="28" class="seat-checkbox" <?php if (in_array(28, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(28, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="32" class="seat-checkbox" <?php if (in_array(32, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(32, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="36" class="seat-checkbox" <?php if (in_array(36, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(36, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="40" class="seat-checkbox" <?php if (in_array(40, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(40, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td style="text-align:right;">
    <label ><input type="checkbox" name="booking_seat[]" value="45" class="seat-checkbox" <?php if (in_array(45, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(45, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
</tr>


<tr align="right">
<td><label ><input type="checkbox" name="booking_seat[]" value="3" class="seat-checkbox" <?php if (in_array(3, $seat_res)) { ?> disabled <? } ?>><span  <?php if (in_array(3, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="7" class="seat-checkbox" <?php if (in_array(7, $seat_res)) { ?> disabled <? } ?>><span  <?php if (in_array(7, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="11" class="seat-checkbox" <?php if (in_array(11, $seat_res)) { ?> disabled <? } ?>><span  <?php if (in_array(11, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="15" class="seat-checkbox" <?php if (in_array(15, $seat_res)) { ?> disabled <? } ?>><span  <?php if (in_array(15, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="19" class="seat-checkbox" <?php if (in_array(19, $seat_res)) { ?> disabled <? } ?>><span  <?php if (in_array(19, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="23" class="seat-checkbox" <?php if (in_array(23, $seat_res)) { ?> disabled <? } ?>><span  <?php if (in_array(23, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="27" class="seat-checkbox" <?php if (in_array(27, $seat_res)) { ?> disabled <? } ?>><span  <?php if (in_array(27, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="31" class="seat-checkbox" <?php if (in_array(31, $seat_res)) { ?> disabled <? } ?>><span  <?php if (in_array(31, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="35" class="seat-checkbox" <?php if (in_array(35, $seat_res)) { ?> disabled <? } ?>><span  <?php if (in_array(35, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="39" class="seat-checkbox" <?php if (in_array(39, $seat_res)) { ?> disabled <? } ?>><span  <?php if (in_array(39, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td style="text-align:right;">
    <label ><input type="checkbox" name="booking_seat[]" value="44" class="seat-checkbox" <?php if (in_array(44, $seat_res)) { ?> disabled <? } ?>><span  <?php if (in_array(44, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
</tr>


<tr align="center">
<td colspan="11" align="right">
    <label ><input type="checkbox" name="booking_seat[]" value="43" class="seat-checkbox" <?php if (in_array(43, $seat_res)) { ?> disabled <? } ?>><span  class="seat-checkbox-label" <?php if (in_array(43, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

</tr>


<tr align="right">
<td><label ><input type="checkbox" name="booking_seat[]" value="2" class="seat-checkbox" <?php if (in_array(2, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(2, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="6" class="seat-checkbox" <?php if (in_array(6, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(6, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="10" class="seat-checkbox" <?php if (in_array(10, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(10, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="14" class="seat-checkbox" <?php if (in_array(14, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(14, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="18" class="seat-checkbox" <?php if (in_array(18, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(18, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="22" class="seat-checkbox" <?php if (in_array(22, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(22, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="26" class="seat-checkbox" <?php if (in_array(26, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(26, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="30" class="seat-checkbox" <?php if (in_array(30, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(30, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="34" class="seat-checkbox" <?php if (in_array(34, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(34, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="38" class="seat-checkbox" <?php if (in_array(38, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(38, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td style="text-align:right;">
    <label ><input type="checkbox" name="booking_seat[]" value="42" class="seat-checkbox" <?php if (in_array(42, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(42, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
</tr>


<tr align="right">
<td><label ><input type="checkbox" name="booking_seat[]" value="1" class="seat-checkbox" <?php if (in_array(1, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(1, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="5" class="seat-checkbox" <?php if (in_array(5, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(5, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="9" class="seat-checkbox" <?php if (in_array(9, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(9, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="13" class="seat-checkbox" <?php if (in_array(13, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(13, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="17" class="seat-checkbox" <?php if (in_array(17, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(17, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="21" class="seat-checkbox" <?php if (in_array(21, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(21, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="25" class="seat-checkbox" <?php if (in_array(25, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(25, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="29" class="seat-checkbox" <?php if (in_array(29, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(29, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="33" class="seat-checkbox" <?php if (in_array(33, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(33, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td><label ><input type="checkbox" name="booking_seat[]" value="37" class="seat-checkbox" <?php if (in_array(37, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(37, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>

<td style="text-align:right;">
    <label ><input type="checkbox" name="booking_seat[]" value="41" class="seat-checkbox" <?php if (in_array(41, $seat_res)) { ?> disabled <? } ?>><span <?php if (in_array(41, $seat_res)) { ?> class="seat-checkbox-label-booked" <?}else{?> class="seat-checkbox-label" <?}?>><img src="assets/img/seat.png" style="width:30px;"></span></label></td>
</tr>
</table>

