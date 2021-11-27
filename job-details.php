<?php

include_once('header.php');
?>
  <?php
  foreach($array_category as $key){
  echo '<main class="main-content">
    <div class="page-header-area sec-overlay sec-overlay-black" data-bg-img="assets/img/photos/bg2.jpg">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12">
            <div class="page-header-content">
              <h2 class="title">Job Details</h2>
              <nav class="breadcrumb-area">
                <ul class="breadcrumb justify-content-center">
                  <li><a href="index.php">Home</a></li>
                  <li class="breadcrumb-sep">//</li>
                  <li>Job Details</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Job Details Area Wrapper ==-->
    <section class="job-details-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="job-details-wrap">
              <div class="job-details-info">
                <div class="thumb">
                  <img src="'.$key['image'].'" width="130" height="130" alt="Image-HasTech">
                </div>
                <div class="content">
                  <h4 class="title"><a href="employers-details.php?category_id='.$key['category_id'].'">'.$key['name'].'</h4></a>
                  <h5 class="sub-title"></h5>
                  <ul class="info-list">
                    <li><i class="icofont-location-pin"></i>'.$key['adress'].'</li>
                    <li><i class="icofont-phone"></i>'.$key['phone'].'</li>
                  </ul>
                </div>
              </div>
              <div class="job-details-price">
                <h4 class="title">$'.$key['price'].'<p>/'.$key['working_time'].'</p></h4>
                <button type="button" class="btn-theme">Apply Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7 col-xl-8">
            <div class="job-details-item">
              <div class="content">
                <h4 class="title">Description</h4>

                <p class="desc">'.$key['description'].'</p>
                
              </div>
              <div class="content">
                <h4 class="title">Responsibilities</h4>
                <ul class="job-details-list">';
                for($i=1;$i<=4;$i++){
                  echo '<li><i class="icofont-check"></i>'.$key['Respons_'.$i.''].'</li>';
                }
                  
                  
                echo '</ul>
              </div>
              <div class="content">
                <h4 class="title">Requirements</h4>
                <ul class="job-details-list">';
                for($i=1;$i<=6;$i++){
                  echo '<li><i class="icofont-check"></i>'.$key['Requirements_'.$i.''].'</li>';
                }
                  
                echo '</ul>
              </div>
              <div class="content">
                <h4 class="title">Educational Requirements</h4>
                <p class="desc">'.$key['Educational_requirements_1'].'</p>
              </div>
              <div class="content">
                <h4 class="title">Working Hours</h4>
                <ul class="job-details-list">';
                for($i=1;$i<=3;$i++){
                  echo '<li><i class="icofont-check"></i>'.$key['working_hour_'.$i.''].' </li>';
                }
                  
                echo '</ul>
              </div>
              <div class="content">
                <h4 class="title">Benefits</h4>
                <ul class="job-details-list">';
                for($i=1;$i<=10;$i++){
                  echo ' <li><i class="icofont-check"></i>'.$key['benefit_'.$i.''].'</li>';
                }
               
               echo '</ul>
              </div>
              <div class="content">
                <h4 class="title">Statement</h4>
                <p class="desc">'.$key['Statement'].'</p>
                <a class="btn-apply-now" href="contact.php?id='.$key['id'].'">Apply Now <i class="icofont-long-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-xl-4">
            <div class="job-sidebar">
              <div class="widget-item">
                <div class="widget-title">
                  <h3 class="title">Summery</h3>
                </div>
                <div class="summery-info">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td class="table-name">Job Type</td>
                        <td class="dotted">:</td>
                        <td data-text-color="#03a84e">'.$key['job.type'].'</td>
                      </tr>
                      <tr>
                        <td class="table-name">Category</td>
                        <td class="dotted">:</td>
                        <td>'.$key['job'].'</td>
                      </tr>
                      <tr>
                        <td class="table-name">Posted</td>
                        <td class="dotted">:</td>
                        <td>'.date( 'Y-m-d', $key['created_date']).'</td>
                      </tr>  
                      <tr>
                        <td class="table-name">Salary</td>
                        <td class="dotted">:</td>
                        <td>'.$key['price'].'/ Monthly</td>
                      </tr>
                      <tr>
                        <td class="table-name">Experience</td>
                        <td class="dotted">:</td>
                        <td>'.$key['Experience'].'</td>
                      </tr>
                      <tr>
                        <td class="table-name">Gender</td>
                        <td class="dotted">:</td>
                        <td>'.$key['Gender'].'</td>
                      </tr>
                      <tr>
                        <td class="table-name">Qualification</td>
                        <td class="dotted">:</td>
                        <td>'.$key['Qualification'].'</td>
                      </tr>
                      <tr>
                        <td class="table-name">Applied</td>
                        <td class="dotted">:</td>
                        <td>'.date( 'Y-m-d', $key['created_date']).'</td>
                      </tr>
                      <tr>
                        <td class="table-name">Application End</td>
                        <td class="dotted">:</td>
                        <td data-text-color="#ff6000">'.date( 'Y-m-d H:i:s', $key['created_date']).'</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="widget-item">
                <div class="widget-title">
                  <h3 class="title">Share With</h3>
                </div>
                <div class="social-icons">
                  <a href="https://www.facebook.com" target="_blank" rel="noopener"><i class="icofont-facebook"></i></a>
                  <a href="https://twitter.com" target="_blank" rel="noopener"><i class="icofont-twitter"></i></a>
                  <a href="https://www.skype.com" target="_blank" rel="noopener"><i class="icofont-skype"></i></a>
                  <a href="https://www.pinterest.com" target="_blank" rel="noopener"><i class="icofont-pinterest"></i></a>
                  <a href="https://dribbble.com/" target="_blank" rel="noopener"><i class="icofont-dribbble"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>';}
  ?>
<?php
include_once('footer.php');
?>