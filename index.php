<!DOCTYPE html>
<html lang="en">

  <?php include_once 'head.php'; ?>

  <body>
  
  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header -->
  <?php include_once 'header.php'; ?>
  <!-- End header -->
  
  <!-- Start login modal window -->
  <?php //include_once 'login_modal.php'; ?>
  <!-- End login modal window -->

  <!-- BEGIN MENU -->
  <section id="menu-area">
      <nav class="navbar navbar-default  navbar-fixed-top " role="navigation">
          <div class="container">
              <div class="navbar-header">
                  <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <!-- LOGO -->
                  <!-- TEXT BASED LOGO -->
                  <!-- a class="navbar-brand" href="index.html">Intensely</a -->
                  <!-- IMG BASED LOGO  -->
                  <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt="SWIPETEC" title="SWIPETEC"></a>
              </div>
              <div id="navbar" class="navbar-collapse collapse">
                  <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                      <li class="active"><a href="index.php">Home</a></li>
                      <li><a href="internet.php">Internet</a></li>
                      <li><a href="retail.php">Retail</a></li>
                      <li><a href="about.php">About</a></li>
                      <li><a href="solutions.php" >Solutions </a></li>
                      <li><a href="partners.php">Partners</a></li>
                      <li><a href="faq.php">FAQ</a></li>
                      <li><a href="contact.php">Contact</a></li>
                  </ul>
              </div><!--/.nav-collapse -->
              <a href="#" id="search-icon">
                  &nbsp;&nbsp;<i class="fa fa-search">
                  </i>
              </a>
          </div>
      </nav>
  </section>
  <!-- END MENU --> 

  <!-- Start slider -->
  <section id="slider">
    <div class="main-slider">
      <div class="single-slide">
        <img src="assets/images/slider-1.jpg" alt="img">
        <div class="slide-content">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="slide-article">
                  <div style="margin-top:-100px;float:left;"><!--  <i class="fa fa-phone"></i>--></div>

                    <h1 class="animated fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">Most Trusted Merchant Partner</h1>
                  <p class="animated fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s">Find out why Swipetec stands out from all other credit card processing service providers.</p>
                  <a class="read-more-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s" href="#">Learn More</a>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="slider-img wow fadeInUp">
