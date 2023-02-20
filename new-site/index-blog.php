

    
 <!-- Blog Area Start -->
    <section class="peulis-blog-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-heading">
                        <h2>Agra Travel Blogs</h2>
                        <p>Lorem ipsum dolor sit amet, conseetuer adipiscing elit. Aenan comdo igula eget. Aenean massa cum sociis Theme natoque.</p>
                    </div>
                </div>
            </div>
            <div class="row">

<?php
   $sql_blog=db_query("select * from tbl_blog where 1 and blog_status='Active' and blog_set_home='Yes' order by blog_id asc");
   while($blog_res=mysqli_fetch_array($sql_blog)){
  ?>
                <div class="col-lg-4">
                    <div class="single-blog-item">
                        <div class="blog-image">
                            <a href="<?=$site_url?>/blog/<?=$blog_res['blog_url']?>.html">
                                <img src="<?=$site_url?>/blog_images/<?=$blog_res['blog_image_name']?>" alt="<?=$blog_res['blog_title']?>" />
                            </a>
                        </div>
                        <div class="blog-desc">
                            <div class="post-meta">
                                <p class="date"><?=date("d-M-Y", strtotime($blog_res['blog_add_date']))?></p>
                                <p>By <a href="<?=$site_url?>/blog/<?=$blog_res['blog_url']?>.html"><?=$compDATA['admin_company_name']?></a></p>
                            </div>
                            <h3><a href="<?=$site_url?>/blog/<?=$blog_res['blog_url']?>.html"><?=$blog_res['blog_title']?></a></h3>
                               <?php
$blog_desc=$blog_res['blog_description'];
?>
<p><?=substr(strip_tags($blog_desc), 0,180)?>... <a href="<?=$site_url?>/blog/<?=$blog_res['blog_url']?>.html" style="color:black; font-weight: bold;">Read More</a></p>
  
                        </div>
                    </div>
                </div>
<?}?>


            </div>
        </div>
    </section>
    <!-- Blog Area End -->