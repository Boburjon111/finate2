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
              <h2 class="title">Employers Details</h2>
              <nav class="breadcrumb-area">
                <ul class="breadcrumb justify-content-center">
                  <li><a href="index.php">Home</a></li>
                  <li class="breadcrumb-sep">//</li>
                  <li>Employers</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Employers Details Area Wrapper ==-->
    <section class="employers-details-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="employers-details-wrap">
              <div class="employers-details-info">
                <div class="thumb">
                  <img src="assets/img/companies/11.jpg" width="130" height="130" alt="Image-HasTech">
                </div>
                <div class="content">
                  <?php
                  foreach($employer_category as $key){
                    echo '<h4 class="title">'.$key['name'].'</h4>
                  <ul class="info-list">
                    <li><i class="icofont-location-pin"></i>'.$key['Location'].'</li>
                    <li><i class="icofont-phone"></i>'.$key['phone'].'</li>
                  </ul>
                  <button type="button" class="btn-theme">Follow Us</button>
                  <button type="button" class="btn-theme btn-white">Add Review</button>
                </div>
              </div>
              <div class="employers-counter">
                <div class="counter-item">
                  <h4 class="counter">'.$key['Total Jobs'].'</h4>
                  <h5 class="title">Total jobs</h5>
                </div>
                <div class="counter-item">
                  <h4 class="counter">'.$key['Reviews'].'</h4>
                  <h5 class="title">Review</h5>
                </div>
                <div class="counter-item">
                  <h4 class="counter">'.$key['Views'].'</h4>
                  <h5 class="title">Views</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7 col-xl-8">
            <div class="employers-details-item">
              <div class="content">
                <h4 class="title">About Employers</h4>
                <p class="desc">'.$key['description'].'</p>
                <ul class="employers-details-list">';
                for($i=1;$i<=4;$i++){
                  echo '<li><i class="icofont-check"></i> '.$key['desc_'.$i.''].'</li>';
                }
                  
                echo '</ul>
              </div>';}
                  ?>


                  
              <div class="row">
                <div class="col-12">
                  <div class="content mb--0 pb-2">
                    <h4 class="title">Open Position</h4>
                  </div>
                </div>
                
                <?php
foreach($array_category as $key1){
  echo '<div class="col-12 col-md-6 col-lg-12 col-xl-6">
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
        <p>/'.$key1['working_time'].'</p>
      </div>
      <a class="btn-theme btn-sm" href="job-details.php?id='.$key1['id'].' ">Apply Now</a>
    </div>
  </div>
</div>';
}
        ?>
              
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-xl-4">
            <div class="employers-sidebar">
              <div class="widget-item">
                <div class="widget-title">
                  <h3 class="title">Information</h3>
                </div>
                <div class="summery-info">
                  <table class="table">
                    <tbody>
                      <?php
                      foreach($employer_category as $key){
                      echo '
                      <tr>
                        <td class="table-name">Categories</td>
                        <td class="dotted">:</td>
                        <td>'.$key['Categories'].'</td>
                      </tr>
                      <tr>
                        <td class="table-name">Since</td>
                        <td class="dotted">:</td>
                        <td>'.$key['Since'].'</td>
                      </tr>
                      <tr>
                        <td class="table-name">Views</td>
                        <td class="dotted">:</td>
                        <td>'.$key['Views'].'+</td>
                      </tr>
                      <tr>
                        <td class="table-name">Reviews</td>
                        <td class="dotted">:</td>
                        <td>('.$key['Reviews'].') <span class="rating"></span></td>
                      </tr>
                      <tr>
                        <td class="table-name">Total Jobs</td>
                        <td class="dotted">:</td>
                        <td>'.$key['Total Jobs'].'+</td>
                      </tr>
                      <tr>
                        <td class="table-name">Location</td>
                        <td class="dotted">:</td>
                        <td>'.$key['Location'].'</td>
                      </tr>
                      <tr>
                        <td class="table-name">Team Members</td>
                        <td class="dotted">:</td>
                        <td>'.$key['team-members'].'</td>
                      </tr>
                      <tr>
                        <td class="table-name">Job Success</td>
                        <td class="dotted">:</td>
                        <td>'.$key['job_success'].'%</td>
                      </tr>
                      <tr>
                        <td class="table-name">Phone</td>
                        <td class="dotted">:</td>
                        <td>+'.$key['phone'].'</td>
                      </tr>
                      <tr>
                        <td class="table-name">Email</td>
                        <td class="dotted">:</td>
                        <td>'.$key['email'].'</td>
                      </tr>
                      <tr>
                        <td class="table-name">Website</td>
                        <td class="dotted">:</td>
                        <td data-text-color="#ff6000">'.$key['website'].'</td>
                      </tr>';}
                      ?>
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
              <!-- <div class="widget-item widget-contact">
                <div class="widget-title">
                  <h3 class="title">Contact Now</h3>
                </div>
                <div class="widget-contact-form">
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
                  <div class="form-message"></div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Employers Details Area Wrapper ==-->
  </main>
<?php
include_once("footer.php");
?>