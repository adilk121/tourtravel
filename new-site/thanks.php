<?php include("site-header.php"); ?>




    <!-- Breadcrumb Area Start -->
    <section class="peulis-breadcrumb-area">
        <div class="breadcrumb-top">
            <div class="container">
                <div class="col-lg-12">
                    <div class="breadcrumb-box">
                        <h2>Thanks</h2>
                        <ul class="breadcrumb-inn">
                            <li><a href="<?=$site_url?>">Home</a></li>
                            <li class="active"><a>Thanks</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>




<?php
 if(isset($_REQUEST['id']))
 {
$res=mysqli_fetch_array(db_query("select * from tbl_booking where booking_id='$_REQUEST[id]' "));

/*


       /////////////// Mailer to client start here //////////////
  $hostName = $_SERVER['HTTP_HOST'];          
$msgmail="<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<title>TradeKeyIndia.com-Largest B2B Portal In India</title>
 </head>
<body>      
   <table align='center' cellSpacing='0' cellPadding='0' width='87%' border='1' style='border:1px solid #e61938'>
  <tbody>
    <tr>
      <td vAlign='top' style='background-color:#e61938; padding:10px;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:16px; color:#ffffff; text-align:center; font-weight:bold;' colspan='3' >Booking Confirmation From $hostName</td>
    </tr>
     <tr>
      <td width='30%' vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Name </strong> </td>
      <td vAlign='top' width='70%' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$res[booking_user_name]</td>
    </tr>    
    <tr>
      <td vAlign='top'  style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Address </strong> </td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$res[booking_user_address]</td>
    </tr>
    <tr>
      <td vAlign='top'  style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Email </strong> </td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$res[booking_user_email]</td>
    </tr>  <tr>
      <td vAlign='top'  style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Phone </strong> </td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$res[booking_user_mobile]</td>
    </tr>  
    <tr>
      <td vAlign='top'  style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Tour Package </strong> </td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$res[booking_package_name]</td>
    </tr> 

    <tr>
      <td vAlign='top'  style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Seat(s) No. </strong> </td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$res[booking_selected_seat]</td>
    </tr> 

    <tr>
      <td vAlign='top'  style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Journey Date </strong> </td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$res[booking_date]</td>
    </tr> 

    <tr>
      <td vAlign='top'  style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Boarding Point </strong> </td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$res[booking_pickup_point_name]</td>
    </tr> 

     <tr>
      <td vAlign='top'  style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Total Amount </strong> </td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>₹$res[booking_total_price]</td>
    </tr> 

    <tr>
      <td vAlign='top'  style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Payment Status </strong> </td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>Paid</td>
    </tr> 


  </tbody>
</table>
</body>
</html>";
*/



 
 
 $logoo=$site_url."/header_files/".$DATALOGO['header_logo'];
 
 
 $hostName = $_SERVER['HTTP_HOST'];	  		  
$msgmail="<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<title>$compDATA[admin_company_name]</title>
</head>
<body style='margin:0px; padding:0px; font-family:arial; line-height:1.5; font-size:12px;'>
<div style='width:650px; margin:auto;'>
  <div style='margin:10px; border:solid 2px #efefef;  padding:10px;'>
    <div>
      <p style='width:200px; float:left; color:#000; margin:0px; padding:0px; color:#000;'>Date - ".date('d M Y')."</p>
      <p style='width:200px; float:left; text-align:center; color:#000; margin:0px; padding:0px; color:#000;'><img src='$logoo'></p>
      <p style='width:200px; float:right; text-align:center; color:#000; margin:0px; padding:0px; color:#000;  font-weight:bold;'>$res[booking_package_name] <br>
        PNR Number<br>
        <span style=' font-weight:normal;'>ATB$res[booking_id]</span></p>
    </div>
    <div style='clear:both;'></div>
    <div>
      <p style='width:110px; float:left; margin:0px; padding:0px;'>&nbsp;</p>
      <p style='width:400px; float:left; margin:0px; padding:0px; text-align:center; color:#000;'><strong>$compDATA[admin_address]</strong></p>
      <p style='width:110px; float:left; margin:0px; padding:0px; color:#000;'>&nbsp;</p>
    </div>
    <div style='clear:both;'></div>
    <div style='float:left; width:507px; margin-top:2px;'>
      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Customer Name</p>
      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>$res[booking_user_name]</p>
      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Customer Email</p>
      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>$res[booking_user_email]</p>

      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Nationality </p>
      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>Indian</p>
      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>No of Person </p>
      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>$res[booking_persons]</p>
            <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Selected Seat</p>
      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>$res[booking_selected_seat]</p>
      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Contact No</p>
      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>$res[booking_user_mobile]</p>
      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Pick-up Point</p>
      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>$res[booking_pickup_point_name]</p>
      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Date of journey</p>
      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>".date('d-M-Y', strtotime($res['booking_date']))."</p>
    </div>
    <div style='float:left; margin:0px; padding:0px;'> 
      
    </div>
    <div style='clear:both;'></div>
    <div style='margin-top:10px;'>
      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:bold;'>Booked by</p>
      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
      <p style='width:420px; float:left; margin:0px; padding:0px; color:#000; text-transform:uppercase;'>$compDATA[admin_company_name] </p>
    </div>
    <div style='clear:both;'></div>
    <div style='margin-top:10px;'>
      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:bold;'>Contact Number</p>
      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
      <p style='width:420px; float:left; margin:0px; padding:0px; color:green; text-transform:uppercase; font-weight:600;'>$compDATA[admin_mobile]</p>
    </div>
    <div style='clear:both;'></div>
    <div style='margin-top:10px;'>
      <p style='float:left; margin:0px; padding:0px; color:#000;'>Please Show this $res[booking_package_name] ticket to Attendant upon entry in Vehicle. Enjoy your tour.  Kindly carry estable with you</p>
    </div>
    <div style='clear:both;'></div>
    <div style='float:left; width:300px; margin-top:10px;'>
      <p style='margin:0px; padding:0px; color:#000; font-weight:bold;'>Pick-up Point/Time<br>
        <span style='font-weight:normal;'>$res[booking_pickup_point_name]</span></p>
    </div>
  
    <div style='clear:both;'></div>
  </div>
</div>
</body>
</html>";
 
 //echo $msgmail;
 
 
 

$toEmail = $compDATA['admin_email'];
//$toEmail="rehantki@gmail.com";
$subject = "New Booking From $hostName";
            $from=$res['booking_user_email'];
        $Headers1 = "From: $hostName<$from>\n";
        $Headers1 .= "X-Mailer: PHP/". phpversion();
        $Headers1 .= "X-Priority: 3 \n";
        $Headers1 .= "MIME-version: 1.0\n";
        $Headers1 .= "Content-Type: text/html; charset=iso-8859-1\n"; 
        @mail("$toEmail", "$subject", "$msgmail","$Headers1","-fenquiry@tradekeyindia.com");
        //@mail("amitabh.tradekeyindia@gmail.com", "Subject", "Msg1","$Headers1","-fenquiry@tradekeyindia.com");
         $toEmail."<br>";
         
/////////////// Mailer to User //////////////
$toEmail2 = $res['booking_user_email'];
$subject2 = "Booking Confirmation $hostName";
            $from2="$compDATA[admin_email]";
        $Headers12 = "From: $compDATA[admin_company_name]<$from2>\n";
        $Headers12 .= "X-Mailer: PHP/". phpversion();
        $Headers12 .= "X-Priority: 3 \n";
        $Headers12 .= "MIME-version: 1.0\n";
        $Headers12 .= "Content-Type: text/html; charset=iso-8859-1\n"; 
        @mail("$toEmail2", "$subject2", "$msgmail","$Headers12","-fenquiry@tradekeyindia.com");
        //@mail("amitabh.tradekeyindia@gmail.com", "Subject", "Msg1","$Headers1","-fenquiry@tradekeyindia.com");
         $toEmail2."<br>";
         
         
  $sql="update tbl_booking set booking_payment_status='Paid' where booking_id='$res[booking_id]' ";

db_query($sql);


}

 
?>





    <!-- About Page Start -->
<section class="peulis-about-page section_70">
  <div class="container">


<div class="row" style="margin-bottom: 20px;"> 
<div class="col-md-4 offset-md-4 jumbotron" style=" background-color:#bee873;">

  <center>
<h2>Thanks</h2>
<hr>
<p>Your ticket has been booked successfully!</p>
<p>Please check your mail box for ticket</p>
</center>
</div>
</div>



        </div>
    </section>
    <!-- About Page End -->




   <?php // include("index-package-section.php"); ?>




<?php include("site-footer.php"); ?>