<?php
ob_start();
require_once("includes/dbsmain.inc.php");
?>
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
				 <p style="float:right; font-weight:bold; font-size:13px; color:#004297;"><i class="fa fa-envelope"></i> info@indiatourismincredible.com</p>
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
    
    <style>
	  /***********************/
.pkg_bg{background-color:#f7f7f7;  margin-bottom:10px; border:solid 1px #d1d2d2; margin-top:20px; padding:20px 15px 0px 15px; box-shadow:1px 1px 10px #069afc;}
.pkg_hdg{text-align:center; font-weight:bold; text-transform:uppercase;}
.pkg_brd{border:solid 1px #069afc; padding:0px; margin-bottom:20px;}
.pkg_nm {
    font-weight: bold;
    color: #000;
    background-color: #e2e4e5;
    border-bottom: solid 1px #069afc;
    text-align: center;
    margin: 0px;
    font-size: 17px;
    padding: 8px 2px;
}
.pkg_rs {
    font-size: 14px;
    font-weight: bold;
    text-align: center;
    padding: 10px;
    border-bottom: solid 1px #069afc;
}
.pkg_btn{padding:10px;}

.amt-sty{font-size:20px;}
@media (min-width:320px) and (max-width:767px) 
{.pkg_nm {
    font-size: 20px;
}
.pkg_rs {
    font-size: 14px;
   
}
.amt-sty{font-size:20px;}
}

	  /***************************/
	  .glysty img{margin-bottom:0px;}
	  .glysty{margin-bottom:30px;}
	   .glysty p{text-align:center; padding:8px 2px; margin:0px; height:55px; background-color:#069afc; color:#FFF; text-transform: capitalize; font-size:13px;}
	  </style>
  
   <section>
      <div class="container">
          <div class="row">
          <div class="col-md-12 text-center pkg_bg hidden-xs">
          <div class="col-md-3 text-center pkg_brd">               
                        <div class="col-md-12 pkg_nm">Same Delhi Sightseeing and Delhi Darshan Tour By AC Bus</div>
               <div class="col-md-12 pkg_rs">Tour Starts At Rs <del>399</del> = <span class="amt-sty">299/-</span></div>
                   <div class="col-md-12 pkg_btn"><a href="https://www.indiatourismincredible.com/delhi-sightseeing-tour.html" class="btnstyrd1"> Book Now</a></div>
                   </div>
                   
                   <div class="col-md-3 text-center pkg_brd">               
                        <div class="col-md-12 pkg_nm">Delhi To Agra One Day Tour By Volvo AC Bus</div>
               <div class="col-md-12 pkg_rs">Tour Starts At Rs <del>749</del> = <span class="amt-sty">649/-</span></div>
                  <div class="col-md-12 pkg_btn"><a  href="https://www.indiatourismincredible.com/delhi-to-agra-tour-packages.html" class="btnstyrd1"> Book Now</a>
                   
                   <!-- <a href="Javascript:void(0)" class="btnstyrd1" style="background-color:#933;"> Booking Full</a>-->   </div>
                   </div>
                   <div class="col-md-3 text-center pkg_brd">               
                        <div class="col-md-12 pkg_nm">Delhi To Jaipur One Day Sightseeing Tour Package By Bus</div>
               <div class="col-md-12 pkg_rs">Tour Starts At Rs <del>949</del> = <span class="amt-sty">849/-</span></div>
                   <div class="col-md-12 pkg_btn">
            <a href="https://www.indiatourismincredible.com/delhi-to-jaipur-tour.html" class="btnstyrd1"> Book Now</a></div>
                   </div>
                   
                   <div class="col-md-3 text-center pkg_brd">               
                        <div class="col-md-12 pkg_nm">DELHI-HARIDWAR- RISHIKESH-LAXMAN-JHULLA-DELHI TOUR</div>
               <div class="col-md-12 pkg_rs">Tour Starts At Rs <del>1050</del> = <span class="amt-sty">950/-</span></div>
                   <div class="col-md-12 pkg_btn"><a href="https://www.indiatourismincredible.com/delhi-haridwar-rishikesh-laxman-jhulla-delhi-tour.html" class="btnstyrd1"> Book Now</a></div>
                   </div>
            </div>
          </div>
      </div>
      </section>
            <div class="col-md-12 text-center pkg_bg hidden-sm hidden-lg hidden-md">
                   <div class="col-md-12 text-center pkg_brd">               
                        <div class="col-md-12 pkg_nm">Same Delhi Sightseeing and Delhi Darshan Tour By AC Bus</div>
               <div class="col-md-12 pkg_rs">Tour Starts At Rs <del>399</del> = <span class="amt-sty">299/-</span></div>
                   <div class="col-md-12 pkg_btn"><a href="https://www.indiatourismincredible.com/delhi-sightseeing-tour.html" class="btnstyrd1"> Book Now</a></div>
                   </div>
                   <div class="col-md-12 text-center pkg_brd">               
                        <div class="col-md-12 pkg_nm">Delhi To Agra One Day Tour By Volvo AC Bus</div>
               <div class="col-md-12 pkg_rs">Tour Starts At Rs <del>749</del> = <span class="amt-sty">649/-</span></div>
                  <div class="col-md-12 pkg_btn"><a  href="https://www.indiatourismincredible.com/delhi-to-agra-tour-packages.html" class="btnstyrd1"> Book Now</a>
                   
                   <!-- <a href="Javascript:void(0)" class="btnstyrd1" style="background-color:#933;"> Booking Full</a>-->   </div>
                   </div>
                   
                   <div class="col-md-12 text-center pkg_brd">               
                        <div class="col-md-12 pkg_nm">Delhi To Jaipur One Day Sightseeing Tour Package By Bus</div>
               <div class="col-md-12 pkg_rs">Tour Starts At Rs <del>949</del> = <span class="amt-sty">849/-</span></div>
                   <div class="col-md-12 pkg_btn">
            <a href="https://www.indiatourismincredible.com/delhi-to-jaipur-tour.html" class="btnstyrd1"> Book Now</a></div>
                   </div>
                   <div class="col-md-12 text-center pkg_brd">               
                        <div class="col-md-12 pkg_nm">DELHI-HARIDWAR- RISHIKESH-LAXMAN-JHULLA-DELHI TOUR</div>
               <div class="col-md-12 pkg_rs">Tour Starts At Rs <del>1050</del> = <span class="amt-sty">950/-</span></div>
                   <div class="col-md-12 pkg_btn"><a href="https://www.indiatourismincredible.com/delhi-haridwar-rishikesh-laxman-jhulla-delhi-tour.html" class="btnstyrd1"> Book Now</a></div>
                   </div>
            </div>
            
<footer> 
    <!--start footer main-->
    <div class="tsp-footer-main">
      <div class="container">
        <div class="row"> 
          <!--Start Item footer main-->
          <div class="col-xs-12 col-sm-6 col-md-3 tsp-footer-option tsp-no-padding-left">
            <aside class="tsp-widget-footer">
              <h2><a href="index.html"><img src="images/logo.png" alt="Best Tour Packages Company In Delhi" title="Best Tour Packages Company In Delhi"></a></h2>
              <div class="tsp-content-item">
                <p class="amiJust">There square measure organized conducted tours in most traveler centers between in style traveler destinations; cars/coaches square measure obtainable creating travel on short routes straightforward also <a href="index.html" class="rd-mr">Read More</a></p>
                <ul class="tsp-social-footer hidden-xs">
                  <li> <a href="https://www.facebook.com/India-Tourism-Incredible-209496429596735" target="_blank" title="Facebook"><i class="fa fa-facebook-square"></i></a> </li>
                  <li> <a href="https://twitter.com/indiatourismin1" target="_blank" title="Twitter"><i class="fa fa-twitter-square"></i></a> </li>
                  <li> <a href="https://www.linkedin.com/in/india-tourism-incredible-239a60152/" target="_blank" title="linkedin"><i class="fa fa-linkedin-square"></i></a> </li>
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
                   <li><a href="delhi-sightseeing-tour.html"><i class="fa fa-caret-right" aria-hidden="true"></i> DELHI SIGHTSEEING TOUR</a></li>
                  <li><a href="delhi-to-jaipur-tour.html"><i class="fa fa-caret-right" aria-hidden="true"></i> DELHI TO JAIPUR TOUR</a></li>
                  <li><a href="delhi-haridwar-rishikesh-laxman-jhulla-delhi-tour.html"><i class="fa fa-caret-right" aria-hidden="true"></i> DELHI-HARIDWAR- RISHIKESH-LAXMAN-JHULLA-DELHI TOUR</a></li>
                  <li><a href="cancellation-refund-policy.html"><i class="fa fa-caret-right" aria-hidden="true"></i> CANCELLATION/REFUND POLICY</a></li>
                  <!--<li><a href="disclaimer.html"><i class="fa fa-caret-right" aria-hidden="true"></i> DISCLAIMER</a></li>-->
                  <li><a href="sitemap.html"><i class="fa fa-caret-right" aria-hidden="true"></i> SITEMAP</a></li>
                  <li><a href="enquiry.html"><i class="fa fa-caret-right" aria-hidden="true"></i> ENQUIRY NOW</a></li>
                  <li><a href="blog.html"><i class="fa fa-caret-right" aria-hidden="true"></i> BLOG</a></li>
                </ul>
              </div>
            </aside>
          </div>
          <!--End item main footer-->
          <div class="col-xs-12 col-sm-6 col-md-2 tsp-footer-option tsp-no-padding-right">
            <aside class="tsp-widget-footer">
              <h2>Payment Option</h2>
              <div class="tsp-content-item"> <img src="images/payment.jpg" alt="India Tourism Incredible Payment Options" title="India Tourism Incredible Payment Options" class="amiPay"> </div>
            </aside>
          </div>
          <!--Start Item footer main-->
          
          <div class="col-xs-12 col-sm-6 col-md-4 tsp-footer-option">
            <aside class="tsp-widget-footer">
              <h2>Contact Us</h2>
              <div class="tsp-content-item">
                <ul class="tsp-footer-address">
                  <li> <i class="fa fa-map-marker"><span>Address:</span></i>
                    <address>
                   9198/5  Multani Dhanda, Paharganj Near Mourya Hotel New Delhi-110055
                    </address>
                  </li>
                  <li> <a href="tel:+91-9643-457-009"> <i class="fa fa-phone"><span>Phone:</span></i>+91-9643-457-009 </a> </li>
                  <li> <a href="mailto:info@indiatourismincredible.com"> <i class="fa fa-envelope"><span>Email:</span></i> info@indiatourismincredible.com </span> </a> </li>
                </ul>
              </div>
            </aside>
          </div>
          <!--End item main footer--> 
        </div>
        <!--row--> 
      </div>
      <!--container--> 
    </div>
    <!--end footer main--> 
    <!--start footer bar-->
    <div class="tsp-footer-bar">
      <div class="container">
        <div class="row"> 
          <!--start box text copyright-->
          <div class="tsp-copyright col-md-12 col-sm-12 col-xs-12 tsp-no-padding-left text-center">
            <p>Copyrights © 2017 All Rights Reserved. India Tourism Incredible</p>
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