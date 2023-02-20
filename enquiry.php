<!doctype html>
<html class="no-js" lang="en">
<?php include("dynamic_values.php"); ?>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>India Tourism Incredible - Ask for free Enquiry</title>
<meta NAME="description" content="India Tourism Incredible for any enquiries and comments, you can contact With India Tourism Incredible by phone, Email and Enquiry form."/>
<meta NAME="keywords" content="India Tourism Incredible - Ask for free Enquiry"/>
<link href="http://www.indiatourismincredible.com/favicon.png" rel="shortcut icon" type="image/x-icon"/>
<link href="https://fonts.googleapis.com/css?family=Patua+One%7COpen+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CRoboto+Slab:100,300,400,700Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link rel="stylesheet" href="assets/css/vendors/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/vendors/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="assets/css/vendors/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/vendors/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/vendors/owl.theme.green.min.css">
<link rel="stylesheet" href="assets/css/vendors/animate.min.css">
<link rel="stylesheet" href="assets/css/vendors/slicknav.min.css">
<link rel="stylesheet" href="assets/css/common/main.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script> 
    $(function(){
      $("#disclaimer-section").load("header-disclaimer.html"); 
    });
    </script> 
    
    <!-- Global site tag (gtag.js) - Google Ads: 830489390 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-830489390"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'AW-830489390');
</script>
    
    
<script type="application/ld+json">
{
"@context": "http://schema.org/",
"@type": "LocalBusiness",
"name": "IndiaTourismIncredible",
"url": "https://www.indiatourismincredible.com",
"description": "Delhi Sightseeing Tour By Ac Bus",
"pricerange":"Affordable | Call: <?=$whatspp_no?> | Mail Us: info@indiatourismincredible.com",
"AggregateRating": {
  "@type": "AggregateRating",
  "ratingValue": "4.9",
  "bestRating": "5",
  "ratingCount": "5010"
 }
}
</script>

</head>
<body>
<div class="tsp-main">
  <?php include("site-header-menu.php");?>
<!-- <div id="disclaimer-section"></div> -->

<div class="clearfix"></div>
  <!--header-->
  <section class="tsp-title-breadcrumb">
    <div class="container">
      <div class="row">
        <div class="tsp-title col-md-6 col-sm-6 col-xs-12 tsp-no-padding-left">
          <h1>ENQUIRY <span> NOW</span></h1>
        </div>
        <!-- div title head page -->
        <div class="tsp-breadcumb col-md-6 col-sm-6 col-xs-12 tsp-no-padding-right">
          <ul>
            <li><a href="index.html">Home</a></li>
            <li>/</li>
            <li><span>ENQUIRY NOW</span></li>
          </ul>
        </div>
        <!-- div breadcrumb --> 
      </div>
      <!-- div row --> 
    </div>
  </section>
  <main>
    <section class="tsp-content-contact-page">
      <div class="container tsp-no-padding">
        <div class="row">
          <div>
            <div class="col-md-6">
              <form name="ContactFrm" action="send-enquiry-details.php" method="post" enctype="multipart/form-data" onsubmit="return EnqValidation();">
                <div class="tsp-form-site">
                  <div class="form-group tsp-no-padding-left tsp-full-xs">
                    <label>Name</label>
                    <input type="text" name="enquiry_nam" id="enquiry_nam">
                  </div>
                  <div class="form-group tsp-no-padding-right tsp-full-xs">
                    <label>Mobile No</label>
                    <input type="text" name="enquiry_mobil" id="enquiry_mobil">
                  </div>
                  <div class="form-group tsp-no-padding-right tsp-full-xs">
                    <label>Email Id</label>
                    <input type="text" name="enquiry_email" id="enquiry_email">
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                    <textarea name="address" id="address"></textarea>
                  </div>
                  <div class="form-group tsp-no-padding-right tsp-full-xs">
                    <label>Subject</label>
                    <input type="text" name="subject" id="subject">
                  </div>
                  <div class="form-group">
                    <label>Enquiry Details</label>
                    <textarea name="enquiry" id="enquiry"></textarea>
                  </div>
                </div>
                <input type="submit" name="EnqSubmit" value="Submit">
              </form>
            </div>
            <div class="col-md-6">
              <div class="tsp-content"> <img src="images/enquiry.png" alt="Enquiry - India Tourism Incredible" title="Enquiry - India Tourism Incredible" width="100%"> </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  
    <?php include("service-box-section.php"); ?>
            
 <?php include("site-footer.php"); ?>
</div>
<script type="text/javascript">
function EnqValidation(){	
   function trim(str){				
	 return str.replace(/^\s*|\s*$/g,'');
	}	
if(trim(document.getElementById('enquiry_nam').value)==0){		
alert("Enter your Name !");
document.getElementById('enquiry_nam').focus();
return false;
}	
if (!document.getElementById('enquiry_nam').value.match(/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/)){
alert("Please enter only alphabets !");
document.getElementById('enquiry_nam').value='';
document.getElementById('enquiry_nam').focus();
return false;
}
var mobno=trim(document.getElementById('enquiry_mobil').value);
if(trim(document.getElementById('enquiry_mobil').value)==0){
	alert("Enter your Mobile No.!");
	document.getElementById('enquiry_mobil').focus();
	return false;
}
if(isNaN(document.getElementById('enquiry_mobil').value)){
	alert("Mobile no. should be no.!");
	document.getElementById('enquiry_mobil').focus();
	return false;
}
if(mobno.length < 10){
    alert("Mobile no. should be 10 digit long !");
	document.getElementById('enquiry_mobil').focus();
	return false;
}

var email=trim(document.getElementById('enquiry_email').value);
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email=='')
  {
	  alert('Please Enter Email Id');
	  document.getElementById('enquiry_email').focus();
	  return false;
  }else if(!email.match(mailformat)){
alert("You have entered an invalid email address!");
document.getElementById('enquiry_email').focus();
return false;
}

if(trim(document.getElementById('address').value)==0){
	alert("Enter your Address !");
	document.getElementById('address').focus();
	return false;
 }
 
 if(trim(document.getElementById('subject').value)==0){
	alert("Enter your Subject !");
	document.getElementById('subject').focus();
	return false;
 }
 
 if(trim(document.getElementById('enquiry').value)==0){
	alert("Enter your Enquiry Details !");
	document.getElementById('enquiry').focus();
	return false;
 }

}
</script> 
<script src="assets/js/vendors/jquery.min.js"></script> 
<script src="assets/js/vendors/bootstrap.min.js"></script> 
<script src="assets/js/vendors/jquery.slicknav.min.js"></script> 
<script src="assets/js/common.js"></script>
</body>
</html>