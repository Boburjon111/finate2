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
              <h2 class="title">About Us</h2>
              <nav class="breadcrumb-area">
                <ul class="breadcrumb justify-content-center">
                  <li><a href="index.php">Home</a></li>
                  <li class="breadcrumb-sep">//</li>
                  <li>About Us</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->
<?php
foreach($array_7 as $key){
  echo ' <section class="about-area about-default-wrapper">
  <div class="container">
    <div class="about-item">
      <div class="row">';
      for($i=1;$i<=1;$i++){
        echo '<div class="col-md-6 col-lg-3">
        <div class="about-thumb" data-aos="fade-down" data-aos-duration="1000">
          <img src="'.$key['image'].'" alt="Image-HasTech">
        </div>
      </div>';
      }
        
      echo '<div class="col-lg-6">
          <div class="about-content" data-aos="fade-down" data-aos-duration="1000">
            <h4 class="sub-title">// About Finate</h4>
            <h3 class="title">'.$key['title'].'</h3>
            <p class="desc">'.$key['description'].'</p>
            <div class="member-join-content" data-aos="fade-right" data-aos-duration="1200">
              <div class="member-join-thumb">
                <ul>
                  <li>';
                  for($i=1;$i<=5;$i++){
                    echo '<a href="candidate-details.php">
                      <img src="'.$key['mumber'.$i.''].'" width="50" height="50" alt="Image-HasTech">
                    </a>
                  </li>';}
                  
                    
                  echo '</li>
                </ul>
              </div>
              <div class="member-join-btn">
                <a class="join-now-btn" href="job-details.php"><span>+</span> Join Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="funfact-area bg-color-gray">
  <div class="container">
    <div class="row no-gutter">
      <div class="col-12">
        <div class="funfact-content-wrap">';
        for($i=1;$i<=5;$i++){
          echo ' <div class="funfact-col">
          <div class="funfact-item" data-aos="fade-down">
            <h2 class="counter-number"><span class="counter" data-counterup-delay="50">'.$key['statist'.$i.''].'</span></h2>
            <h6 class="counter-title">'.$key['name'.$i.''].'</h6>
          </div>
        </div>
';
        }

         
        echo '</div>
      </div>
    </div>
  </div>
</section>';
}
?>
    <!--== Start About Area Wrapper ==-->
   
    <!--== End Funfact Area Wrapper ==-->

    <!--== Start Team Area Wrapper ==-->
    <section class="team-area">
      <div class="container" data-aos="fade-down">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center" >
              <h3 class="title">Best Candidate</h3>
              <div class="desc">
                <p>Many desktop publishing packages and web page editors</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
         <?php 
         foreach($array_2 as $key){
           echo '<div class="col-sm-6 col-lg-4 col-xl-3">
           <div class="team-item">
             <div class="thumb">
               <a href="candidate-details.php">
                 <img src="'.$key['img'].'" width="160" height="160" alt="Image-HasTech">
               </a>
             </div>
             <div class="content">
               <h4 class="title"><a href="candidate-details.php">'.$key['name'].'</a></h4>
               <h5 class="sub-title">'.$key['job'].'</h5>
               <div class="rating-box">';
               for($i=0; $i<$key['mark']; $i++){
                 echo '<i class="icofont-star"></i>';
               }
                 
                
               echo '</div>
               <p class="desc">'.$key['language_'].'</p>
               <a class="btn-theme btn-white btn-sm" href="candidate-details.php">View Profile</a>
             </div>
             <div class="bookmark-icon"><img src="assets/img/icons/bookmark1.png" alt="Image-HasTech"></div>
             <div class="bookmark-icon-hover"><img src="assets/img/icons/bookmark2.png" alt="Image-HasTech"></div>
           </div>
         </div> ';
         }?>
          
        </div>
      </div>
    </section>
    <!--== End Team Area Wrapper ==-->

    <!--== Start Brand Logo Area Wrapper ==-->
    <div class="brand-logo-area">
      <div class="container pt--0 pb--0" data-aos="fade-down">
        <div class="row">
          <div class="col-12">
            <div class="brand-logo-content" >
              <div class="swiper brand-logo-slider-container">
                <div class="swiper-wrapper">
                 
                <?php
foreach($array_3 as $key){
  echo '<div class="swiper-slide">  
  <div class="brand-logo-item">
    <img src="'.$key['img'].'" alt="Image-HasTech">
  </div>
</div>';
}
                ?>
                </div>
              </div>
              <!--== Add Swiper Arrows ==-->
              <div class="swiper-btn-wrap">
                <div class="brand-swiper-btn-prev">
                  <i class="icofont-long-arrow-left"></i>
                </div>
                <div class="brand-swiper-btn-next">
                  <i class="icofont-long-arrow-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Brand Logo Area Wrapper ==-->

    <!--== Start Testimonial Area Wrapper ==-->
    <section class="testimonial-area bg-color-gray">
      <div class="container" data-aos="fade-down">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center" >
              <h3 class="title">Our Happy Clients</h3>
              <div class="desc">
                <p>Many desktop publishing packages and web page editors</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="swiper testi-slider-container">
              <div class="swiper-wrapper">
                <?php

foreach($array_4 as $key){
  echo '<div class="swiper-slide">
  <div class="testimonial-item">
    <div class="testi-inner-content">
      <div class="testi-author">
        <div class="testi-thumb">
          <img src="'.$key['img'].'" width="75" height="75" alt="Image-HasTech">
        </div>
        <div class="testi-info">
          <h4 class="name">'.$key['name'].'</h4>
          <span class="designation">'.$key['job'].'</span>
        </div>
      </div>
      <div class="testi-content">
        <p class="desc">'.$key['desc'].'</p>
        <div class="rating-box">';
        for($i=0; $i<$key['mark'];$i++){
          echo ' <i class="icofont-star"></i>';
        }
         
         
        echo '</div>
        <div class="testi-quote"><img src="assets/img/icons/quote1.png" alt="Image-HasTech"></div>
      </div>
    </div>
  </div>
</div> ';
}
?>
                
              </div>

          
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  

<!--    
   <section class="blog-area blog-home-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center">
              <h3 class="title">Recent News Articles</h3>
              <div class="desc">
                <p>Many desktop publishing packages and web page editors</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row align-items-center post-home-style row-gutter-40">
          <div class="col-md-6 col-lg-4" data-aos="fade-right">
 
            <div class="post-item">
              <div class="thumb">
                <a href="blog-details.php"><img src="assets/img/blog/1.jpg" alt="Image" width="370" height="270"></a>
              </div>
              <div class="content">
                <div class="author">By <a href="blog.php">Walter Houston</a></div>
                <h4 class="title"><a href="blog-details.php">It long established fact that reader will distracted the readable.</a></h4>
                <div class="meta">
                  <span class="post-date">03 April, 2022</span>
                  <span class="dots"></span>
                  <span class="post-time">10 min read</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="fade-left">
            <div class="post-item">
              <div class="thumb mb--0">
                <a href="blog-details.php"><img src="assets/img/blog/h1.jpg" alt="Image" width="370" height="440"></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-left">
            <div class="post-home-list-style">
              <div class="post-item">
                <div class="content">
                  <div class="author">By <a href="blog.php">Walter Houston</a></div>
                  <h4 class="title"><a href="blog-details.php">Established fact and readeren will distracted the readable content.</a></h4>
                  <div class="meta">
                    <span class="post-date">03 April, 2022</span>
                    <span class="dots"></span>
                    <span class="post-time">10 min read</span>
                  </div>
                </div>
              </div>
              <div class="post-item">
                <div class="content">
                  <div class="author">By <a href="blog.php">Walter Houston</a></div>
                  <h4 class="title"><a href="blog-details.php">With WooLentor's drag-and drop interface for creating...</a></h4>
                  <div class="meta">
                    <span class="post-date">03 April, 2022</span>
                    <span class="dots"></span>
                    <span class="post-time">10 min read</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>  -->
   
  </main>
<?php
include_once('footer.php');

?>