 <header>
    <div class="tsp-header-main">
      <div class="container">
        <div class="row">
          <div class="tsp-logo col-md-2 col-sm-2 col-xs-10">
      <a href="index.html"> <img src="images/logo.png" title="India Tourism Incredible" alt="India Tourism Incredible" class="logod"> 
      </a> 
      </div>
          <div id="tsp_menu_cart_search" class="col-md-7 col-sm-7 col-xs-12">
            <nav>
              <ul id="menu">
                <li class="current-menu-item"><a href="index.html">Home</a> </li>
                <!--<li><a href="about-us.html">About Us</a></li>-->
                <li><a href="services.html">Tour Packages</a>
                  <ul>
                    <li><a href="delhi-to-agra-tour-packages.html">DELHI TO AGRA TOUR PACKAGES</a></li>
                    <li><a href="delhi-sightseeing-tour.html">DELHI SIGHTSEEING TOUR</a></li>
                    <li><a href="delhi-to-jaipur-tour.html">DELHI TO JAIPUR TOUR</a></li>
                    <li><a href="delhi-haridwar-rishikesh-laxman-jhulla-delhi-tour.html">DELHI-HARIDWAR- RISHIKESH-LAXMAN-JHULLA-DELHI TOUR</a></li>
                  </ul>
                </li>
                <li><a href="#">Bus Services</a>
<ul>
<li><a href="delhi-ambala-ludhiana-bus-service.html">Delhi Ambala Ludhiana Bus Service</a></li>
</ul>
        </li>
        <li><a href="gallery.html">Gallery</a></li>
        
                <li><a href="contact-us.html">Contact Us</a></li>
              </ul>
            </nav>
          </div>
          <div class="tsp-logo col-md-3 col-sm-3 col-xs-12 amiZ" style="z-index:-999">
            <div class="col-md-12 col-xs-8">
              <h3 class="ami">Call/WhatsApp </h3>
            </div>
            <div class="col-md-12 col-xs-4">
              <p><a href="tel:<?=$whatspp_no?>" class="amiMbl"><?=$whatspp_no?></a></p>
            </div>
            <div class="col-md-12 col-xs-12">
              <p class="amiMail"><i class="fa fa-envelope"></i> info@indiatourismincredible.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End header main--> 
  </header>
<?php
$page_name=basename($_SERVER['PHP_SELF'],'.php');
if($page_name=="delhi-to-jaipur-tour" || $page_name=="delhi-haridwar-rishikesh-laxman-jhulla-delhi-tour")
{?>
  <marquee scrollamount="6" style="color:#ff6600; font-size:20px; margin-bottom:2px; font-weight:bold;"><span style="font-weight:bold; color:#006600">Disclaimer : </span>Before booking any tour, please contact our customer care department at <?=$whatspp_no?>.</marquee>
 <?}?>
 