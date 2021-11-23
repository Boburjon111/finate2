<?php
include_once("header.php");



?>
  
  <main class="main-content">
    <!--== Start Hero Area Wrapper ==-->
    <section class="home-slider-area">
      <div class="home-slider-container default-slider-container">
        <div class="home-slider-wrapper slider-default">
          <div class="slider-content-area" data-bg-img="assets/img/slider/slider-nn(2).jpg">
            <div class="container pt--0 pb--0">
              <div class="slider-container">
                <div class="row justify-content-center align-items-center">
                  <div class="col-12 col-lg-8">
                    <div class="slider-content">
                      <h2 class="title"><span class="counter" data-counterup-delay="80">2,568</span> job available <br>You can choose your dream job</h2>
                      <p class="desc">Find great job for build your bright career. Have many job in this plactform.</p>
                    </div>
                  </div>
<div class="col-12">
<div class="job-search-wrap">
  <div class="job-search-form">
    <form action="search.php" >
      <div class="row row-gutter-10">
        <div class="col-lg-auto col-sm-6 col-12 flex-grow-1">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search" method = "get" name = "q">
          </div>
        </div>
        
        <div class="col-lg-auto col-sm-6 col-12 flex-grow-1">
          <div class="form-group"  method = "get" name = "cat">
            <select class="form-control">
              <?php
              foreach($array_city as $key){
                $selected = "selected";
                if($key['id'] != 1){
                  $selected = '';
              }
              else{
                $selected = '';
              }
              echo '<option value="'.$key['id'].'">'.$key['name'].'</option>';
            }               
?>                                 
            </select>
          </div>
        </div>
        <div class="col-lg-auto col-sm-6 col-12 flex-grow-1">
          <div class="form-group">
            <select class="form-control">
            <?php
            $category = [];
              
                if(!in_array($array_category['category_id'],$category['category_id'])){
                $category .= $array_category;
                }
foreach($category as $key){
                
                $selected = "selected";
                if($key['id'] != 1){
                  $selected = '';
              }
              else{
                $selected = '';
              }
              echo '<option value="'.$key['id'].'">'.$key['job'].'</option>';
            }
                         
?>   
             
            </select>
          </div>
        </div>
        <div class="col-lg-auto col-sm-6 col-12 flex-grow-1">
          <div class="form-group">
            <button type="button" class="btn-form-search"><i class="icofont-search-1"></i></button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12">
            <div class="play-video-btn">
              <a href="https://www.youtube.com/" class="video-popup">
                <img src="assets/img/icons/play.png" alt="Image-HasTech">
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="job-category-area">
      <div class="container" data-aos="fade-down">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center">
              <h3 class="title">Popular Category</h3>
              <div class="desc">
                <p>Many desktop publishing packages and web page editors</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row row-gutter-20" >
          <?php
foreach($array_category as $q){

  echo '<div class="col-sm-6 col-lg-3">
  <div class="job-category-item">
    <div class="content">
      <h3 class="title"><a href="job-details.php">'.$q['job'].'<span>(305)</span></a></h3>
    </div>
    <a class="overlay-link" href="job-details.php"></a>
  </div>
</div>';
}
          ?>
          </div>
        </div>
      </div>
    </section>
    <!--== End Job Category Area Wrapper ==-->

    <!--== Start Recent Job Area Wrapper ==-->
    <section class="recent-job-area bg-color-gray">
      <div class="container" data-aos="fade-down">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center">
              <h3 class="title">Recent Job Circulars</h3>
              <div class="desc">
                <p>Many desktop publishing packages and web page editors</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">

        <?php
foreach($array_category as $key1){
  echo '<div class="col-md-6 col-lg-4">
  <div class="recent-job-item">
    <div class="company-info">
      <div class="logo">
        <a href="#"><img src="'.$key1['image'].'" width="75" height="75" alt="Image-HasTech"></a>
      </div>
      <div class="content">
        <h4 class="name"><a href="#">'.$key1['name'].'</a></h4>
        <p class="address">'.$key1['adress'].'</p>
      </div>
    </div>
    <div class="main-content">
      <h3 class="title"><a href="job-details.php">'.$key1['job'].'</a></h3>
      <h5 class="work-type">'.$key1['job.type'].'</h5>
      <p class="desc">'.$key1['language_'].'</p>
    </div>
    <div class="recent-job-info">
      <div class="salary">
        <h4>'.$key1['price'].'</h4>
        <p>/'.$key1['working_hour_1'].'</p>
      </div>
      <a class="btn-theme btn-sm" href="job-details.php?id%20='.$key1['id'].' ">Apply Now</a>
    </div>
  </div>
</div>';
}
        ?>
          </div>
        </div>
      </div>
    </section>
    <!--== End Recent Job Area Wrapper ==-->

    <!--== Start Work Process Area Wrapper ==-->
    <section class="work-process-area">
      <div class="container" data-aos="fade-down">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center" >
              <h3 class="title">How It Work?</h3>
              <div class="desc">
                <p>Many desktop publishing packages and web page editors</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="working-process-content-wrap">
<?php
foreach($array_1 as $key){
  echo ' <div class="working-col">
  <div class="working-process-item">
    <div class="icon-box">
      <div class="inner">
        <img class="icon-img" src="'.$key['icon_1'].'" alt="Image-HasTech">
        <img class="icon-hover" src="'.$key['icon_2'].'" alt="Image-HasTech">
      </div>
    </div>
    <div class="content">
      <h4 class="title">'.$key['title'].'</h4>
      <p class="desc">'.$key['desc'].'</p>
    </div>
    <div class="shape-arrow-icon">
      <img class="shape-icon" src="'.$key['img_1'].'" alt="Image-HasTech">
      <img class="shape-icon-hover" src="'.$key['img_2'].'" alt="Image-HasTech">
    </div>
  </div>
  </div>
  ';
}
?>
            
             
              
              </div>  
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Work Process Area Wrapper ==-->

    <!--== Start Divider Area Wrapper ==-->
    <section class="sec-overlay sec-overlay-theme bg-img" data-bg-img="assets/img/photos/bg1.jpg">
      <div class="container pt--0 pb--0">
        <div class="row justify-content-center divider-style1">
          <div class="col-lg-10 col-xl-7">
            <div class="divider-content text-center">
              <h4 class="sub-title" data-aos="fade-down">Trial Version Available</h4>
              <h2 class="title" data-aos="fade-down">Download Our Mobile App. <br>You Can Ready Resume & Apply Job.</h2>
              <div class="divider-btn-group">
                <a class="btn-divider" data-aos="fade-down" href="page-not-found.php">
                  <img src="assets/img/photos/google-play.png" width="201" height="63" class="icon" alt="Image-HasTech">
                </a>
                <a class="btn-divider btn-divider-app-store" data-aos="fade-down" href="page-not-found.php">
                  <img src="assets/img/photos/mac-os.png" width="201" height="63" class="icon" alt="Image-HasTech">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-layer-style1"></div>
      <div class="bg-layer-style2"></div>
    </section>
    <!--== End Divider Area Wrapper ==-->

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