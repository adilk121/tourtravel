<?php
ob_start();
require_once("includes/dbsmain.inc.php");
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
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

</head>
<body>
<div class="tsp-main">
    <header>
    <div class="tsp-header-main">
        <div class="container">
            <div class="row">
                <div class="tsp-logo col-md-2 col-sm-3 col-xs-3">
                    <a href="index.html">
                        <img src="images/logo.png" alt="Logo" class="logod">
                    </a>
                </div>
                <div id="tsp_menu_cart_search" class="col-md-7 col-sm-9 col-xs-12">
                      <nav>
              <ul id="menu">
                <li class="current-menu-item"><a href="index.html">Home</a> </li>
                <!--<li><a href="about-us.html">About Us</a></li>-->
                <li><a href="services.html">Tour Packages</a>
                  <ul>
                    <li><a href="delhi-to-agra-tour-packages.html">DELHI TO AGRA TOUR PACKAGES</a></li>
                    <li><a href="delhi-sightseeing-tour.html">DELHI SIGHTSEEING TOUR</a></li>
                    <li><a href="delhi-to-jaipur-tour.html">DELHI TO JAIPUR TOUR</a></li>
                    <li><a href="delhi-haridwar-rishikesh-laxman-jhulla-delhi-tour.html">DELHI-HARIDWAR- RISHIKESH-LAXMAN-JHULLA-DELHI TOUR</a></li>
                  </ul>
                </li>
                <li><a href="#">Bus Services</a>
<ul>
<li><a href="delhi-ambala-ludhiana-bus-service.html">Delhi Ambala Ludhiana Bus Service</a></li>
</ul>
        </li>
        <li><a href="gallery.html">Gallery</a></li>
        
                <li><a href="contact-us.html">Contact Us</a></li>
              </ul>
            </nav>
                    
                </div>
               
				<div class="tsp-logo col-md-3 col-sm-3 col-xs-12" style="z-index:-999;">
				<div class="col-md-12 col-xs-12">
				<h3 style="float:right; font-weight:bold; font-size:20px; color:#004297;">Call / WhatsApp </h3>
				</div>
				<div class="col-md-12 col-xs-12">
				<p><a href="tel:09999444497" style="float:right; font-weight:bold; font-size:18px; color:#069afc;">09999444497</a></p></div>
				<div class="col-md-12 col-xs-12">
				 <p style="float:right; font-weight:bold; font-size:18px; color:#004297;"><i class="fa fa-envelope"></i> mohitlalroy@gmail.com</p>
				 </div>
				</div>
				</div>
            </div>
          </div>
    <!--End header main-->
