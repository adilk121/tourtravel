<?php include("site-header.php"); ?>
       
      <!-- Breadcrumb Area Start -->
      <section class="peulis-breadcrumb-area">
         <div class="breadcrumb-top">
            <div class="container">
               <div class="col-lg-12">
                  <div class="breadcrumb-box">
                     <h2>FAQ</h2>
                     <ul class="breadcrumb-inn">
                        <li><a href="<?=$site_utl?>">Home</a></li>
                        <li class="active"><a>FAQ</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcrumb Area End -->
<?php include("package-search-section.php"); ?>          
       
      <!-- Faqs Page Area Start -->
      <section class="peulis-faqs-page-area">
        
         <div class="faqs-bottom-area section_70">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8">
                     <div class="faqs-page-left">
                        <div class="page-accordion" id="accordion">
                           
<?php

$i=0;
$faq_sql=db_query("select * from tbl_faq where faq_status='Active' order by   faq_id asc ");
while($faq_res=mysqli_fetch_array($faq_sql))
   {
$i++;
      ?>
                           <div class="single_faq_accordian">
                              <div class="faq_accordian_header">
                                 <a class="btn btn-link collapsed" href="#" id="heading<?=$i?>" data-toggle="collapse" data-target="#collapse<?=$i?>" aria-expanded="true" aria-controls="collapse<?=$i?>">
                                 <span>Q. <?=$i?></span> <?=$faq_res['faq_ques']?>
                                 </a>
                              </div>
                              <div id="collapse<?=$i?>" class="collapse <?php if($i==1){?>show <?}?>" aria-labelledby="heading<?=$i?>" data-parent="#accordion">
                                 <div class="faq_accordian_body">
                                    <p><?=$faq_res['faq_answer']?></p>
                                  
                                 </div>
                              </div>
                           </div>
<?}?>

                          


                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="single-sidebar">
                        <div class="quick-contact">
                           <h3>Book Your Tour</h3>
                           <form>
                              <div class="book-tour-field">
                                 <input type="text" placeholder="Your Name">
                              </div>
                              
                              <div class="book-tour-field">
                                 <input type="tel" placeholder="Phone Number">
                              </div>
                                <div class="book-tour-field clearfix">
                                 <select class="wide">
                                    <option >Select Package</option>
                                    <option>Agra Tour By AC Luxury Bus</option>
                                            <option>Agra Tour By AC Volvo Bus</option>
                                            <option>Agra Tour By AC MultiXL Bus</option>
                                 </select>
                              </div>

                              <div class="book-tour-field">
                                 <input  type="date" id="tourDate">
                              </div>
                           
                              <div class="book-tour-field">
                                 <button type="submit">Book Now</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Faqs Page Area End -->

         <?php //include("index-package-section.php"); ?>
         
       
       <?php include("site-footer.php"); ?>