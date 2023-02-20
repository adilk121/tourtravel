<?php
ob_start();
require_once("includes/dbsmain.inc.php");
?>
<!doctype html>
<html class="no-js" lang="en">
<?php include("dynamic_values.php"); ?>
<head>

<!-- Event snippet for Book Now - Delhi conversion page -->
<script>
 // gtag('event', 'conversion', {'send_to': 'AW-830489390/5_ZACNDDmaUBEK6GgYwD'});
</script>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="description" content="">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>India Tourism Incredible</title>
<link href="https://fonts.googleapis.com/css?family=Patua+One%7COpen+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CRoboto+Slab:100,300,400,700Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link rel="stylesheet" href="assets/css/vendors/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/vendors/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="assets/css/vendors/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/vendors/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/vendors/owl.theme.green.min.css">
<link rel="stylesheet" href="assets/css/vendors/animate.min.css">
<link rel="stylesheet" href="assets/css/vendors/slicknav.min.css">
<link rel="stylesheet" href="assets/css/common/main.css">




<?/*
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-91405984-11"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'UA-91405984-11');
</script>
*/?>

<!-- Global site tag (gtag.js) - Google Ads: 830489390 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-830489390"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'AW-830489390');
</script>

<!-- Event snippet for Submit lead form conversion page -->
<?php
$amountttt=$_POST["amount"];
?>
<script>
 gtag('event', 'conversion', {
     'send_to': 'AW-830489390/pvjXCNaE_PoBEK6GgYwD',
     'value': <?=$amountttt?>,
     'currency': 'INR'
 });
</script>


</head>
<body>
<div class="tsp-main">
 <?php include("site-header-menu.php");?>
  <div class="clearfix"></div>
  <!--header-->
  <section class="tsp-title-breadcrumb">
    <div class="container">
      <div class="row">
        <div class="tsp-title col-md-6 col-sm-6 col-xs-12 tsp-no-padding-left">
          <h1>Succe<span>ss</span></h1>
        </div>
        <!-- div title head page -->
        <div class="tsp-breadcumb col-md-6 col-sm-6 col-xs-12 tsp-no-padding-right">
          <ul>
            <li><a href="index.html">Home</a></li>
            <li>/</li>
            <li><span>Success</span></li>
          </ul>
        </div>
        <!-- div breadcrumb --> 
      </div>
      <!-- div row --> 
    </div>
  </section>
  <main>
    <section id="tsp_our_blog_list_home" class="shortcode-our-blog-warpper">
      <div class="container">
        <div class="row">
          <div class="col-md-12 abt-se">

<?php
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="VdiSoVOTll";

// Salt should be same Post Request 