<!--                  <img src="assets/images/person1.png" alt="business man">
-->                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="single-slide">
        <img src="assets/images/slider-3.jpg" alt="img">
        <div class="slide-content">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="slide-article-2">
                    <div style="margin-top:-100px;float:left;"><!--  <i class="fa fa-phone"></i>--><h3>+1(888)]SWIPE-80</h3></div>

                    <h1 class="animated fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">FAST APPROVAL</h1>
                  <p class="animated fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s">Start accepting credit cards today ! No application fees.</p><br>
                  <a class="read-more-btn animated fadeInUp" data-wow-duration="1s" data-wow-delay="1s" href="#">Get Started</a>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="slider-img wow fadeInUp">
                  <!--<img src="assets/images/person2.png" alt="business man">-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>          
    </div>
  </section>
  <!-- End slider -->
  <div style="text-align:center;"><a class="purchase-btn2" href="#">Get Started Now</a></div>
  <div><p>&nbsp;</p></div>
  <section id="portfolio">
    <div class="portfolio-area">
       <div class="col-md-12">
          <div class="title-area">
            <h2 class="title wow fadeInUp"><span>Payment Transaction Solutions</span></h2>
            <span class="line wow fadeInUp"></span>
            <p  class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">Channels for any way your customers pay.</p>
          </div>
        </div>
        <div><p>&nbsp;</p></div>
       <!-- portfolio menu -->
       <!--<div class="portfolio-menu">
         <ul>
           <li class="filter" data-filter="all">All</li>
           <li class="filter" data-filter=".branding">Branding</li>
           <li class="filter" data-filter=".design">Design</li>
           <li class="filter" data-filter=".development">Development</li>
           <li class="filter" data-filter=".photography">Photography</li>
         </ul>
       </div>-->      
       <!-- Portfolio container -->
       <div id="mixit-container" class="portfolio-container">
         <div class="single-portfolio mix">
             <div class="single-item">
                 <img src="assets/images/shopping.jpg" alt="img">
                 <div class="single-item-content">
                     <a class="fancybox view-icon"  href="retail.php"><i class="fa fa-shopping-cart"></i></a>
                     <div class="portfolio-title">
                         <a class="view-icon" href="retail.php"><h4>RETAIL</h4></a>
                         <span></span>
                     </div>
                 </div>
             </div>
         </div>

         <div class="single-portfolio mix">
           <div class="single-item">
             <img src="assets/images/restaurant.jpg" alt="img">
            <div class="single-item-content">               
              <a class="fancybox view-icon"  href="restaurant.php"><i class="fa fa-bank"></i></a>
              <div class="portfolio-title">
                <a class="view-icon" href="restaurant.php"><h4>RESTAURANT</h4></a>
                <span></span>
              </div>
             </div>
           </div>
         </div>
         <div class="single-portfolio mix">
           <div class="single-item">
             <img src="assets/images/ecommerce-payment-processing.jpg" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" href="ecommerce.php"><i class="fa fa-sign-in"></i></a>
                <div class="portfolio-title">
                  <a class="view-icon" href="ecommerce.php"><h4>eCOMMERCE</h4></a>
                  <span></span>
                </div>
             </div>
           </div>
         </div>
         <div class="single-portfolio mix">
           <div class="single-item">
             <img src="assets/images/mailorder.jpg" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" href="mailorder.php"><i class="fa fa-envelope"></i></a>
                <div class="portfolio-title">
                    <a class="view-icon" href="mailorder.php"><h4>MAIL/TELEPHONE<BR> ORDER</h4></a>
                    <span></span>
                </div>
             </div>
           </div>
         </div>
         <div class="single-portfolio mix">
               <div class="single-item">
                   <img src="assets/images/CHECK.jpg" alt="img">
                   <div class="single-item-content">
                       <a class="fancybox view-icon" href="check-services.php"><i class="fa fa-check-square"></i></a>
                       <div class="portfolio-title">
                           <a class="view-icon" href="check-services.php"><h4>CHECK/ACH <BR>SERVICES</h4></a>
                           <span></span>
                       </div>
                   </div>
               </div>
           </div>
         <div class="single-portfolio mix">
               <div class="single-item">
                   <img src="assets/images/gift.jpg" alt="img">
                   <div class="single-item-content">
                       <a class="fancybox view-icon"  href="gift-loyalty.php"><i class="fa fa-gift"></i></a>
                       <div class="portfolio-title">
                           <a class="view-icon" href="gift-loyalty.php"><h4>GIFT & LOYALTY CARDS</h4></a>
                           <span></span>
                       </div>
                   </div>
               </div>
           </div>
         <div class="single-portfolio mix">
               <div class="single-item">
                   <img src="assets/images/cashadvance.jpg" alt="img">
                   <div class="single-item-content">
                       <a class="fancybox view-icon" href="cash-advance.php"><i class="fa fa-money"></i></a>
                       <div class="portfolio-title">
                           <a class="view-icon" href="cash-advance.php"><h4>CASH ADVANCE</h4></a>
                           <span></span>
                       </div>
                   </div>
               </div>
           </div>
         <div class="single-portfolio mix">
               <div class="single-item">
                   <img src="assets/images/smartphone.jpg" alt="img">
                   <div class="single-item-content">
                       <a class="fancybox view-icon" href="smartphones.php"><i class="fa fa-mobile-phone"></i></a>
                       <div class="portfolio-title">
                           <a class="view-icon" href="smartphones.php"><h4>SMART PHONES</h4></a>
                           <span></span>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </div>
  </section>
  <!-- End portfolio -->
  <!-- Start Feature -->
  <div><p>&nbsp;</p></div>
  <div><p>&nbsp;</p></div>


  <!-- Start Testimonial section -->

  <?php include_once 'testimonials.php'; ?>

  <!-- End Testimonial section -->
  <div><p>&nbsp;</p></div>

  <?php include_once 'three_boxes.php'; ?>
  <!-- End Feature -->

  <!-- Start subscribe us -->
  <?php include_once 'subscribe.php'; ?>
  <!-- End subscribe us -->

  <!-- St art footer -->
  <?php include_once 'footer.php'; ?>
  <!-- End footer -->

  <!-- jQuery library -->
  <?php include_once 'lower_js_loads.php'; ?>

  <!-- Custom js -->
  <script type="text/javascript" src="assets/js/custom.js"></script>
  
  </body>
</html>