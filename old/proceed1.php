<?php
ob_start();
require_once("includes/dbsmain.inc.php");
date_default_timezone_set('Asia/Kolkata');
if(isset($_POST['EnqSubmit'])){
@extract($_POST);
    
///////////////****** Mailer to client start here **********************//////////////
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
      <td vAlign='top' style='background-color:#e61938; padding:10px;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:16px; color:#ffffff; text-align:center; font-weight:bold;' colspan='3' >Enquiry From $hostName</td>
    </tr>

     <tr>
      <td width='30%' vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Package</strong> </td>
      <td vAlign='top' width='70%' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$pack_name</td>
    </tr>


  <tr>
      <td width='30%' vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Type</strong> </td>
      <td vAlign='top' width='70%' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$pack_type</td>
    </tr>


  <tr>
      <td width='30%' vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Cost</strong> </td>
      <td vAlign='top' width='70%' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$pack_cost</td>
    </tr>
	


     <tr>
      <td width='30%' vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Name</strong> </td>
      <td vAlign='top' width='70%' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$enquiry_nam</td>
    </tr>
   
    <tr>
      <td vAlign='top'  style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Mobile</strong> </td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$enquiry_mobil</td>
    </tr>
	
	<tr>
      <td vAlign='top'  style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Email-Id</strong> </td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$enquiry_email</td>
    </tr>
	    
    <tr>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;'  ><strong>Address</strong> </td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$address</td> 
    </tr>
	 <tr>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;'  ><strong>Date of journey</strong> </td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>".date("d M Y",strtotime($date_of_journey))."</td> 
    </tr>
	
	 <tr>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;'  ><strong>No. of Person</strong> </td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$no_of_person</td> 
    </tr>
	
	 <tr>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;'  ><strong>Pickup Points</strong> </td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$pickup_points</td> 
    </tr>
	
 <tr>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;'  ><strong>Current Status</strong> </td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>In Process</td> 
    </tr>	
	
  </tbody>
</table>
</body>
</html>";
//$toEmail = "amitabh.tradekeyindia@gmail.com";

// 1 mohitlalroy1970@gmail.com
// 2 mohitlalroy@gmail.com
// 3 info@indiatourismincredible.com


$toEmail = "mohitlalroy1970@gmail.com";
$subject = "Enquiry from $hostName";
		        $from="$enquiry_email";
				$Headers1 = "From: $enquiry_nam<$from>\n";
				$Headers1 .= "X-Mailer: PHP/". phpversion();
				$Headers1 .= "X-Priority: 3 \n";
				$Headers1 .= "MIME-version: 1.0\n";
				$Headers1 .= "Content-Type: text/html; charset=iso-8859-1\n"; 
				//@mail("$toEmail", "$subject", "$msgmail","$Headers1","-fenquiry@tradekeyindia.com");
				//@mail("amitabh.tradekeyindia@gmail.com", "Subject", "Msg1","$Headers1","-fenquiry@tradekeyindia.com");
				 $toEmail."<br>";
				 
$toEmail = "mohitlalroy@gmail.com";
$subject = "Enquiry from $hostName";
		        $from="$enquiry_email";
				$Headers1 = "From: $enquiry_nam<$from>\n";
				$Headers1 .= "X-Mailer: PHP/". phpversion();
				$Headers1 .= "X-Priority: 3 \n";
				$Headers1 .= "MIME-version: 1.0\n";
				$Headers1 .= "Content-Type: text/html; charset=iso-8859-1\n"; 
				//@mail("$toEmail", "$subject", "$msgmail","$Headers1","-fenquiry@tradekeyindia.com");
				//@mail("amitabh.tradekeyindia@gmail.com", "Subject", "Msg1","$Headers1","-fenquiry@tradekeyindia.com");
				 $toEmail."<br>";
				 
$toEmail = "info@indiatourismincredible.com";
$subject = "Enquiry from $hostName";
		        $from="$enquiry_email";
				$Headers1 = "From: $enquiry_nam<$from>\n";
				$Headers1 .= "X-Mailer: PHP/". phpversion();
				$Headers1 .= "X-Priority: 3 \n";
				$Headers1 .= "MIME-version: 1.0\n";
				$Headers1 .= "Content-Type: text/html; charset=iso-8859-1\n"; 
				//@mail("$toEmail", "$subject", "$msgmail","$Headers1","-fenquiry@tradekeyindia.com");
				//@mail("amitabh.tradekeyindia@gmail.com", "Subject", "Msg1","$Headers1","-fenquiry@tradekeyindia.com");
				 $toEmail."<br>";
				 
///////////////****** Mailer to client end here **********************//////////////

$sql="INSERT INTO tbl_order SET ord_amount='$pack_cost',
ord_ord_name='$pack_name',
ord_person_name='$enquiry_nam',
ord_email='$enquiry_email',
ord_mobile='$enquiry_mobil',
ord_pack_type='$pack_type',
ord_adrs='$address',
ord_doj='$date_of_journey',
ord_person_no='$no_of_person',
ord_pickup_point='$pickup_points',
ord_payment_gateway='$payment_option',
ord_status='Not Paid',
ord_date=now()
";

$res=db_query($sql);

$ordID=mysql_insert_id();

$_SESSION['ordID']=$ordID;

}
?>
<div style="border:1px solid #E5E5E5; margin-top:50px; padding:20px;">
  <table align="center">
    <tbody>
      <tr>
        <td class="cart_product" style="text-align:center;"><p><img src="images/processing.gif" /></p>
          <p style="color:#B7B7B7;font-size:17px; font-family:Arial, Helvetica, sans-serif">Please wait while we take you to the secure payment page to complete payment</p>
          <p style="color:#6B6B6B;font-size:20px; font-family:Arial, Helvetica, sans-serif">Please do not refresh or close the tab</p></td>
      </tr>
    </tbody>
  </table>