</header>
<div class="clearfix"></div>
<!--header-->
<section class="tsp-title-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="tsp-title col-md-6 col-sm-6 col-xs-12 tsp-no-padding-left">
                        <h1>Fail<span>ed</span></h1>
                    </div><!-- div title head page -->
                    <div class="tsp-breadcumb col-md-6 col-sm-6 col-xs-12 tsp-no-padding-right">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>/</li>
                            <li><span>Failed</span></li>
                        </ul>
                    </div><!-- div breadcrumb -->
                </div><!-- div row -->
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

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
  } else {
        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
         }
		 $hash = hash("sha512", $retHashSeq);
  
       if ($hash != $posted_hash) {
	       echo "<h2 id='tnk'>Invalid Transaction. Please try again</h2>";
		   } else {
			   


if($_SESSION['ordID']!=""){
$sql="UPDATE tbl_order SET ord_status='Failed' WHERE ord_id='$_SESSION[ordID]'";
db_query($sql);

$sql="SELECT * FROM tbl_order WHERE ord_id='$_SESSION[ordID]'";
$data=db_query($sql);
$rec=mysql_fetch_array($data);
@extract($rec);
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
      <td vAlign='top' width='70%' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ord_ord_name</td>
    </tr>


  <tr>
      <td width='30%' vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Type</strong> </td>
      <td vAlign='top' width='70%' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ord_pack_type</td>
    </tr>


  <tr>
      <td width='30%' vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Cost</strong> </td>
      <td vAlign='top' width='70%' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ord_amount</td>
    </tr>
	


     <tr>
      <td width='30%' vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Name</strong> </td>
<td vAlign='top' width='70%' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ord_person_name</td>
    </tr>
   
    <tr>
      <td vAlign='top'  style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Mobile</strong> </td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ord_mobile</td>
    </tr>
	
	<tr>
      <td vAlign='top'  style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Email-Id</strong> </td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ord_email</td>
    </tr>
	    
    <tr>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;'  ><strong>Address</strong> </td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ord_adrs</td> 
    </tr>
	 <tr>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;'  ><strong>Date of journey</strong> </td>
<td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>".date("d M Y",strtotime($ord_doj))."</td> 
    </tr>
	
	 <tr>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;'  ><strong>No. of Person</strong> </td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ord_person_no</td> 
    </tr>
	
	 <tr>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;'  ><strong>Pickup Points</strong> </td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ord_pickup_point</td> 
    </tr>
	
 <tr>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;'  ><strong>Current Status</strong> </td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ord_status</td> 
    </tr>	
	
  </tbody>
</table>
</body>
</html>";

// 1 mohitlalroy1970@gmail.com
// 2 mohitlalroy@gmail.com
// 3 info@indiatourismincredible.com

//$toEmail = "arif.tradekeyindia@gmail.com";
$toEmail = "mohitlalroy1970@gmail.com";
$subject = "Enquiry from $hostName";
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
$subject = "Enquiry from $hostName";
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
$subject = "Enquiry from $hostName";
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
///////////////// Mail To Admin //////////////////////////////////

$mail_to_admin="arif.tradekeyindia@gmail.com";
$sub_admin="Enquiry From $hostName";
$mail_admin_body = "$msgmail";	
$sender_admin =$enquiry_email;		
$headers_admin  = "MIME-Version: 1.0" . "\r\n";
$headers_admin .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers_admin .= "from: ".$sender_admin."\n";
if($ord_email){
//@mail($mail_to_admin,$sub_admin,$mail_admin_body,$headers_admin);
}
///////////////// Mail To Admin End//////////////////////////////////
		
		  //header("Location:thanks.html#tnk");
//		  exit;

}			   
			   
echo "<h2 id='tnk' class='text-danger'> Failed</h2>";
echo "<h3 align='center'>Your trantaction is failed, Please try again.</h3>";
			   
//echo "<h3>Your order status is ". $status .".</h3>";
//echo "<h4>Your transaction id for this transaction is ".$txnid.". You may try making the payment by clicking the link below.</h4>";

} 
?>            
            
     
<?php
//if($_SESSION['ordID']!=""){
//$sql="UPDATE tbl_order SET ord_status='Failed' WHERE ord_id='$_SESSION[ordID]'";
//db_query($sql);
//
//$sql="SELECT * FROM tbl_order WHERE ord_id='$_SESSION[ordID]'";
//$data=db_query($sql);
//$rec=mysql_fetch_array($data);
//@extract($rec);
/////////////////****** Mailer to client start here **********************//////////////
//$hostName = $_SERVER['HTTP_HOST'];	  		  
//$msgmail="<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
//<html xmlns='http://www.w3.org/1999/xhtml'>
//<head>
//<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
//<title>TradeKeyIndia.com-Largest B2B Portal In India</title>
// </head>
//<body>		  
//	 <table align='center' cellSpacing='0' cellPadding='0' width='87%' border='1' style='border:1px solid #e61938'>
//  <tbody>
//    <tr>
//      <td vAlign='top' style='background-color:#e61938; padding:10px;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:16px; color:#ffffff; text-align:center; font-weight:bold;' colspan='3' >Enquiry From $hostName</td>
//    </tr>
//
//     <tr>
//      <td width='30%' vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Package</strong> </td>
//      <td vAlign='top' width='70%' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ord_ord_name</td>
//    </tr>
//
//
//  <tr>
//      <td width='30%' vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Type</strong> </td>
//      <td vAlign='top' width='70%' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ord_pack_type</td>
//    </tr>
//
//
//  <tr>
//      <td width='30%' vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Cost</strong> </td>
//      <td vAlign='top' width='70%' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ord_amount</td>
//    </tr>
//	
//
//
//     <tr>
//      <td width='30%' vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Name</strong> </td>
//<td vAlign='top' width='70%' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ord_person_name</td>
//    </tr>
//   
//    <tr>
//      <td vAlign='top'  style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Mobile</strong> </td>
//      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ord_mobile</td>
//    </tr>
//	
//	<tr>
//      <td vAlign='top'  style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;' ><strong>Email-Id</strong> </td>
//      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ord_email</td>
//    </tr>
//	    
//    <tr>
//      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;'  ><strong>Address</strong> </td>
//      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ord_adrs</td> 
//    </tr>
//	 <tr>
//      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;'  ><strong>Date of journey</strong> </td>
//<td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>".date("d M Y",strtotime($ord_doj))."</td> 
//    </tr>
//	
//	 <tr>
//      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;'  ><strong>No. of Person</strong> </td>
//      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ord_person_no</td> 
//    </tr>
//	
//	 <tr>
//      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;'  ><strong>Pickup Points</strong> </td>
//      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ord_pickup_point</td> 
//    </tr>
//	
// <tr>
//      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#F9E2DD;padding:10px;'  ><strong>Current Status</strong> </td>
//      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ord_status</td> 
//    </tr>	
//	
//  </tbody>
//</table>
//</body>
//</html>";
////$toEmail = "arif.tradekeyindia@gmail.com";
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
//
//$mail_to_admin="arif.tradekeyindia@gmail.com";
//$sub_admin="Enquiry From $hostName";
//$mail_admin_body = "$msgmail";	
//$sender_admin =$enquiry_email;		
//$headers_admin  = "MIME-Version: 1.0" . "\r\n";
//$headers_admin .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
//$headers_admin .= "from: ".$sender_admin."\n";
//if($ord_email){
////@mail($mail_to_admin,$sub_admin,$mail_admin_body,$headers_admin);
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
<footer>
	<!--start footer main-->
	<div class="tsp-footer-main">
		<div class="container">
			<div class="row">
				<!--Start Item footer main-->
				<div class="col-xs-12 col-sm-6 col-md-3 tsp-footer-option tsp-no-padding-left">
					<aside class="tsp-widget-footer">
						<h2><a href="index.html"><img src="images/logo.png"></a></h2>
						<div class="tsp-content-item">
							<p style="text-align:justify;">India Tourism Incredible is a main transport organization in India, is well known for its profoundly proficient administration and consumer loyalty. Having its head office in Delhi,  <a href="about-us.html" class="rd-mr">Read More</a></p>
							<ul class="tsp-social-footer hidden-xs">
								<li>
									<a href="#" title="Facebook"><i class="fa fa-facebook-square"></i></a>
								</li>
								<li>
									<a href="#" title="Twitter"><i class="fa fa-twitter-square"></i></a>
								</li>
								
							
								
								<li>
									<a href="#" title="Youtube"><i class="fa fa-linkedin-square"></i></a>
								</li>
							</ul>
						</div>
					</aside>
				</div>
				
                <div class="col-xs-12 col-sm-6 col-md-3 tsp-footer-option tsp-no-padding-right">
					<aside class="tsp-widget-footer">
						<h2>Quick Links</h2>
						<div class="tsp-content-item">
							<ul class="tsp-image-instagram">
