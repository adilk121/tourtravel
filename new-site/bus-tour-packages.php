<?php include("site-header.php"); ?>
       
       
      <!-- Breadcrumb Area Start -->
      <section class="peulis-breadcrumb-area">
         <div class="breadcrumb-top">
            <div class="container">
               <div class="col-lg-12">
                  <div class="breadcrumb-box">
                     <h2>Bus Tour Packages</h2>
                      <ul class="breadcrumb-inn">
                        <li><a href="<?=$site_url?>">Home</a></li>
                        <li class="active"><a >Bus Tour Packages</a></li>
                      </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcrumb Area End -->
<?php include("package-search-section.php"); ?>   
       
      <!-- Tour Page Start -->
      <section class="peulis-tour-page-area section_70">
         <div class="container">
            <div class="row">
               
               <div class="col-lg-8">
                  <div class="tour-page-right">
                  
                     <div class="row">

<?php
$pack_sql=db_query("select * from tbl_category where category_status='Active' order by category_id asc");
while($pack_res=mysqli_fetch_array($pack_sql))
{?>  
                      
                        <div class="col-lg-12">
                           <div class="single-popular-tour">
                              <div class="popular-tour-image">
                                 <a href="<?=$site_url?>/<?=$pack_res['category_url']?>.html">
                                 <img src="<?=$site_url?>/uploaded_files/<?=$pack_res['category_image_name']?>" alt="<?=$pack_res['category_display_name']?>" />
                                </a>
                              </div>
                              <div class="popular-tour-desc">
                                 <div class="tour-desc-top">
                                    <h3><a href="<?=$site_url?>/<?=$pack_res['category_url']?>.html"><?=$pack_res['category_display_name']?></a></h3>
                                   
                                    <p><br><?=$pack_res['category_short_description']?></p>
                                    <div class="tour-desc-heading">
                                       <div class="tour-rating">
                                          <ul>
                                             <li><i class="fa fa-star"></i></li>
                                             <li><i class="fa fa-star"></i></li>
                                             <li><i class="fa fa-star"></i></li>
                                             <li><i class="fa fa-star"></i></li>
                                             <li><i class="fa fa-star-o"></i></li>
                                          </ul>
                                       </div>
                                       
                                    </div>
                                 </div>
                                 <div class="tour-desc-bottom">
                                    <div class="tour-details">
                                       <a href="<?=$site_url?>/<?=$pack_res['category_url']?>.html"><i class="fa fa-flag"></i> Book Now</a>
                                    </div>
                                    <div class="tour-desc-price">
                                      <p>₹<?=$pack_res['category_discount_price']?> / <span style="text-decoration: line-through;">₹<?=$pack_res['category_real_price']?></span></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                    <?}?>

                     
                     </div>
                     
                     
                     
                  </div>
               </div>


               <div class="col-lg-4">
                  <div class="sidebar-widget">

                  

                  <?php include("blog-details-and-package-right-booking-form.php"); ?>       



                      <div class="single-sidebar">
                        <div class="quick_contact">
                           <h4>Quick Contact</h4>
                           <p>
                              <i class="fa fa-phone"></i>
<?php if($compDATA['admin_mobile']!=""){?><a href="tel:<?=$compDATA['admin_mobile']?>"><?=$compDATA['admin_mobile']?></a><?}?>
<?php if($compDATA['admin_phone']!=""){?> / <a href="tel:<?=$compDATA['admin_phone']?>"><?=$compDATA['admin_phone']?></a><?}?>
                            
                           </p>
                           <p>
                              <i class="fa fa-envelope"></i>
                         <?php if($compDATA['admin_email']!=""){?>
   <a href="mailto:<?=$compDATA['admin_email']?>"><?=$compDATA['admin_email']?></a>
   <?}?>

   <?php if($compDATA['admin_alt_email']!=""){?>
    / <a href="mailto:<?=$compDATA['admin_alt_email']?>"><?=$compDATA['admin_alt_email']?></a>
   <?}?>
                           </p>
                        </div>
                     </div>


                       <script>
        document.getElementById("tourDate").min = new Date().getFullYear() + "-" +  parseInt(new Date().getMonth() + 1 ) + "-" + new Date().getDate()
    </script>
                     
                  </div>

                  

               </div>

            </div>
         </div>
      </section>
      <!-- Tour Page End -->
       
       <?php include("site-footer.php"); ?>