if (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
  } else {
        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
         }
		 $hash = hash("sha512", $retHashSeq);
       if ($hash != $posted_hash) {
	       echo "<h2 id='tnk'>Invalid Transaction. Please try again</h2>";
		   } else {
   
    
if($_SESSION['ordID']=="")
{
    $_SESSION['ordID'];  
}

if($_SESSION['ordID']!==""){
	$pnrNO = "ITI".$txnid;
$sql="UPDATE tbl_order SET ord_status='Paid',ord_pnr_no='$pnrNO' WHERE ord_id='$txnid'";
db_query($sql);

$sql="SELECT * FROM tbl_order WHERE ord_id='$txnid'";
$data=db_query($sql);
$rec=mysqli_fetch_array($data);
@extract($rec);

if($rec['ord_mobile']!=''){
//******************SMS SENDING START***************************//
$varPhNo="";
	$varUserName="t1mohitlalroy";
	$varPWD="70654847";
	$varSenderID="NEWREG";
	$varPhNo=$rec['ord_mobile'];
	$varPNRno=$rec['ord_pnr_no'];
	$varPackage=$rec['ord_ord_name'];
	$varJdate=$rec['ord_doj'];
	$varPick=$rec['ord_pickup_point'];
	$varPerson=$rec['ord_person_no'];
	
	$varMSG=urlencode("Dear customer your booking for $varPackage is confirmed with PNR NO: $varPNRno, DOJ:$varJdate, PICKUP POINT: $varPick, No of Person:$varPerson, Contact No ".$whatspp_no." www.indiatourismincredible.com");
	$url="http://sms4power.com/api/swsendSingle.asp?";
	$data="username=$varUserName&password=$varPWD&sender=$varSenderID&sendto=$varPhNo&message=$varMSG";
	
  function postdata($url,$data)
    {
    //The function uses CURL for posting data to
      $objURL = curl_init($url);
      curl_setopt($objURL, CURLOPT_RETURNTRANSFER,1); 
      curl_setopt($objURL,CURLOPT_POST,1);
      curl_setopt($objURL, CURLOPT_POSTFIELDS,$data);
      $retval = trim(curl_exec($objURL));
      curl_close($objURL);
      return $retval;
    }
	$sendSMS = postData($url,$data);	


//******************SMS SENDING END***************************//

}









///////////////****** Mailer to client start here **********************//////////////
$hostName = $_SERVER['HTTP_HOST'];	  		  
$msgmail="<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<title>IndiaTourismIncredible</title>
</head>
<body style='margin:0px; padding:0px; font-family:arial; line-height:1.5; font-size:12px;'>
<div style='width:650px; margin:auto;'>
  <div style='margin:10px; border:solid 2px #efefef;  padding:10px;'>
    <div>
      <p style='width:200px; float:left; color:#000; margin:0px; padding:0px; color:#000;'>Date - ".date('d M Y')."</p>
      <p style='width:200px; float:left; text-align:center; color:#000; margin:0px; padding:0px; color:#000;'><img src='http://www.indiatourismincredible.com/images/logo.png'></p>
      <p style='width:200px; float:right; text-align:center; color:#000; margin:0px; padding:0px; color:#000;  font-weight:bold;'>$ord_ord_name <br>
        PNR Number<br>
        <span style=' font-weight:normal;'>$ord_pnr_no</span></p>
    </div>
    <div style='clear:both;'></div>
    <div>
      <p style='width:110px; float:left; margin:0px; padding:0px;'>&nbsp;</p>
      <p style='width:400px; float:left; margin:0px; padding:0px; text-align:center; color:#000;'><strong>9597-9603 Sardar Thana Road,<br>
        Motia Khan Pahar Ganj, New Delhi-110055</strong></p>
      <p style='width:110px; float:left; margin:0px; padding:0px; color:#000;'>&nbsp;</p>
    </div>
    <div style='clear:both;'></div>
    <div style='float:left; width:507px; margin-top:2px;'>
      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Customer Name</p>
      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>$ord_person_name</p>
      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Customer Email</p>
      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>$ord_email</p>
      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Bus Category</p>
      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>$ord_pack_type</p>
      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Nationality </p>
      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>Indian</p>
      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>No of Person </p>
      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>$ord_person_no</p>
      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Contact No</p>
      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>$ord_mobile</p>
      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Pick-up Point</p>
      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>$ord_pickup_point</p>
      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Date of journey</p>
      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>".date("d M Y",strtotime($varJdate))."</p>
    </div>
    <div style='float:left; margin:0px; padding:0px;'> 
      
    </div>
    <div style='clear:both;'></div>
    <div style='margin-top:10px;'>
      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:bold;'>Booked by</p>
      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
      <p style='width:420px; float:left; margin:0px; padding:0px; color:#000; text-transform:uppercase;'>India Tourism Incredible </p>
    </div>
    <div style='clear:both;'></div>
    <div style='margin-top:10px;'>
      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:bold;'>Contact Number</p>
      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
      <p style='width:420px; float:left; margin:0px; padding:0px; color:green; text-transform:uppercase; font-weight:600;'>+91-9643-457-009, ".$whatspp_no."</p>
    </div>
    <div style='clear:both;'></div>
    <div style='margin-top:10px;'>
      <p style='float:left; margin:0px; padding:0px; color:#000;'>Please Show this $ord_ord_name ticket to Attendant upon entry in Vehicle. Enjoy your tour.  Kindly carry estable with you</p>
    </div>
    <div style='clear:both;'></div>
    <div style='float:left; width:300px; margin-top:10px;'>
      <p style='margin:0px; padding:0px; color:#000; font-weight:bold;'>Pick-up Time<br>
        <span style='font-weight:normal;'>$ord_pickup_point</span></p>
    </div>
    <div style='float:left; width:300px; margin-top:10px;'>
      <p style='float:right; margin:0px; padding:0px; color:#000; font-weight:bold;'>Pick-up Points<br>
        <span style='font-weight:normal;'>$ord_pickup_point</span></p>
    </div>
    <div style='clear:both;'></div>
  </div>
</div>
</body>
</html>";
//$toEmail = "amitabh.tradekeyindia@gmail.com";

// 1 mohitlalroy1970@gmail.com
// 2 mohitlalroy@gmail.com
// 3 info@indiatourismincredible.com

$toEmail = "mohitlalroy1970@gmail.com";
$subject = "Booking Details From $hostName";
		        $from="$ord_email";
				$Headers1 = "From: $ord_person_name<$from>\n";
				$Headers1 .= "X-Mailer: PHP/". phpversion();
				$Headers1 .= "X-Priority: 3 \n";
				$Headers1 .= "MIME-version: 1.0\n";
				$Headers1 .= "Content-Type: text/html; charset=iso-8859-1\n"; 
				@mail("$toEmail", "$subject", "$msgmail","$Headers1","-fenquiry@tradekeyindia.com");
				//@mail("amitabh.tradekeyindia@gmail.com", "Subject", "Msg1","$Headers1","-fenquiry@tradekeyindia.com");
				 $toEmail."<br>";
				 
$toEmail = "mohitlalroy@gmail.com";
$subject = "Booking Details From $hostName";
		        $from="$ord_email";
				$Headers1 = "From: $ord_person_name<$from>\n";
				$Headers1 .= "X-Mailer: PHP/". phpversion();
				$Headers1 .= "X-Priority: 3 \n";
				$Headers1 .= "MIME-version: 1.0\n";
				$Headers1 .= "Content-Type: text/html; charset=iso-8859-1\n"; 
				@mail("$toEmail", "$subject", "$msgmail","$Headers1","-fenquiry@tradekeyindia.com");
				//@mail("amitabh.tradekeyindia@gmail.com", "Subject", "Msg1","$Headers1","-fenquiry@tradekeyindia.com");
				 $toEmail."<br>";
				 
$toEmail = "info@indiatourismincredible.com";
$subject = "Booking Details From $hostName";
		        $from="$ord_email";
				$Headers1 = "From: $ord_person_name<$from>\n";
				$Headers1 .= "X-Mailer: PHP/". phpversion();
				$Headers1 .= "X-Priority: 3 \n";
				$Headers1 .= "MIME-version: 1.0\n";
				$Headers1 .= "Content-Type: text/html; charset=iso-8859-1\n"; 
				@mail("$toEmail", "$subject", "$msgmail","$Headers1","-fenquiry@tradekeyindia.com");
				//@mail("amitabh.tradekeyindia@gmail.com", "Subject", "Msg1","$Headers1","-fenquiry@tradekeyindia.com");
				 $toEmail."<br>"; 
				 
///////////////****** Mailer to client end here **********************//////////////


$toEmail =$ord_email;
$subject = "Booking confirmation on IndiaTourismIncredible";
		        $from="mohitlalroy@gmail.com";
				$Headers1 = "From: mohitlalroy@gmail.com<$from>\n";
				$Headers1 .= "X-Mailer: PHP/". phpversion();
				$Headers1 .= "X-Priority: 3 \n";
				$Headers1 .= "MIME-version: 1.0\n";
				$Headers1 .= "Content-Type: text/html; charset=iso-8859-1\n"; 
				@mail("$toEmail", "$subject", "$msgmail","$Headers1","-fenquiry@tradekeyindia.com");
				//@mail("amitabh.tradekeyindia@gmail.com", "Subject", "Msg1","$Headers1","-fenquiry@tradekeyindia.com");
				 $toEmail."<br>";
				 
				 
				 
/*

///////////////// Mail To Admin //////////////////////////////////
$msgmaill="<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<title>IndiaTourismIncredible</title>
</head>
<body style='margin:0px; padding:0px; font-family:arial; line-height:1.5; font-size:12px;'>
<div style='width:650px; margin:auto;'>
  <div style='margin:10px; border:solid 2px #efefef;  padding:10px;'>
    <div>
      <p style='width:200px; float:left; color:#000; margin:0px; padding:0px; color:#000;'>Date - ".date('d M Y')."</p>
      <p style='width:200px; float:left; text-align:center; color:#000; margin:0px; padding:0px; color:#000;'><img src='http://www.indiatourismincredible.com/images/logo.png'></p>
      <p style='width:200px; float:right; text-align:center; color:#000; margin:0px; padding:0px; color:#000;  font-weight:bold;'>$ord_ord_name <br>
        PNR Number<br>
        <span style=' font-weight:normal;'>$ord_pnr_no</span></p>
    </div>
    <div style='clear:both;'></div>
    <div>
      <p style='width:110px; float:left; margin:0px; padding:0px;'>&nbsp;</p>
      <p style='width:400px; float:left; margin:0px; padding:0px; text-align:center; color:#000;'><strong>9597-9603 Sardar Thana Road,<br>
        Motia Khan Pahar Ganj, New Delhi-110055</strong></p>
      <p style='width:110px; float:left; margin:0px; padding:0px; color:#000;'>&nbsp;</p>
    </div>
    <div style='clear:both;'></div>
    <div style='float:left; width:507px; margin-top:2px;'>
      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Customer Name</p>
      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>$ord_person_name</p>
      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Customer Email</p>
      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>$ord_email</p>
      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Bus Category</p>
      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>$ord_pack_type</p>
      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Nationality </p>
      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>Indian</p>
      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>No of Person </p>
      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>$ord_person_no</p>
      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Contact No</p>
      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>$ord_mobile</p>
      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Pick-up Point</p>
      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>$ord_pickup_point</p>
      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Date of journey</p>
      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>".date('d M Y',strtotime($ord_doj))."</p>
    </div>
    <div style='float:left; margin:0px; padding:0px;'> 
      
    </div>
    <div style='clear:both;'></div>
    <div style='margin-top:10px;'>
      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:bold;'>Booked by</p>
      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
      <p style='width:420px; float:left; margin:0px; padding:0px; color:#000; text-transform:uppercase;'>India Tourism Incredible </p>
    </div>
    <div style='clear:both;'></div>
    <div style='margin-top:10px;'>
      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:bold;'>Contact Number</p>
      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
      <p style='width:420px; float:left; margin:0px; padding:0px; color:green; text-transform:uppercase; font-weight:600;'>+91-9643-457-009, ".$whatspp_no."</p>
    </div>
    <div style='clear:both;'></div>
    <div style='margin-top:10px;'>
      <p style='float:left; margin:0px; padding:0px; color:#000;'>Please Show this $ord_ord_name ticket to Attendant upon entry in Vehicle. Enjoy your tour.  Kindly carry estable with you</p>
    </div>
    <div style='clear:both;'></div>
    <div style='float:left; width:300px; margin-top:10px;'>
      <p style='margin:0px; padding:0px; color:#000; font-weight:bold;'>Pick-up Time<br>
        <span style='font-weight:normal;'>$ord_pickup_point</span></p>
    </div>
    <div style='float:left; width:300px; margin-top:10px;'>
      <p style='float:right; margin:0px; padding:0px; color:#000; font-weight:bold;'>Pick-up Points<br>
        <span style='font-weight:normal;'>$ord_pickup_point</span></p>
    </div>
    <div style='clear:both;'></div>
  </div>
</div>
</body>
</html>";*/



				 
/*
$mail_to_admin=$ord_email;
//$mail_to_admin="amitabh.tradekeyindia@gmail.com";
$sub_admin="Booking confirmation on IndiaTourismIncredible";
$mail_admin_body = "$msgmaill";	
$sender_admin ="mohitlalroy@gmail.com";		
$headers_admin  = "MIME-Version: 1.0" . "\r\n";
$headers_admin .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers_admin .= "from: ".$sender_admin."\n";
if($ord_email){
 @mail($mail_to_admin,$sub_admin,$mail_admin_body,$headers_admin);
}

*/

///////////////// Mail To Admin End//////////////////////////////////
		
		  //header("Location:thanks.html#tnk");
//		  exit;

}	


echo "<h2 id='tnk'> Success</h2>";
echo "<h3 align='center'>Your trantaction is done successfully.</h3>";
		 
		 
		  //echo "<h3>Thank You. Your order status is ". $status .".</h3>";
          //echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
          //echo "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
		  
		  
		  
}
?>	

