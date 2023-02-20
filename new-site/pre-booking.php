<?php include("site-header.php"); ?>
       
       
      <!-- Breadcrumb Area Start -->
      <section class="peulis-breadcrumb-area">
         <div class="breadcrumb-top">
            <div class="container">
               <div class="col-lg-12">
                  <div class="breadcrumb-box">
                     <h2>Agra Tour Bus</h2>
                      <ul class="breadcrumb-inn">
                        <li><a href="<?=$site_url?>">Home</a></li>
                        <li class="active"><a href="#">Agra Tour Bus</a></li>
                      </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcrumb Area End -->
       
<?php
$user_name="";
$user_mobile="";
$booking_date="";
$booking_pack_id="";
$booking_pack_name="";
$booking_pack_price="";


if(isset($_POST['submit_booking']))
{
$user_name=$_REQUEST['booking_name'];
$user_mobile=$_REQUEST['booking_mobile_no'];
$booking_date=$_REQUEST['booking_date'];
}



?>

      <!-- Cart Page Start -->
      <section class="peulis-cart-page-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="cart-table-left">
                     <h3>Select Agra Tour Bus</h3>
                     <div class="table-responsive">
                        <table class="table">
                         
                           <tbody>
                             <?php
$pack_sql=db_query("select * from tbl_category where category_status='Active' order by category_id asc");
while($pack_res=mysqli_fetch_array($pack_sql))
{?> 
<form action="<?=$site_url?>/booking.html" method="post">
    
<input type="hidden" name="booking_name" value="<?=$user_name?>" />
<input type="hidden" name="booking_mobile_no" value="<?=$user_mobile?>" />
<input type="hidden" name="booking_package_id" value="<?=$pack_res['category_id']?>" />
<input type="hidden" name="booking_date" value="<?=$booking_date?>" />


                                   <tr class="shop-cart-item">
                                 <td class="peulis-cart-preview">
                                    <a href="<?=$site_url?>/<?=$pack_res['category_url']?>.html">
                                    <img src="<?=$site_url?>/uploaded_files/<?=$pack_res['category_image_name']?>" alt="<?=$pack_res['category_display_name']?>">
                                    </a>
                                 </td>
                                 <td class="peulis-cart-product">
                                    <a href="<?=$site_url?>/<?=$pack_res['category_url']?>.html">
                                       <p><?=$pack_res['category_display_name']?></p>
                                       <span><?=$pack_res['category_name']?></span>
                                    </a>
                                 </td>
                           
                                 <td class="peulis-cart-price">
                                    <p><?=$pack_res['category_bus_time']?></p>
                                 </td>
                                 
                                 
                                 <td class="peulis-cart-price">
                                    <p><?=$pack_res['category_bus_seat']?></p>
                                 </td>
                                 
                                 
                                 <td class="peulis-cart-total">
                                    <p>₹<?=$pack_res['category_real_price']?></p>
                                 </td>
                                 <td class="">
                                   <?php
                                   
                                   if($pack_res['category_booking_status']=="On")
                                   {?>
                                    <button class="btn btn-warning" type="submit" name="submit_booking" >Pick Seat <i class="fa fa-angle-right"></i></button>
                                <?}else{?>
                                    <button class="btn btn-danger" type="button" name="submit_booking" >Booking Full <i class="fa fa-ban"></i></button>
                                <?}?>
                                
                                 </td>
                              </tr>
                              </form>
                              
<?}?>
                           </tbody>
                        </table>
                     </div>
                  
                  </div>
               </div>
               
            </div>
         </div>
      </section>
      <!-- Cart Page End -->
       
     <?php include("site-footer.php"); ?>