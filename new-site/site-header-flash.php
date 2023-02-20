 <!-- Slider Area Start -->
    <section class="peulis-slider-area overlay">
        <div class="peulis-slide owl-carousel">
            
<?php
$flash_sql_img1=db_query("select * from tbl_header_flash where 1 and header_flash_status='Active' order by header_flash_id asc");
while($flash_res1=mysqli_fetch_array($flash_sql_img1))
{
$im=$site_url."/flash_images/".$flash_res1['header_flash_image_name'];
?>
<div class="slider-container slider-1" style="background-image: url('<?=$im?>') !important;">
<div class="single-slider zoom" style="background-image: url('<?=$im?>') !important;"></div>
</div>
<?}?>


              

        

        </div>
        <div class="banner-area">
            <div class="banner-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 content-home">
                            <div class="banner-welcome">
                                <h4 class="text">Same Day Tour By Bus</h4>
                                <div class="caption-inner">
                                    <div class="ah-headline">
                                     <!--   <span class="typed-static">Delhi to Agra Tour</span> -->
                                        <span class="ah-words-wrapper">
                                            <b class="is-visible"> Same Day Agra Tour</b>
                                            <b> Delhi Darshan By AC Bus</b>
                                            <b> Delhi Agra Tour By Volvo</b> 
                                        </span>
                                    </div>
                                </div>
                                <form action="<?=$site_url?>/pre-booking.html" method="post"  enctype="multipart/form-data" onsubmit="return checkValidationFlashBooking();">
                                   
                                    <p>
                                       <!-- <select class="wide" name="booking_package_id" id="flash_booking_package_id">
                                            <option value=""> --- Select Bus Tour --- </option>
    <?php
$pack_sql=db_query("select * from tbl_category where category_status='Active' order by category_id asc");
while($pack_res=mysqli_fetch_array($pack_sql))
{?>  
<option value="<?=$pack_res['category_id']?>"><?=$pack_res['category_display_name']?></option>
<?}?>   
                                        
                                        </select>-->
                                       <!-- <select class="wide" name="" id="flash_booking_package_id">
                                            <option value="all" selected >Agra Tour Bus</option>
                                            </select>  -->
                                            <input type="text" id="flash_booking_package_id" value="Search Tour Package" readonly style="color:red; font-weight:bold;">
                                            
                                    </p>
                                     <p>
                                      
                                        <input type="text" placeholder="Phone Number" name="booking_mobile_no" id="flash_booking_mobile_no" maxlength="10">
                                    </p>
                                    <p>
                                           <input  type="text" name="booking_date" id="flash_booking_date" placeholder="Select Travel Date " onfocus="(this.type='date')" onblur="(this.type='text')" >
                                      
                                    </p>
                                    <p>
                                        <button type="submit" name="submit_booking">Search Now</button>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider Area End -->




<script>

document.getElementById("flash_booking_date").min = new Date().getFullYear() + "-" +  parseInt(new Date().getMonth() + 1 ) + "-" + new Date().getDate();


    function checkValidationFlashBooking(){
      
        var package=document.getElementById("flash_booking_package_id");
         var mobile=document.getElementById("flash_booking_mobile_no");
        var date=document.getElementById("flash_booking_date");

         
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

