<?php 
ob_start();
require_once("includes/dbsmain.inc.php");
$page_name=basename($_SERVER['PHP_SELF'],'.php');
include("site-main-query.php");
$sess_id=session_id();

$site_url=$compDATA['admin_website_url'];
$author = str_replace("http://","","$site_url");

$full_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="<?=$author?>">
    <!-- Title -->
<?php



$catgoryID=db_scalar("select category_id from tbl_category where category_url='$_REQUEST[cat_url]' ");
if($catgoryID=="")
{
  $catgoryID=$_REQUEST['cat_id'];
}
if(!empty($catgoryID)){
$cat_meta_title=db_scalar("select category_meta_title from  tbl_category where category_status='Active' and category_id='$catgoryID'");
$cat_meta_desc=db_scalar("select category_meta_description from  tbl_category where category_status='Active' and category_id='$catgoryID'");
$cat_meta_keyw=db_scalar("select category_meta_keywords from  tbl_category where category_status='Active' and category_id='$catgoryID'");
$cat_meta_cat_name=db_scalar("select category_name from  tbl_category where category_status='Active' and category_id='$catgoryID'");

if($cat_meta_title=="")
{
    $cat_meta_title="Best Supplier of ".$cat_meta_cat_name." in New Delhi India";
}

if($cat_meta_desc=="")
{
    $cat_meta_desc="Shoe Factory Organization is one of the top suppliers of ".$cat_meta_cat_name." in New Delhi India, Our Organization Shoe Factory supply best quality products like ".$cat_meta_cat_name." at reasonable price.";
}


if($cat_meta_keyw=="")
{
    $cat_meta_keyw=$cat_meta_cat_name." supplier in new delhi india, supplier of ".$cat_meta_cat_name." in new delhi india, ".$cat_meta_cat_name." supplier in new delhi, supplier of ".$cat_meta_cat_name." in new delhi, best ".$cat_meta_cat_name." supplier in new delhi, best supplier of ".$cat_meta_cat_name." in new delhi, best price of ".$cat_meta_cat_name.", cost of ".$cat_meta_cat_name;
}



?>
<title><?=$cat_meta_title?></title>
<META NAME="description" content="<?=$cat_meta_desc?>" />
<META NAME="keywords" content="<?=$cat_meta_keyw?>" />
<? }else{
$titl=db_scalar("select site_pages_meta_title from  tbl_site_pages where site_pages_status='Active' and site_pages_link='$page_name'");
$desc=db_scalar("select site_pages_meta_description from  tbl_site_pages where site_pages_status='Active' and site_pages_link='$page_name'");
$keyw=db_scalar("select site_pages_meta_keyword from  tbl_site_pages where site_pages_status='Active' and site_pages_link='$page_name'");
if($titl=="")
{
    $titl=$compDATA['admin_company_name']." ".$page_name;
}

if($desc=="")
{
    $desc=$compDATA['admin_company_name']." ".$page_name;
}

if($keyw=="")
{
    $keyw=$compDATA['admin_company_name']." ".$page_name;
}
?>
<title>
    <?=$titl?>
</title>
<meta name="description" content="<?=$desc?>">
<META NAME="keywords" content="<?=$keyw?>" />
<?}?>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?=$site_url?>/<?=$compDATA['admin_favicon']?>">
    <!--Bootstrap css-->
    <link rel="stylesheet" href="<?=$site_url?>/assets/css/bootstrap.css">
    <!--Font Awesome css-->
    <link rel="stylesheet" href="<?=$site_url?>/assets/css/font-awesome.min.css">
    <!--Flaticon css-->
    <link rel="stylesheet" href="<?=$site_url?>/assets/flaticon/flaticon.css">
    <!--Animatedheadline css-->
    <link rel="stylesheet" href="<?=$site_url?>/assets/css/jquery.animatedheadline.css">
    <!--Magnific css-->
    <link rel="stylesheet" href="<?=$site_url?>/assets/css/magnific-popup.css">
    <!--Owl-Carousel css-->
    <link rel="stylesheet" href="<?=$site_url?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=$site_url?>/assets/css/owl.theme.default.min.css">
    <!--Animate css-->
    <link rel="stylesheet" href="<?=$site_url?>/assets/css/animate.min.css">
    <!--Datepicker css-->
    <link rel="stylesheet" href="<?=$site_url?>/assets/css/jquery.datepicker.css">
    <!--Nice Select css-->
    <link rel="stylesheet" href="<?=$site_url?>/assets/css/nice-select.css">
    <!--Slicknav css-->
    <link rel="stylesheet" href="<?=$site_url?>/assets/css/slicknav.min.css">
    <!--Site Main Style css-->
    <link rel="stylesheet" href="<?=$site_url?>/assets/css/style.css">
    <!--Responsive css-->
    <link rel="stylesheet" href="<?=$site_url?>/assets/css/responsive.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">


<?php if($compDATA['admin_index_follow']=='Yes'){ ?>
<meta name="robots" content="index, follow" />
<? }else{ ?>
<meta name="robots" content="noindex, nofollow" />
<? } ?>
<?php if($compDATA['admin_meta_fb_id']!=''){ ?>
<meta property="fb:page_id" content="<?=$compDATA['admin_meta_fb_id']?>" />
<? } ?>
<?php if($compDATA['admin_meta_alexa_id']!=''){ ?>
<meta name="alexaVerifyID" content="<?=$compDATA['admin_meta_alexa_id']?>"/>
<? } ?>
<?php if($compDATA['admin_meta_msvalidate_id']!=''){ ?>
<meta name="msvalidate.01" content="<?=$compDATA['admin_meta_msvalidate_id']?>" />
<? } ?>
<?php if($compDATA['admin_site_verification_code']!=''){ ?>
<meta name="google-site-verification" content="<?=$compDATA['admin_site_verification_code']?>" />
<? } ?>
<?php if($compDATA['admin_google_analytic_code']!=''){
 echo $compDATA['admin_google_analytic_code'];
}?>

