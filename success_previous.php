<?php
ob_start();
require_once("includes/dbsmain.inc.php");
?>
<?php include("dynamic_values.php"); ?>
<!doctype html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
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
   <?php include("site-header-menu.php");?>
<div class="clearfix"></div>
<!--header-->
<section class="tsp-title-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="tsp-title col-md-6 col-sm-6 col-xs-12 tsp-no-padding-left">
                        <h1>Succe<span>ss</span></h1>
                    </div><!-- div title head page -->
                    <div class="tsp-breadcumb col-md-6 col-sm-6 col-xs-12 tsp-no-padding-right">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>/</li>
                            <li><span>Success</span></li>
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
if($_SESSION['ordID']!=""){
$sql="UPDATE tbl_order SET ord_status='Paid' WHERE ord_id='$_SESSION[ordID]'";
db_query($sql);

$sql="SELECT * FROM tbl_order WHERE ord_id='$_SESSION[ordID]'";
$data=db_query($sql);
$rec=mysqli_fetch_array($data);
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
//$toEmail = "arif.tradekeyindia@gmail.com";

// 1 mohitlalroy1970@gmail.com
// 2 mohitlalroy@gmail.com
// 3 info@indiatourismincredible.com


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
$msgmaill="<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<title>TradeKeyIndia.com-Largest B2B Portal In India</title>
</head>
<body>
<table align='center' cellSpacing='0' cellPadding='0' width='87%' border='1' style='border:1px solid #B7B7B7'>
  <tbody>
    <tr>
      <td vAlign='top' style='background-color:#E2E2E2; padding:10px;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:16px; color:#000; text-align:center; font-weight:bold;' colspan='3' >Booking confirmation on IndiaTourismIncredible</td>
    </tr>
    <tr>
      <td width='30%' vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#EFEFEF;padding:10px;' ><strong>Package</strong></td>
      <td vAlign='top' width='70%' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ord_ord_name</td>
    </tr>
    <tr>
      <td width='30%' vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#EFEFEF;padding:10px;' ><strong>Type</strong></td>
      <td vAlign='top' width='70%' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ord_pack_type</td>
    </tr>
    <tr>
      <td width='30%' vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#EFEFEF;padding:10px;' ><strong>Cost</strong></td>
      <td vAlign='top' width='70%' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ord_amount</td>
    </tr>
    <tr>
      <td width='30%' vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#EFEFEF;padding:10px;' ><strong>Name</strong></td>
      <td vAlign='top' width='70%' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ord_person_name</td>
    </tr>
    <tr>
      <td vAlign='top'  style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#EFEFEF;padding:10px;' ><strong>Mobile</strong></td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ord_mobile</td>
    </tr>
    <tr>
      <td vAlign='top'  style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#EFEFEF;padding:10px;' ><strong>Email-Id</strong></td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ord_email</td>
    </tr>
    <tr>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#EFEFEF;padding:10px;'  ><strong>Address</strong></td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ord_adrs</td>
    </tr>
    <tr>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#EFEFEF;padding:10px;'  ><strong>Date of journey</strong></td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>".date("d M Y",strtotime($ord_doj))."</td>
    </tr>
    <tr>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#EFEFEF;padding:10px;'  ><strong>No. of Person</strong></td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ord_person_no</td>
    </tr>
    <tr>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#EFEFEF;padding:10px;'  ><strong>Pickup Points</strong></td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ord_pickup_point</td>
    </tr>
    <tr>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#003366; background-color:#EFEFEF;padding:10px;'  ><strong>Current Status</strong></td>
      <td vAlign='top' style='font-family:Verdana, Arial, Helvetica, sans-serif;padding:10px;'>$ord_status</td>
    </tr>
  </tbody>
</table>
</body>
</html>";
$mail_to_admin=$ord_email;
$sub_admin="Booking confirmation on IndiaTourismIncredible";
$mail_admin_body = "$msgmaill";	
$sender_admin ="mohitlalroy@gmail.com";		
$headers_admin  = "MIME-Version: 1.0" . "\r\n";
$headers_admin .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers_admin .= "from: ".$sender_admin."\n";
if($ord_email){
 @mail($mail_to_admin,$sub_admin,$mail_admin_body,$headers_admin);
}
///////////////// Mail To Admin End//////////////////////////////////
		
		  //header("Location:thanks.html#tnk");
//		  exit;

}	
?>            
            
            
          <h2 id="tnk"> Success</h2>
                    <h3 align="center">Your trantaction is done successfully.</h3>
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