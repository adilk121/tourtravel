<?php include("site-header.php"); ?>


    <!-- Breadcrumb Area Start -->
    <section class="peulis-breadcrumb-area">
        <div class="breadcrumb-top">
            <div class="container">
                <div class="col-lg-12">
                    <div class="breadcrumb-box">
                        <h2>Site Map</h2>
                        <ul class="breadcrumb-inn">
                            <li><a href="<?=$site_url?>">Home</a></li>
                            <li class="active"><a>Site Map</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

<?php include("package-search-section.php"); ?>   
    <!-- About Page Start -->
    <section class="peulis-about-page section_70" style="background-color:#f3f3f3">
  
  <div class="container">
                <div class="row">
                   
                    <div class="col-lg-6 col-sm-6">
                        <div class="single-footer">
                            <h2>Quick Links</h2>
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
                    <div class="col-lg-6 col-sm-6">
                        <div class="single-footer">
                            <h2>Our Package</h2>
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
                    
                </div>
            </div>

        
    </section>
    <!-- About Page End -->


   <?php //include("index-package-section.php"); ?>

 
<?php include("site-footer.php"); ?>