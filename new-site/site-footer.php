 <?php
 if($page_name!="index")
 {?>
 
   <?php include("index-package-section.php"); ?>
   <?php include("index-why-choose-us.php"); ?>
<?}?>
<?php include("index-reviews-and-faq.php"); ?>


 <div class="col-md-12 col-sm-12 " style="margin-bottom:20px;">

                            <div class="banner-welcome">
                                
                                <form action="<?=$site_url?>/pre-booking.html" method="post"  enctype="multipart/form-data" onsubmit="return checkValidationCommenFooterBooking();">
                                   
                                    <p>
                                       <!-- <select class="wide" name="booking_package_id" id="commen_footer_booking_package_id">
                                            <option value=""> --- Select Bus Tour --- </option>
    <?php
$pack_sql=db_query("select * from tbl_category where category_status='Active' order by category_id asc");
while($pack_res=mysqli_fetch_array($pack_sql))
{?>  
<option value="<?=$pack_res['category_id']?>"><?=$pack_res['category_display_name']?></option>
<?}?>   
                                        
                                        </select>-->
                                        
<!--<select class="wide" name="" id="commen_footer_booking_package_id">
<option value="all" selected >Agra Tour Bus</option>
</select>  -->        
                           
<input type="text" id="commen_footer_booking_package_id" value="Search Tour Package" readonly style="color:red; font-weight:bold;">

             
                                    </p>
                                     <p>
                                      
                                        <input type="text" placeholder="Phone Number" name="booking_mobile_no" id="commen_footer_booking_mobile_no" maxlength="10">
                                    </p>
                                    <p>
 <input  type="text" name="booking_date" id="commen_footer_booking_date" placeholder="Select Travel Date " onfocus="(this.type='date')" onblur="(this.type='text')">
                                      
                                    </p>
                                    <p>
                                        <button type="submit" name="submit_booking">Search Now </button>
                                    </p>
                                </form>
                            </div>
                        </div>




<script>

document.getElementById("commen_footer_booking_date").min = new Date().getFullYear() + "-" +  parseInt(new Date().getMonth() + 1 ) + "-" + new Date().getDate();


    function checkValidationCommenFooterBooking(){
      
        var package=document.getElementById("commen_footer_booking_package_id");
         var mobile=document.getElementById("commen_footer_booking_mobile_no");
        var date=document.getElementById("commen_footer_booking_date");

         
        if(package.value==""){
           alert("Please select package!");
             package.focus();
            return false;
        }


           if(mobile.value==""){
             alert("Please enter phone number!");
            mobile.focus();

            return false;
        }

        if(isNaN(mobile.value)){
               alert("Please enter numeric value!");
            mobile.focus();

            return false;
        }

        if(mobile.value.length<10 || mobile.value.length>10){
              alert("Phone number should be 10 digit long!");
            mobile.focus();
            return false;
        }

        if(date.value==""){
          alert("Please select date!");
            date.focus();
           
            return false;
        }
        
      

    }
    
  
</script>



                  



    <!-- Footer Area Start -->
    <footer class="peulis-footer-area">
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer">
                             <div class="footer-logo">
                                <a href="<?=$site_url?>">
                                    <img src="<?=$site_url?>/header_files/<?=$DATALOGO['header_logo']?>" alt="<?=$compDATA['admin_company_name']?>" />
                                </a>
                            </div>
<?php
$ftr_desc=db_scalar("select site_pages_description from tbl_site_pages  where site_pages_link='about-us' ");
?>
<p><?=substr(strip_tags($ftr_desc), 0,160)?>... <a href="<?=$site_url?>/about-us.html" style="color:white; font-weight: bold;">Read More</a></p>
                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer">
                            <h3>Quick Links</h3>
                            <ul>
                                                                    <?php
$link_sql_footer=db_query("select * from tbl_site_pages where 1 and site_pages_status='Active' and site_pages_show_in_footer='Yes' and site_pages_link!='category' order by site_pages_order_by asc ");
while($link_data_footer=mysqli_fetch_array($link_sql_footer)){
    ?>
<li><a href="<?=$site_url?>/<?=$link_data_footer['site_pages_link']?>.html"><i class="fa fa-angle-right"></i> <?=$link_data_footer['site_pages_name']?></a></li>
<?}?>

                              
                                


                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer">
                            <h3>Our Package</h3>
                            <ul>
                                <?php
