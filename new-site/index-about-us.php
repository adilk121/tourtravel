
    <section class="peulis-about-page section_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-page-left">
                        <h3>About</h3>
                        <h2><?=$compDATA['admin_company_name']?></h2>
<?php
$ftr_desc=db_scalar("select site_pages_description from tbl_site_pages  where site_pages_link='about-us' ");
?>
<p><?=substr(strip_tags($ftr_desc), 0,350)?>... <a href="<?=$site_url?>/about-us.html" style="color:black; font-weight: bold;">Read More</a></p>

                      
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-page-right">
                        <img src="<?=$site_url?>/static_files/<?=db_scalar("select site_pages_image_name from tbl_site_pages where site_pages_link='about-us'");?>" alt="<?=$compDATA['admin_company_name']?> - About Us" title="<?=$compDATA['admin_company_name']?> - About Us"" />
                    </div>
                </div>
            </div>
        </div>
    </section>
