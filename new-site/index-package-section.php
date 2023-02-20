 <!-- Popular Tours Area Start -->
    <section class="peulis-popular-tours-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-heading">
                        <h2><?=$compDATA['admin_company_name']?></h2>
                        <p>Lorem ipsum dolor sit amet, conseetuer adipiscing elit. Aenan comdo igula eget. Aenean massa cum sociis Theme natoque.</p>
                    </div>
                </div>
            </div>
            <div class="row">

<?php
$index_pack_sql=db_query("select * from tbl_category where category_status='Active' order by category_id asc limit 3");
while($index_pack_res=mysqli_fetch_array($index_pack_sql))
{?>                
                <div class="col-lg-4">
                    <div class="single-popular-tour">
                        <div class="popular-tour-image">
                         <a href="<?=$site_url?>/<?=$index_pack_res['category_url']?>.html">
                            <img src="<?=$site_url?>/uploaded_files/<?=$index_pack_res['category_image_name']?>" alt="<?=$index_pack_res['category_display_name']?>" />
                          </a>
                        </div>
                        <div class="popular-tour-desc">
                            <div class="tour-desc-top">
                                <h3><a href="<?=$site_url?>/<?=$index_pack_res['category_url']?>.html"><?=$index_pack_res['category_display_name']?></a></h3>
                               
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
                                    <a href="<?=$site_url?>/<?=$index_pack_res['category_url']?>.html"><i class="fa fa-flag"></i> Book Now</a>
                                </div>
                                <div class="tour-desc-price">
                                    <p>₹<?=$index_pack_res['category_discount_price']?> / <span style="text-decoration: line-through;">₹<?=$index_pack_res['category_real_price']?></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

             <?}?>
                

            </div>
            
        </div>
    </section>
    <!-- Popular Tours Area End -->
