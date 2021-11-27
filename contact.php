<?php
include_once("header.php");
?>
  
  <main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area sec-overlay sec-overlay-black" data-bg-img="assets/img/photos/bg2.jpg">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12">
            <div class="page-header-content">
              <h2 class="title">Contact Us</h2>
              <nav class="breadcrumb-area">
                <ul class="breadcrumb justify-content-center">
                  <li><a href="index.php">Home</a></li>
                  <li class="breadcrumb-sep">//</li>
                  <li>Contact</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Contact Area Wrapper ==-->
    <section class="contact-area contact-page-area">
      <div class="container">
        <div class="row contact-page-wrapper">
          <div class="col-lg-12">
            <div class="contact-info-wrap">
              <div class="info-item">
                <div class="icon">
                  <img src="assets/img/icons/c1.png" alt="Image" width="42" height="42">
                </div>
                <div class="info">
                  <h5 class="title">Call Us:</h5>
                 <?php
                 foreach($array_8 as $key){
                   echo ' <p>
                   <a href="tel://568975468">'.$key['phone_1'].'</a><br>
                   <a href="tel://+88465748937">'.$key['phone_2'].'</a>
                 </p>
               </div>
             </div>
             <div class="info-item">
               <div class="icon">
                 <img src="assets/img/icons/c2.png" alt="Image" width="43" height="73">
               </div>
               <div class="info">
                 <h5 class="title">Email:</h5>
                 <p>
                   <a href="mailto://youremail@gmail.com">'.$key['email'].'</a><br>
                   <a href="mailto://demomail@gmail.com">'.$key['demo_email'].'</a>
                 </p>
               </div>
             </div>
             <div class="info-item">
               <div class="icon">
                 <img src="assets/img/icons/c3.png" alt="Image" width="36" height="46">
               </div>
               <div class="info">
                 <h5 class="title">Address:</h5>
                 <p>
                 '.$key['adress'].'
                 </p>
               </div>
             </div>';}
                 
                 ?>
                 
                 
            </div>
          </div>
          <div class="col-lg-6">
            <!--== Start Contact Form ==-->
            <div class="contact-form">
              <h4 class="contact-form-title">Get in Touch</h4>
              <form id="contact-form" action="https://whizthemes.com/mail-php/raju/arden/mail.php" method="POST">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input class="form-control" type="text" name="con_name" placeholder="Name:">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input class="form-control" type="email" name="con_email" placeholder="Email:">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input class="form-control" type="text" placeholder="Subject:">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea class="form-control" name="con_message" placeholder="Message"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group mb--0">
                      <button class="btn-theme d-block w-100" type="submit">Send Message</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <!--== End Contact Form ==-->

            <!--== Message Notification ==-->
            <div class="form-message"></div>
          </div>
          <div class="col-lg-6">
            <div class="map-area"><?php

             echo '<iframe src="'.$key['map_link'].'"></iframe>'?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Contact Area Wrapper ==-->
  </main>
  <?php
include_once('footer.php');

?>