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
  <?php // include_once 'login_modal.php'; ?>

  <!-- End login modal window -->

  <!-- BEGIN MENU -->
  <?php include_once 'menu.php'; ?>

  <!-- END MENU -->
  
  <!-- Start single page header -->
  <section id="single-page-header">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-left">
              <h2>Contact <span style="color:#e66801;">Us</span></h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-right">
              <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Contact Us</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End single page header -->
  <!-- Start contact section  -->
  <section id="contact">
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <div class="title-area">
              <h2 class="title">Have any Questions?</h2>
              <span class="line"></span>
               <p>
                   If you have any questions regarding Swipe Tec's products and services contact us! We constantly strive to improve our services based on your feedback. If our FAQ doesn't answer your questions, use the form below to send us a note or call us at 888-794-7380 and our representative will be able to help you.</p>
            </div>
         </div>
         <div class="col-md-12">
           <div class="cotact-area">
             <div class="row">
               <div class="col-md-4">
                 <div class="contact-area-left">
                   <h4>Contact Info</h4>
                   <p>24 Hours a Day. 7 Days a Week.</p>
                   <address class="single-address">
                     <p><span style="color: #e66801";>Email :</span> info@swipetec.net</p>
                     <p><span style="color: #e66801";>Phone :</span> 1-888-SWIPE-80 &nbsp;&nbsp;<i>[1-888-794-7380]</i></p>
                     <p><span style="color: #e66801";>Fax : </span>  1-877-393-1356</p>
                   </address> 
                   <div class="footer-right contact-social">
                      <a href="index.html"><i class="fa fa-facebook"></i></a>
                      <!--<a href="#"><i class="fa fa-twitter"></i></a>-->
                      <!--<a href="#"><i class="fa fa-google-plus"></i></a>-->
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                      <!--<a href="#"><i class="fa fa-pinterest"></i></a>-->
                    </div>                
                 </div>
               </div>
               <div class="col-md-8">
                 <div class="contact-area-right">
                   <form action="" class="comments-form contact-form">
                    <div class="form-group">                        
                      <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">                        
                      <input type="email" class="form-control" placeholder="Email">
                    </div>
                     <div class="form-group">                        
                      <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">                        
                      <textarea placeholder="Comment" rows="3" class="form-control"></textarea>
                    </div>
                    <button class="comment-btn">Submit Comment</button>
                  </form>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
  </section>
  <!-- End contact section  -->

  <!-- Start google map -->
  <!--<section id="google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.3714257064535!2d-86.7550931378034!3d34.66757706940219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8862656f8475892d%3A0xf3b1aee5313c9d4d!2sHuntsville%2C+AL+35813%2C+USA!5e0!3m2!1sen!2sbd!4v1445253385137" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </section>-->
  <!-- End google map -->

  <!-- Start subscribe us -->
  <?php include_once 'subscribe.php'; ?>

  <!-- End subscribe us -->

  <!-- Start footer -->
  <?php include_once 'footer.php'; ?>

  <!-- End footer -->

  <!-- jQuery library -->
  <?php include_once 'lower_js_loads.php'; ?>

  
 
  <!-- Custom js -->
  <script type="text/javascript" src="assets/js/custom.js"></script>
    
  </body>
</html>