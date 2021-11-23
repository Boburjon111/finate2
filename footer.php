<?php
include_once("header.php");
?>
  <!--== Start Footer Area Wrapper ==-->
  <footer class="footer-area">
    <!--== Start Footer Top ==-->
    <div class="footer-top">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-lg-5">
            <div class="footer-newsletter-content">
              <h4 class="title">Subscribe for everyday job newsletter.</h4>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="footer-newsletter-form">
              <form action="#">
                <input type="email" placeholder="Enter your email">
                <button type="submit" class="btn-newsletter">Subscribe Now</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Footer Top ==-->
<?php

foreach($array_6 as $key){
  echo '<div class="footer-main">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="widget-item widget-about">
              <div class="widget-logo-area">
                <a href="index.php">
                  <img class="logo-main" src="'.$key['logo'].'" alt="Logo" />
                </a>
              </div>
              <p class="desc">'.$key['description'].'</p>
              <div class="social-icons">';
              for($i=1; $i<=3; $i++){
                echo ' <a href="'.$key['icon_link_'.$i.''].'" target="_blank" rel="noopener"><i class="icofont-'.$key['icon'.$i.''].'"></i></a>';

              }   
             echo '</div>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="row">';
}

    ?>

<?php
foreach($array_5 as $key){
  echo '<div class="col-md-3 col-lg-3">
    <div class="widget-item nav-menu-item1">
      <h4 class="widget-title">'.$key['title'].'</h4>
      <h4 class="widget-collapsed-title collapsed" data-bs-toggle="collapse" data-bs-target="#widgetId-1">'.$key['title'].'</h4>
      <div id="widgetId-1" class="collapse widget-collapse-body">
        <div class="collapse-body">
          <div class="widget-menu-wrap">
           <ul class="nav-menu">
          ';
          for($i=1; $i<=4; $i++){
            echo '<li><a href="'.$key['link'.$i.''].'">'.$key['subheader'.$i.''].'</a></li>';
          }
           echo ' </ul>
          </div>
        </div>
      </div>
    </div>
  </div>';
}

?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Footer Main ==-->

    <!--== Start Footer Bottom ==-->
    <div class="footer-bottom">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12">
            <div class="footer-bottom-content">
              <p class="copyright">© 2021 Finate. Made with <i class="icofont-heart"></i> by <a target="_blank" href="https://themeforest.net/user/codecarnival">Codecarnival.</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Footer Bottom ==-->
  </footer>
  <!--== End Footer Area Wrapper ==-->

  <!--== Scroll Top Button ==-->
  <div id="scroll-to-top" class="scroll-to-top"><span class="icofont-rounded-up"></span></div>

  <!--== Start Aside Menu ==-->
  <aside class="off-canvas-wrapper offcanvas offcanvas-start" tabindex="-1" id="AsideOffcanvasMenu" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h1 class="d-none" id="offcanvasExampleLabel">Aside Menu</h1>
      <button class="btn-menu-close" data-bs-dismiss="offcanvas" aria-label="Close">menu <i class="icofont-simple-left"></i></button>
    </div>
    <div class="offcanvas-body">
      <!-- Mobile Menu Start -->
      <div class="mobile-menu-items">
      <ul class="nav-menu">
<?php
      foreach($array_header as $key){
            echo ' <li><a href="'.$key['link'].'">'.$key['theme'].'</a></li>';
            if($key['num']>0){
              echo '<ul class="sub-menu">';
              for($i=1; $i<=$key['num']; $i++){
                echo '<li><a href="'.$key['link'.$i.''].'">'.$key['subheader'.$i.''].'</a></li>';
                echo '</ul>';
            }
          }else{
              echo '';
            }
           
          
        }

?>
 </ul>
      </div>
      <!-- Mobile Menu End -->
    </div>
  </aside>
  <!--== End Aside Menu ==-->
</div>

<!--=======================Javascript============================-->

<!--=== jQuery Modernizr Min Js ===-->
<script src="assets/js/modernizr.js"></script>
<!--=== jQuery Min Js ===-->
<script src="assets/js/jquery-main.js"></script>
<!--=== jQuery Migration Min Js ===-->
<script src="assets/js/jquery-migrate.js"></script>
<!--=== jQuery Popper Min Js ===-->
<script src="assets/js/popper.min.js"></script>
<!--=== jQuery Bootstrap Min Js ===-->
<script src="assets/js/bootstrap.min.js"></script>
<!--=== jQuery Swiper Min Js ===-->
<script src="assets/js/swiper.min.js"></script>
<!--=== jQuery Fancybox Min Js ===-->
<script src="assets/js/fancybox.min.js"></script>
<!--=== jQuery Aos Min Js ===-->
<script src="assets/js/aos.min.js"></script>
<!--=== jQuery Counterup Min Js ===-->
<script src="assets/js/counterup.js"></script>
<!--=== jQuery Waypoint Js ===-->
<script src="assets/js/waypoint.js"></script>

<!--=== jQuery Custom Js ===-->
<script src="assets/js/custom.js"></script>

</body>

</html>
