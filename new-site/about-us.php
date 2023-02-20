<?php include("site-header.php"); ?>


    <!-- Breadcrumb Area Start -->
    <section class="peulis-breadcrumb-area">
        <div class="breadcrumb-top">
            <div class="container">
                <div class="col-lg-12">
                    <div class="breadcrumb-box">
                        <h2>About Us</h2>
                        <ul class="breadcrumb-inn">
                            <li><a href="<?=$site_url?>">Home</a></li>
                            <li class="active"><a>About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->


<?php include("package-search-section.php"); ?>                      
                  



    <!-- About Page Start -->
    <section class="peulis-about-page section_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-page-left">
                        <h3>About</h3>
                        <h2><?=$compDATA['admin_company_name']?></h2>
                       
                    <?=db_scalar("select site_pages_description from tbl_site_pages where site_pages_link='about-us'");?> 
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-page-right">
                        <img src="<?=$site_url?>/static_files/<?=db_scalar("select site_pages_image_name from tbl_site_pages where site_pages_link='about-us'");?>" alt="<?=$compDATA['admin_company_name']?> - About Us" title="<?=$compDATA['admin_company_name']?> - About Us" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Page End -->


   <?php //include("index-package-section.php"); ?>

 
<?php include("site-footer.php"); ?>