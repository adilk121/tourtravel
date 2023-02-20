   <div class="single-sidebar">
                        <div class="quick-contact">
                           <h3>Book Your Tour</h3>
                           <form action="<?=$site_url?>/pre-booking.html" method="post"  enctype="multipart/form-data" onsubmit="return checkValidationBlogPackageBooking();">
                              <div class="book-tour-field">
                                <input type="text" placeholder="Your Name" name="booking_name" id="blog_pack_booking_name">
                              </div>
                              
                              <div class="book-tour-field">
                                <input type="text" placeholder="Phone Number" name="booking_mobile_no" id="blog_pack_booking_mobile_no" maxlength="10">
                              </div>
                                <div class="book-tour-field clearfix">
<!--<select class="wide" name="booking_package_id" id="blog_pack_booking_package_id">
<option value=""> --- Select Bus Tour --- </option>
<?php
$pack_sql=db_query("select * from tbl_category where category_status='Active' order by category_id asc");
while($pack_res=mysqli_fetch_array($pack_sql))
{?>  
<option value="<?=$pack_res['category_id']?>"><?=$pack_res['category_display_name']?></option>
<?}?>   

</select>-->
<!--<select class="wide" name="" id="blog_pack_booking_package_id">
<option value="all" selected >Agra Tour Bus</option>
</select>  -->

<input type="text" id="blog_pack_booking_package_id" value="Search Tour Package" readonly>

                                            

                              </div>

                              <div class="book-tour-field">
                               <input  type="text" name="booking_date" id="blog_pack_booking_date" placeholder="Select Travel Date " onfocus="(this.type='date')" onblur="(this.type='text')">
                              </div>
                           
                              <div class="book-tour-field">
                                 <button type="submit" name="submit_booking">Book Now</button>
                              </div>
                           </form>
                        </div>
                     </div>


                     <script>
document.getElementById("blog_pack_booking_date").min = new Date().getFullYear() + "-" +  parseInt(new Date().getMonth() + 1 ) + "-" + new Date().getDate();


    function checkValidationBlogPackageBooking(){
      
        var name=document.getElementById("blog_pack_booking_name");
         var mobile=document.getElementById("blog_pack_booking_mobile_no");
         var package=document.getElementById("blog_pack_booking_package_id");
        var date=document.getElementById("blog_pack_booking_date");

         
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

          if(package.value==""){
           alert("Please select package!");
             package.focus();
            return false;
        }



        if(date.value==""){
          alert("Please select date!");
            date.focus();
           
            return false;
        }
        
      

    }
    
  
</script>
