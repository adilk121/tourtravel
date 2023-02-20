<?php include("site-header.php"); ?>


    <!-- Breadcrumb Area Start -->
    <section class="peulis-breadcrumb-area">
        <div class="breadcrumb-top">
            <div class="container">
                <div class="col-lg-12">
                    <div class="breadcrumb-box">
                        <h2>Disclaimer</h2>
                        <ul class="breadcrumb-inn">
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><a>Disclaimer</a></li>
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
                <div class="col-lg-12">
                    <div class="about-page-left">
                        <h2>Disclaimer</h2>
                    
                           <?=db_scalar("select site_pages_description from tbl_site_pages where site_pages_link='disclaimer'");?> 
                  
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- About Page End -->


   <?php //include("index-package-section.php"); ?>

 
<?php include("site-footer.php"); ?>