<li><a href="delhi-to-agra-tour-packages.html"><i class="fa fa-caret-right" aria-hidden="true"></i> DELHI TO AGRA TOUR PACKAGES</a></li>
<li><a href="delhi-to-jaipur-tour.html"><i class="fa fa-caret-right" aria-hidden="true"></i> DELHI TO JAIPUR TOUR</a></li> 
<li><a href="delhi-haridwar-rishikesh-laxman-jhulla-delhi-tour.html"><i class="fa fa-caret-right" aria-hidden="true"></i> DELHI-HARIDWAR- RISHIKESH-LAXMAN-JHULLA-DELHI TOUR</a></li>
<li><a href="delhi-sightseeing-tour.html"><i class="fa fa-caret-right" aria-hidden="true"></i> DELHI SIGHTSEEING TOUR</a></li>



<li><a href="cancellation-refund-policy.html"><i class="fa fa-caret-right" aria-hidden="true"></i> CANCELLATION/REFUND POLICY</a></li>
<li><a href="disclaimer.html"><i class="fa fa-caret-right" aria-hidden="true"></i> DISCLAIMER</a></li>
<li><a href="sitemap.html"><i class="fa fa-caret-right" aria-hidden="true"></i> SITEMAP</a></li>
<li><a href="enquiry.html"><i class="fa fa-caret-right" aria-hidden="true"></i> ENQUIRY NOW</a></li>
<li><a href="blog.html"><i class="fa fa-caret-right" aria-hidden="true"></i> BLOG</a></li>
								
							</ul>
						</div>
					</aside>
				</div>
				<!--End item main footer-->
		<div class="col-xs-12 col-sm-6 col-md-3 tsp-footer-option tsp-no-padding-right">
					<aside class="tsp-widget-footer">
						<h2>Payment Option</h2>
						<div class="tsp-content-item">
									<img src="images/payment.jpg" style="width:100%; border:solid 1px #ccc;">
								
							
						</div>
					</aside>
				</div>
				<!--Start Item footer main-->
				
                <div class="col-xs-12 col-sm-6 col-md-3 tsp-footer-option">
					<aside class="tsp-widget-footer">
						<h2>Contact Us</h2>
						<div class="tsp-content-item">
							<ul class="tsp-footer-address">
								<li>
									<i class="fa fa-map-marker"><span>Address:</span></i>
									<address>9198/5  Multani Dhanda, Paharganj Near Mourya Hotel New Delhi-110055</address>
								</li>
								<li>
									<a href="tel:+91-9643-457-009">
										<i class="fa fa-phone"><span>Phone:</span></i>+91-9643-457-009
									</a>
								</li>
								<li>
									<a href="mailto:mohitlalroy@gmail.com">
										<i class="fa fa-envelope"><span>Email:</span></i> mohitlalroy@gmail.com </span>
									</a>
								</li>
							</ul>
						</div>
					</aside>
				</div>
				<!--End item main footer-->
			</div><!--row-->
		</div><!--container-->
	</div>
	<!--end footer main-->
	<!--start footer bar-->
	<div class="tsp-footer-bar">
		<div class="container">
			<div class="row">
				<!--start box text copyright-->
				<div class="tsp-copyright col-md-12 col-sm-12 col-xs-12 tsp-no-padding-left text-center">
					<p>Copyrights � 2017 All Rights Reserved. India Tourism Incredible</p>
				</div>
			</div>
		</div>
	</div>
	<!--End footer bar-->
</footer>
</div>
<script src="assets/js/vendors/jquery.min.js"></script>
<script src="assets/js/vendors/bootstrap.min.js"></script>
<script src="assets/js/vendors/jquery.slicknav.min.js"></script>
<script src="assets/js/common.js"></script>
</body>

</html>