</div>
<?php if($payment_option=='PAYU'){ ?>
<form action="PayUMoney_form.php" method="post" name="SStdFrm">
  <input type="hidden" name="key" value="4j0pqMrM" />
  <input type="hidden" name="txnid" value="<?php echo $_SESSION['ordID']; ?>" />
  <input type="hidden" name="amount" value="<?php echo (empty($pack_cost)) ? '' : $pack_cost; ?>" />
  <input type="hidden" name="firstname" id="firstname" value="<?php echo (empty($enquiry_nam)) ? '' : $enquiry_nam; ?>" />
  <input type="hidden" name="email" id="email" value="<?php echo (empty($enquiry_email)) ? '' : $enquiry_email; ?>" />
  <input type="hidden" name="phone" value="<?php echo (empty($enquiry_mobil)) ? '' : $enquiry_mobil; ?>" />
  <input type="hidden" name="productinfo" value="India Tourism Incredible" />
  <input type="hidden" name="surl" value="http://indiatourismincredible.com/success.php" size="64" />
  <input type="hidden" name="furl" value="http://indiatourismincredible.com/failure.php" size="64" />
  <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
</form>
<script>document.SStdFrm.submit();</script>
<? } ?>
<?php if($payment_option=='PAYTM'){ ?>
<form method="post" action="PaytmKit/pgRedirect.php" name="PPTMfrm">
<input type="text" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo $_SESSION['ordID']; ?>">
<input type="text" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $_SESSION['ordID']; ?>">
<input type="text" id="INDUSTRY_TYPE_ID" tabindex="3" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
<input type="text" id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
<input type="text" title="TXN_AMOUNT" tabindex="5" name="TXN_AMOUNT" value="1">
<input type="text" name="MSISDN" id="MSISDN" value="<?php echo $enquiry_mobil; ?>" />
<input type="text" name="EMAIL" id="EMAIL" value="<?php echo $enquiry_email; ?>" />
<!--<input type="submit" name="submit" value="Submit"/>-->
</form>
<script>document.PPTMfrm.submit();</script>
<? } ?>

