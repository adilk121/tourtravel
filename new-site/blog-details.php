<?php include("site-header.php"); ?>
<?php
$blog_url=$_REQUEST['blog_url'];
$b_id=db_scalar("select blog_id from tbl_blog where blog_url='$blog_url' ");
$blog_res=mysqli_fetch_array(db_query("select * from tbl_blog where blog_id='$b_id'"));


?>       
       
      <!-- Breadcrumb Area Start -->
      <section class="peulis-breadcrumb-area">
         <div class="breadcrumb-top">
            <div class="container">
               <div class="col-lg-12">
                  <div class="breadcrumb-box">
                     <h2><?=$blog_res['blog_title']?></h2>
                      <ul class="breadcrumb-inn">
                        <li><a href="<?=$site_url?>">Home</a></li>
                        <li class="active"><a href="<?=$site_url?>/blogs.html">Blog</a></li>
                        <li class="active"><a ><?=$blog_res['blog_title']?></a></li>


                      </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcrumb Area End -->
<?php include("package-search-section.php"); ?>   
       
      <!-- Blog Area Start -->
      <section class="peulis-blog-page-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-8">
                  <div class="blog-page-left">
                     <div class="single-blog-item blog-single-page">
                        <div class="blog-image">
                           <img src="<?=$site_url?>/blog_images/<?=$blog_res['blog_image_name']?>" alt="<?=$blog_res['blog_title']?>" />
                        </div>
                        <div class="blog-desc">
                           <div class="post-meta">
                              <p class="date"><?=date("d-M-Y", strtotime($blog_res['blog_add_date']))?></p>
                              <p>By <a href="#"><?=$compDATA['admin_company_name']?></a></p>
                             
                           </div>
                           <h3><?=$blog_res['blog_title']?></h3>
                         <?=$blog_res['blog_description']?>
                        </div>
                     </div>
                  
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="sidebar-widget">
                    
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

                     <div class="single-sidebar">
                        <h3>Our Blogs</h3>
                        <ul class="recent-blog">
                          

                           <?php
   $sql_blog=db_query("select * from tbl_blog where 1 and blog_status='Active' order by blog_id asc");

   while($blog_res=mysqli_fetch_array($sql_blog)){

  ?>
                      <li>
                              <div class="recent-img">
                                 <a href="<?=$site_url?>/blog/<?=$blog_res['blog_url']?>.html">
                                 <img src="<?=$site_url?>/blog_images/<?=$blog_res['blog_image_name']?>" alt="<?=$blog_res['blog_title']?>">
                                 </a>
                              </div>
                              <div class="recent-text">
                                 <h4>
                                    <a href="<?=$site_url?>/blog/<?=$blog_res['blog_url']?>.html"><?=$blog_res['blog_title']?></a>
                                 </h4>
                                 <p><?=date("d-M-Y", strtotime($blog_res['blog_add_date']))?></p>
                              </div>
                           </li>
<?}?>

                          
                        </ul>
                     </div>


<?php include("blog-details-and-package-right-booking-form.php"); ?>                   
                     
                     
                     
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Blog Area End -->


      <?php // include("index-package-section.php"); ?>

       <?php include("site-footer.php"); ?>