<style>

.top-hdr-info
{
    display:none;
}

.hdr-menu-mobile-links
{
    display:none !important;
}

    @media only screen and (min-width:320px) and (max-width:480px) and (orientation:portrait){

.top-hdr-links{
    display:none;
}

.top-hdr-info
{
    /*display:inline-block;*/
}

.hdr-menu-mobile-links
{
    display:block !important;
}


}


    
</style>

</head>

<body>




    <!-- Header Area Start -->
    <header class="peulis-header-area">
        <!-- Header Top Area Start -->
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="header-top-left">
                            <p>
                                <i class="fa fa-clock-o"></i>
                                24x7 Support
                            </p>
                             <p>
                                <i class="fa fa-phone"></i>
                               <?=$compDATA['admin_mobile']?>
                            </p>
                            <p>
                                <i class="fa fa-envelope"></i>
                               <?=$compDATA['admin_email']?>
                            </p>
                           
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="header-top-right">
                           <div class="header-top-social">
                                <!-- <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>

                                </ul>  -->
                            </div>

                              <div class="header-top-auth top-hdr-links">
                                <ul>
                                    <li  style="background-color: orange; padding:3px;"><a href="#">Online Payment</a></li>
                                    <li style="background-color: orange; padding:3px;"><a href="#">Print Ticket</a></li>
                                    <li style="background-color: orange; padding:3px;"><a href="#">Cancel Ticket</a></li>
                                </ul>
                            </div>
                            
                             <div class="header-top-auth top-hdr-info">
                                <ul>
                                    <li  style="background-color: orange; padding:1px; font-size:12px; "><a href="tel:<?=$compDATA['admin_mobile']?>"><i class="fa fa-phone"></i> <?=$compDATA['admin_mobile']?></a></li>
                                    <li style="background-color: orange; padding:1px; font-size:12px;"><a href="mailto:<?=$compDATA['admin_email']?>"><i class="fa fa-envelope"></i> <?=$compDATA['admin_email']?></a></li>
                                </ul>
                            </div>
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top Area End -->
<?php
$sql_logo_welcome=db_query("select * from tbl_header where 1 and header_status='Active' limit 1");
if(mysqli_num_rows($sql_logo_welcome)>0){
$DATALOGO=mysqli_fetch_array($sql_logo_welcome);
@extract($DATALOGO);
}
?>

        <!-- Main Header Area Start -->
        <div class="main-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header_inn">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="site-logo">
                                        <a href="<?=$site_url?>">
                                            <img src="<?=$site_url?>/header_files/<?=$DATALOGO['header_logo']?>" alt="<?=$compDATA['admin_company_name']?>" title="<?=$compDATA['admin_company_name']?>" />
                                        </a>
                                    </div>
                                    <!-- Responsive Menu Start -->
                                    <div class="peulis-responsive-menu"></div>
                                    <!-- Responsive Menu End -->
                                </div>
                                <div class="col-lg-9">
                                    <div class="mainmenu">
                                        <nav>
                                            <ul id="navigation_menu">

<?php
$link_sql=db_query("select * from tbl_site_pages where 1 and site_pages_status='Active' and site_pages_show_in_header='Yes' order by site_pages_order_by asc");
while($link_data=mysqli_fetch_array($link_sql)){ 
$pgName=$link_data['site_pages_link'];

if($pgName=="bus-tour-packages"){
?>   
<li><a href="<?=$site_url?>/<?=$link_data['site_pages_link']?>.html"><?=$link_data['site_pages_name']?></a>
<ul>

<?php
$pack_sql=db_query("select * from tbl_category where category_status='Active' order by category_id asc");
while($pack_res=mysqli_fetch_array($pack_sql))
{?>
<li><a href="<?=$site_url?>/<?=$pack_res['category_url']?>.html"><?=$pack_res['category_display_name']?></a></li>
<?}?>
                                           
</ul>
</li>

<?}else{?>
<li <?php if($page_name==$pgName){?> class="active" <?}?> ><a href="<?=$site_url?>/<?=$link_data['site_pages_link']?>.html"><?=$link_data['site_pages_name']?></a></li>
<?}?>
<?}?>


<li class="hdr-menu-mobile-links"><a href="#">Online Payment</a></li>
<li class="hdr-menu-mobile-links"><a href="#">Print Ticket</a></li>
<li class="hdr-menu-mobile-links"><a href="#">Cancel Ticket</a></li>



                                              <!--   <li><a href="index.html">About Us</a></li>
                                                <li><a href="index.html">Bus Tour Packages</a>
                                                    <ul>
                                                        <li><a href="about.html">Agra Tour By AC Luxury Bus</a></li>
                                                        <li><a href="guides.html">Agra Tour By AC Volvo Bus</a></li>
                                                        <li><a href="gallery.html">Agra Tour By AC MultiXL Bus</a></li>                                                
                                                    </ul>
                                                </li>

                                                <li><a href="index.html">Bus Hire</a></li>
                                                <li><a href="index.html">Agra Tour Blogs</a></li>
                                                <li><a href="index.html">Contact Us</a></li> -->


                                           
                                             

                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header Area End -->
    </header>
    <!-- Header Area End -->

