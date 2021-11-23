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
              <h2 class="title">Job</h2>
              <nav class="breadcrumb-area">
                <ul class="breadcrumb justify-content-center">
                  <li><a href="index.php">Home</a></li>
                  <li class="breadcrumb-sep">//</li>
                  <li>Job</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Recent Job Area Wrapper ==-->
    <section class="recent-job-area recent-job-inner-area">
      <div class="container">
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
        <p>/'.$key1['workingtime'].'</p>
      </div>
      <a class="btn-theme btn-sm" href="job-details.php?id='.$key['id'].'">Apply Now</a>
    </div>
  </div>
</div>';
}
        ?>

          
        </div>
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="pagination-area">
              <nav>
                <ul class="page-numbers d-inline-flex">
                  <li>
                    <a class="page-number active" href="job.php">1</a>
                  </li>
                  <li>
                    <a class="page-number" href="job.php">2</a>
                  </li>
                  <li>
                    <a class="page-number" href="job.php">3</a>
                  </li>
                  <li>
                    <a class="page-number next" href="job.php">
                      <i class="icofont-long-arrow-right"></i>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Recent Job Area Wrapper ==-->
  </main>

 <?php
 include_once("footer.php");
 ?>