$pack_sql=db_query("select * from tbl_category where category_status='Active' order by category_id asc");
while($pack_res=mysqli_fetch_array($pack_sql))
{?>
<li><a href="<?=$site_url?>/<?=$pack_res['category_url']?>.html"><i class="fa fa-angle-right"></i> <?=$pack_res['category_display_name']?></a></li>
<?}?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer">
                            <h3>Contact Details</h3>


<p><i class="fa fa-map-marker"></i> <?=$compDATA['admin_address']?>, <?=$compDATA['admin_city']?>, <?=$compDATA['admin_state']?>, <?=$compDATA['admin_country']?> - <?=$compDATA['admin_zip_code']?></p>

<p><i class="fa fa-phone"></i>
  <?php if($compDATA['admin_mobile']!=""){?><a href="tel:<?=$compDATA['admin_mobile']?>"><?=$compDATA['admin_mobile']?></a><?}?>

<?php if($compDATA['admin_phone']!=""){?><a href="tel:<?=$compDATA['admin_phone']?>">/ <?=$compDATA['admin_phone']?></a><?}?></p>


<p><i class="fa fa-envelope"></i>
  <?php if($compDATA['admin_email']!=""){?>
  <a href="mailto:<?=$compDATA['admin_email']?>"><?=$compDATA['admin_email']?></a>
  <?}?>

  <?php if($compDATA['admin_alt_email']!=""){?>
  <a href="mailto:<?=$compDATA['admin_alt_email']?>"><?=$compDATA['admin_alt_email']?></a>
  <?}?>

</p>


                            <div class="payment_image">
                                <img src="<?=$site_url?>/assets/img/creditcard-logo.png" alt="Payment Card" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area" style="background-color: #1EC8E7;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-bottom-box">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="footer-bottom-left">
                                     <p style="color:white;"><span ><?php if(!empty($compDATA['admin_copyright'])){ ?>Copyright &copy; <?=$compDATA['admin_copyright'];?><? } ?> <?php if(!empty($compDATA['admin_all_right_reserved'])){ ?><?=$compDATA['admin_all_right_reserved'];?> - All Rights Reserved.<? } ?> </span><br>Designed by | <a href="<?=$compDATA['admin_keyword_link']?>" target="_blank" ><?=$compDATA['admin_member_of']?> - <?=$compDATA['admin_keyword']?></a></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="footer-bottom-left">
                                        <ul>
                                            <?php if($compDATA['admin_facebook_link']!=''){ ?>
                                            <li><a href="<?=$compDATA['admin_facebook_link']?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                            <?}?>
                                             <?php if($compDATA['admin_twitter_link']!=''){ ?>
                                            <li><a href="<?=$compDATA['admin_twitter_link']?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                            <?}?>
                                             <?php if($compDATA['admin_linkedin_link']!=''){ ?>
                                            <li><a href="<?=$compDATA['admin_linkedin_link']?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                            <?}?>
                                             <?php if($compDATA['admin_instagram_link']!=''){ ?>
                                            <li><a href="<?=$compDATA['admin_instagram_link']?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                            <?}?>
                                             <?php if($compDATA['admin_pinterest_link']!=''){ ?>
                                            <li><a href="<?=$compDATA['admin_pinterest_link']?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                            <?}?>
                                             <?php if($compDATA['admin_youtube_link']!=''){ ?>
                                            <li><a href="<?=$compDATA['admin_youtube_link']?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                            <?}?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->




    <!--Jquery js-->
    <script src="<?=$site_url?>/assets/js/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="<?=$site_url?>/assets/js/popper.min.js"></script>
    <!--Bootstrap js-->
    <script src="<?=$site_url?>/assets/js/bootstrap.min.js"></script>
    <!--Owl-Carousel js-->
    <script src="<?=$site_url?>/assets/js/owl.carousel.min.js"></script>
    <!--Animatedheadline js-->
    <script src="<?=$site_url?>/assets/js/jquery.animatedheadline.min.js"></script>
    <!--Slicknav js-->
    <script src="<?=$site_url?>/assets/js/jquery.slicknav.min.js"></script>
    <!--Magnific js-->
    <script src="<?=$site_url?>/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Datepicker -->
    <script src="<?=$site_url?>/assets/js/jquery.datepicker.min.js"></script>
    <!--Nice Select js-->
    <script src="<?=$site_url?>/assets/js/jquery.nice-select.min.js"></script>
    <!-- Way Points JS -->
    <script src="<?=$site_url?>/assets/js/waypoints-min.js"></script>
    <!--Main js-->
    <script src="<?=$site_url?>/assets/js/main.js"></script>
</body>


</html>
