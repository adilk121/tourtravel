<?php include("site-header.php"); ?>
       
<?php
$package_url=$_REQUEST['cat_url'];
$package_id=db_scalar("select category_id from tbl_category where category_url='$package_url' ");
$package_res=mysqli_fetch_array(db_query("select * from tbl_category where category_id='$package_id' "));


?>
      <!-- Breadcrumb Area Start -->
      <section class="peulis-breadcrumb-area">
         <div class="breadcrumb-top">
            <div class="container">
               <div class="col-lg-12">
                  <div class="breadcrumb-box">
                     <h2><?=$package_res['category_display_name']?></h2>
                      <ul class="breadcrumb-inn">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a><?=$package_res['category_name']?></a></li>
                      </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcrumb Area End -->
       
<?php include("package-search-section.php"); ?>          
      <!-- Tour Details Area Start -->
      <section class="peulis-tour-details-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-8">
                  <div class="tour-details-left">
                     <div class="tour-details-head">
                        <h3><?=$package_res['category_name']?> <span> <span class="tour_price">₹<?=$package_res['category_discount_price']?></span> / per person </span></h3>
                        <div class="tour-rating">
                           <ul>
                              <li><i class="fa fa-star"></i></li>
                              <li><i class="fa fa-star"></i></li>
                              <li><i class="fa fa-star"></i></li>
                              <li><i class="fa fa-star"></i></li>
                              <li><i class="fa fa-star-o"></i></li>
                           </ul>
                        <!--   <p>(2 Review) </p>-->
                        </div>
                     </div>
                     <div class="tour-details-image">
                        <img src="<?=$site_url?>/uploaded_files/<?=$package_res['category_image_name']?>" alt="<?=$package_res['category_name']?>" />
                     </div>

<?php
$cat_image_m=db_query("select * from tbl_category_image where 1 and category_image_cat_id='$package_res[category_id]' order by category_image_id asc");
if(mysqli_num_rows($cat_image_m)>0)
   {?>
                       <div class="tour-gallery">
                     
                        <div class="tour-gallery-slider owl-carousel">
<?php
while($image_res_m=mysqli_fetch_array($cat_image_m))
{ 
?>

                           <div class="single-gallery-tour">
                              <img src="<?=$site_url?>/category_more_images/<?=$image_res_m['category_image_name']?>" alt="<?=$package_res['category_name']?>" />
                           </div>
<?}?>
                          
                        </div>
                     </div>
<?}?>                     

                 <?=$package_res['category_description']?>
                     
                   


                     
                  
                  </div>
               </div>


               <div class="col-lg-4">
                  <div class="sidebar-widget">


                     <div class="single-sidebar">
                        <div class="quick-contact">
                           <h3>Book This Tour</h3>
                           <form action="<?=$site_url?>/booking.html" method="post"  enctype="multipart/form-data" onsubmit="return checkValidationFinalBooking();">
                              <div class="book-tour-field">
                                 <input type="text" placeholder="Your Name" name="booking_name" id="final_booking_name">
                              </div>
                              
                              <div class="book-tour-field">
                                 <input type="text" placeholder="Phone Number" name="booking_mobile_no" id="final_booking_mobile_no" maxlength="10">
                              </div>

                              <div class="book-tour-field">
                                 <input  type="text" name="booking_date" id="final_booking_date" placeholder="Select Travel Date " onfocus="(this.type='date')" onblur="(this.type='text')">
                              </div>

                              <input type="hidden" name="booking_package_id" value=" <?=$package_res['category_id']?>">

                              <div class="book-tour-field">
                                 <button type="submit" name="submit_booking">Book Now</button>
                              </div>
                           </form>
                        </div>
                     </div>

                     

                  <!--    <div class="single-sidebar">
                        <h3>More Information</h3>
                        <ul class="more-info">
                           <li>
                              <span><i class="fa fa-phone"></i> Phone Number:</span>
                              1-567-124-44227
                           </li>
                           <li>
                              <span><i class="fa fa-clock-o"></i> Office Time:</span>
                              9am - 5pm
                           </li>
                           <li>
                              <span><i class="fa fa-map-marker"></i> Office Location:</span>
                              5520 Quebec Place
                           </li>
                        </ul>
                     </div> -->
                     <div class="single-sidebar">
                        <h3>Our Packages</h3>
                        <ul class="category">
                               <?php
$pack_sql=db_query("select * from tbl_category where category_status='Active' order by category_id asc");
while($pack_res=mysqli_fetch_array($pack_sql))
{?> 
<li><a href="<?=$site_url?>/<?=$pack_res['category_url']?>.html"><?=$pack_res['category_display_name']?></a></li>
<?}?>                           
                     
                        </ul>
                     </div>

                  </div>
               </div>

            </div>



         </div>
      </section>



       <?php //include("index-package-section.php"); ?>
<script>
document.getElementById("final_booking_date").min = new Date().getFullYear() + "-" +  parseInt(new Date().getMonth() + 1 ) + "-" + new Date().getDate();


    function checkValidationFinalBooking(){
      
        var name=document.getElementById("final_booking_name");
         var mobile=document.getElementById("final_booking_mobile_no");
        var date=document.getElementById("final_booking_date");

         
        if(name.value==""){
           alert("Please enter your name!");
             name.focus();
            return false;
        }

        if(name.value.length<=3){
           alert("Name should be greater than 3 alphabet!");
              name.focus();
            return false;
        }

        if (/[0-9]/g.test(name.value)) {

           alert("Use alphabet only!");
             name.focus();

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


       <?php include("site-footer.php"); ?>