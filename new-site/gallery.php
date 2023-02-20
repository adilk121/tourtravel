<?php include("site-header.php"); ?>
       
       
      <!-- Breadcrumb Area Start -->
      <section class="peulis-breadcrumb-area">
         <div class="breadcrumb-top">
            <div class="container">
               <div class="col-lg-12">
                  <div class="breadcrumb-box">
                     <h2>Gallery</h2>
                     <ul class="breadcrumb-inn">
                        <li><a href="<?=$site_url?>">Home</a></li>
                        <li class="active"><a >Gallery</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcrumb Area End -->
       
<?php include("package-search-section.php"); ?>          
      <!-- Gallery Area Start -->
      <section class="peulis-gallery-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="site-heading">
                     <h2>Best Moments</h2>
                     <p>Lorem ipsum dolor sit amet, conseetuer adipiscing elit. Aenan comdo igula eget. Aenean massa cum sociis Theme natoque.</p>
                  </div>
               </div>
            </div>
            <div class="row">
                  <?php
$gallery_sql=db_query("select * from tbl_image_gallery where image_status='Active' order by image_id asc  ");
while($gallery_res=mysqli_fetch_array($gallery_sql))
{?>

             

               <div class="col-lg-4 col-sm-12">
                  <div class="gallery-item">
                     <div class="gallery-img">
                        <img src="<?=$site_url?>/gallery_images/<?=$gallery_res['image_name']?>" alt="<?=$gallery_res['image_title']?>">
                     </div>
                     <div class="content">
                      <!--   <p>holiday</p> -->
                        <a href="<?=$site_url?>/gallery_images/<?=$gallery_res['image_name']?>" target="_blank">
                           <h4 class="name"><?=$gallery_res['image_title']?></h4>
                        </a>
                     </div>
                  </div>
               </div>
<?}?>

             
            </div>
            
            
         </div>
      </section>
      <!-- Gallery Area End -->


         <?php //include("index-package-section.php"); ?>

       
       <?php include("site-footer.php"); ?>