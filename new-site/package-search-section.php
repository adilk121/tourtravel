  <div class="col-md-12 col-sm-12 ">
                            <div class="banner-welcome">
                                
                                <form action="<?=$site_url?>/pre-booking.html" method="post"  enctype="multipart/form-data" onsubmit="return checkValidationCommenBooking();">
                                   
                                    <p>
                                       <!-- <select class="wide" name="booking_package_id" id="commen_booking_package_id">
                                            <option value=""> --- Select Bus Tour --- </option>
    <?php
$pack_sql=db_query("select * from tbl_category where category_status='Active' order by category_id asc");
while($pack_res=mysqli_fetch_array($pack_sql))
{?>  
<option value="<?=$pack_res['category_id']?>"><?=$pack_res['category_display_name']?></option>
<?}?>   
                                        
                                        </select>-->
<!--<select class="wide" name="" id="commen_booking_package_id">
<option value="all" selected >Agra Tour Bus</option>
</select>  -->
<input type="text" id="commen_booking_package_id" value="Search Tour Package" readonly style="color:red; font-weight:bold;">




                                    </p>
                                     <p>
                                      
                                        <input type="text" placeholder="Phone Number" name="booking_mobile_no" id="commen_booking_mobile_no" maxlength="10">
                                    </p>
                                    <p>
                                           <input  type="text" name="booking_date" id="commen_booking_date" placeholder="Select Travel Date " onfocus="(this.type='date')" onblur="(this.type='text')">
                                      
                                    </p>
                                    <p>
                                        <button type="submit" name="submit_booking">Search Now</button>
                                    </p>
                                </form>
                            </div>
                        </div>




<script>

document.getElementById("commen_booking_date").min = new Date().getFullYear() + "-" +  parseInt(new Date().getMonth() + 1 ) + "-" + new Date().getDate();


    function checkValidationCommenBooking(){
      
        var package=document.getElementById("commen_booking_package_id");
         var mobile=document.getElementById("commen_booking_mobile_no");
        var date=document.getElementById("commen_booking_date");

         
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