<?php



//if($_SESSION['ordID']!=""){
//	$pnrNO = "ITI".$_SESSION['ordID'];
//$sql="UPDATE tbl_order SET ord_status='Paid',ord_pnr_no='$pnrNO' WHERE ord_id='$_SESSION[ordID]'";
//db_query($sql);
//
//$sql="SELECT * FROM tbl_order WHERE ord_id='$_SESSION[ordID]'";
//$data=db_query($sql);
//$rec=mysqli_fetch_array($data);
//@extract($rec);
/////////////////****** Mailer to client start here **********************//////////////
//$hostName = $_SERVER['HTTP_HOST'];	  		  
//$msgmail="<!doctype html>
//<html>
//<head>
//<meta charset='utf-8'>
//<title>IndiaTourismIncredible</title>
//</head>
//<body style='margin:0px; padding:0px; font-family:arial; line-height:1.5; font-size:12px;'>
//<div style='width:650px; margin:auto;'>
//  <div style='margin:10px; border:solid 2px #efefef;  padding:10px;'>
//    <div>
//      <p style='width:200px; float:left; color:#000; margin:0px; padding:0px; color:#000;'>Date - ".date('d M Y')."</p>
//      <p style='width:200px; float:left; text-align:center; color:#000; margin:0px; padding:0px; color:#000;'><img src='http://www.indiatourismincredible.com/images/logo.png'></p>
//      <p style='width:200px; float:right; text-align:center; color:#000; margin:0px; padding:0px; color:#000;  font-weight:bold;'>$ord_ord_name <br>
//        PNR Number<br>
//        <span style=' font-weight:normal;'>$ord_pnr_no</span></p>
//    </div>
//    <div style='clear:both;'></div>
//    <div>
//      <p style='width:110px; float:left; margin:0px; padding:0px;'>&nbsp;</p>
//      <p style='width:400px; float:left; margin:0px; padding:0px; text-align:center; color:#000;'><strong>9597-9603 Sardar Thana Road,<br>
//        Motia Khan Pahar Ganj, New Delhi-110055</strong></p>
//      <p style='width:110px; float:left; margin:0px; padding:0px; color:#000;'>&nbsp;</p>
//    </div>
//    <div style='clear:both;'></div>
//    <div style='float:left; width:507px; margin-top:2px;'>
//      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Customer Name</p>
//      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
//      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>$ord_person_name</p>
//      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Customer Email</p>
//      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
//      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>$ord_email</p>
//      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Bus Category</p>
//      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
//      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>$ord_pack_type</p>
//      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Nationality </p>
//      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
//      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>Indian</p>
//      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>No of Person </p>
//      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
//      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>$ord_person_no</p>
//      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Contact No</p>
//      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
//      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>$ord_mobile</p>
//      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Pick-up Point</p>
//      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
//      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>$ord_pickup_point</p>
//      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Date of journey</p>
//      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
//      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>".date('d M Y',strtotime($ord_doj))."</p>
//    </div>
//    <div style='float:left; margin:0px; padding:0px;'> 
//      
//    </div>
//    <div style='clear:both;'></div>
//    <div style='margin-top:10px;'>
//      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:bold;'>Booked by</p>
//      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
//      <p style='width:420px; float:left; margin:0px; padding:0px; color:#000; text-transform:uppercase;'>India Tourism Incredible </p>
//    </div>
//    <div style='clear:both;'></div>
//    <div style='margin-top:10px;'>
//      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:bold;'>Contact Number</p>
//      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
//      <p style='width:420px; float:left; margin:0px; padding:0px; color:green; text-transform:uppercase; font-weight:600;'>+91-9643-457-009, +91-09999444497</p>
//    </div>
//    <div style='clear:both;'></div>
//    <div style='margin-top:10px;'>
//      <p style='float:left; margin:0px; padding:0px; color:#000;'>Please Show this $ord_ord_name ticket to Attendant upon entry in Vehicle. Enjoy your tour.  Kindly carry estable with you</p>
//    </div>
//    <div style='clear:both;'></div>
//    <div style='float:left; width:300px; margin-top:10px;'>
//      <p style='margin:0px; padding:0px; color:#000; font-weight:bold;'>Pick-up Time<br>
//        <span style='font-weight:normal;'>$ord_pickup_point</span></p>
//    </div>
//    <div style='float:left; width:300px; margin-top:10px;'>
//      <p style='float:right; margin:0px; padding:0px; color:#000; font-weight:bold;'>Pick-up Points<br>
//        <span style='font-weight:normal;'>$ord_pickup_point</span></p>
//    </div>
//    <div style='clear:both;'></div>
//  </div>
//</div>
//</body>
//</html>";
////$toEmail = "amitabh.tradekeyindia@gmail.com";
//$toEmail = "mohitlalroy1970@gmail.com";
//$subject = "Enquiry from $hostName";
//		        $from="$ord_email";
//				$Headers1 = "From: $ord_person_name<$from>\n";
//				$Headers1 .= "X-Mailer: PHP/". phpversion();
//				$Headers1 .= "X-Priority: 3 \n";
//				$Headers1 .= "MIME-version: 1.0\n";
//				$Headers1 .= "Content-Type: text/html; charset=iso-8859-1\n"; 
//				@mail("$toEmail", "$subject", "$msgmail","$Headers1","-fenquiry@tradekeyindia.com");
//				//@mail("amitabh.tradekeyindia@gmail.com", "Subject", "Msg1","$Headers1","-fenquiry@tradekeyindia.com");
//				 $toEmail."<br>";
/////////////////****** Mailer to client end here **********************//////////////
/////////////////// Mail To Admin //////////////////////////////////
//$msgmaill="<!doctype html>
//<html>
//<head>
//<meta charset='utf-8'>
//<title>IndiaTourismIncredible</title>
//</head>
//<body style='margin:0px; padding:0px; font-family:arial; line-height:1.5; font-size:12px;'>
//<div style='width:650px; margin:auto;'>
//  <div style='margin:10px; border:solid 2px #efefef;  padding:10px;'>
//    <div>
//      <p style='width:200px; float:left; color:#000; margin:0px; padding:0px; color:#000;'>Date - ".date('d M Y')."</p>
//      <p style='width:200px; float:left; text-align:center; color:#000; margin:0px; padding:0px; color:#000;'><img src='http://www.indiatourismincredible.com/images/logo.png'></p>
//      <p style='width:200px; float:right; text-align:center; color:#000; margin:0px; padding:0px; color:#000;  font-weight:bold;'>$ord_ord_name <br>
//        PNR Number<br>
//        <span style=' font-weight:normal;'>$ord_pnr_no</span></p>
//    </div>
//    <div style='clear:both;'></div>
//    <div>
//      <p style='width:110px; float:left; margin:0px; padding:0px;'>&nbsp;</p>
//      <p style='width:400px; float:left; margin:0px; padding:0px; text-align:center; color:#000;'><strong>9597-9603 Sardar Thana Road,<br>
//        Motia Khan Pahar Ganj, New Delhi-110055</strong></p>
//      <p style='width:110px; float:left; margin:0px; padding:0px; color:#000;'>&nbsp;</p>
//    </div>
//    <div style='clear:both;'></div>
//    <div style='float:left; width:507px; margin-top:2px;'>
//      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Customer Name</p>
//      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
//      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>$ord_person_name</p>
//      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Customer Email</p>
//      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
//      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>$ord_email</p>
//      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Bus Category</p>
//      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
//      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>$ord_pack_type</p>
//      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Nationality </p>
//      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
//      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>Indian</p>
//      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>No of Person </p>
//      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
//      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>$ord_person_no</p>
//      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Contact No</p>
//      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
//      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>$ord_mobile</p>
//      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Pick-up Point</p>
//      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
//      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>$ord_pickup_point</p>
//      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:600;'>Date of journey</p>
//      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
//      <p style='width:240px; float:left; margin:0px; padding:0px; color:#000;'>".date('d M Y',strtotime($ord_doj))."</p>
//    </div>
//    <div style='float:left; margin:0px; padding:0px;'> 
//      
//    </div>
//    <div style='clear:both;'></div>
//    <div style='margin-top:10px;'>
//      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:bold;'>Booked by</p>
//      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
//      <p style='width:420px; float:left; margin:0px; padding:0px; color:#000; text-transform:uppercase;'>India Tourism Incredible </p>
//    </div>
//    <div style='clear:both;'></div>
//    <div style='margin-top:10px;'>
//      <p style='width:130px; float:left; margin:0px; padding:0px; color:#000; font-weight:bold;'>Contact Number</p>
//      <p style='width:50px; float:left; margin:0px; padding:0px; color:#000;'><strong>:</strong></p>
//      <p style='width:420px; float:left; margin:0px; padding:0px; color:green; text-transform:uppercase; font-weight:600;'>+91-9643-457-009, +91-09999444497</p>
//    </div>
//    <div style='clear:both;'></div>
//    <div style='margin-top:10px;'>
//      <p style='float:left; margin:0px; padding:0px; color:#000;'>Please Show this $ord_ord_name ticket to Attendant upon entry in Vehicle. Enjoy your tour.  Kindly carry estable with you</p>
//    </div>
//    <div style='clear:both;'></div>
//    <div style='float:left; width:300px; margin-top:10px;'>
//      <p style='margin:0px; padding:0px; color:#000; font-weight:bold;'>Pick-up Time<br>
//        <span style='font-weight:normal;'>$ord_pickup_point</span></p>
//    </div>
//    <div style='float:left; width:300px; margin-top:10px;'>
//      <p style='float:right; margin:0px; padding:0px; color:#000; font-weight:bold;'>Pick-up Points<br>
//        <span style='font-weight:normal;'>$ord_pickup_point</span></p>
//    </div>
//    <div style='clear:both;'></div>
//  </div>
//</div>
//</body>
//</html>";
//$mail_to_admin=$ord_email;
////$mail_to_admin="amitabh.tradekeyindia@gmail.com";
//$sub_admin="Booking confirmation on IndiaTourismIncredible";
//$mail_admin_body = "$msgmaill";	
//$sender_admin ="mohitlalroy@gmail.com";		
//$headers_admin  = "MIME-Version: 1.0" . "\r\n";
//$headers_admin .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
//$headers_admin .= "from: ".$sender_admin."\n";
//if($ord_email){
// @mail($mail_to_admin,$sub_admin,$mail_admin_body,$headers_admin);
//}
/////////////////// Mail To Admin End//////////////////////////////////
//		
//		  //header("Location:thanks.html#tnk");
////		  exit;
//
//}	
?>
           
          </div>
        </div>
      </div>
    </section>
  </main>
  
    <?php include("service-box-section.php"); ?>
            
  <?php include("site-footer.php"); ?>
</div>
<script src="assets/js/vendors/jquery.min.js"></script> 
<script src="assets/js/vendors/bootstrap.min.js"></script> 
<script src="assets/js/vendors/jquery.slicknav.min.js"></script> 
<script src="assets/js/common.js"></script>
</body>
</html>