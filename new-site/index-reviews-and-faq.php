<?php
if($page_name!="faq")
{
?>
<div class="container">

<div class="row" style="margin-top: 20px;">

   <div class="col-md-6">
   <div class="peulis-comment-list">
                        <div class="comment-group-title">
                           <h3>Tour Reviews</h3>
                        </div>
                        <div class="single-comment-item">
                           <div class="single-comment-box">
                              <div class="main-comment">
                                 <div class="author-image">
                                    <img src="<?=$site_url?>/assets/img/4.jpg" alt="author">
                                 </div>
                                 <div class="comment-text">
                                    <div class="comment-info">
                                       <h4>david kamal</h4>
                                       <ul>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                       </ul>
                                       <p>4 minitues ago</p>
                                    </div>
                                    <div class="comment-text-inner">
                                       <p>Ne erat velit invidunt his. Eum in dicta veniam interesset, harum lupta definitionem. Vocibus suscipit prodesset vim ei, equidem perpetua eu per.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="single-comment-box">
                              <div class="main-comment">
                                 <div class="author-image">
                                    <img src="<?=$site_url?>/assets/img/5.jpg" alt="author">
                                 </div>
                                 <div class="comment-text">
                                    <div class="comment-info">
                                       <h4>Jerix Ablin</h4>
                                       <ul>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star-o"></i></li>
                                       </ul>
                                       <p>12 minitues ago</p>
                                    </div>
                                    <div class="comment-text-inner">
                                       <p>orem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo? </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>


                  <div class="col-md-6">
                     <div class="comment-group-title">
                           <h3>FAQ's</h3>
                        </div>
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
                              <div id="collapse<?=$i?>" class="collapse " aria-labelledby="heading<?=$i?>" data-parent="#accordion">
                                 <div class="faq_accordian_body">
                                    <p><?=$faq_res['faq_answer']?></p>
                                  
                                 </div>
                              </div>
                           </div>
<?}?>

                          


                        </div>
                

                  </div>
</div>
</div>
<?}?>