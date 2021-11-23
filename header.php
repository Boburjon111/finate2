<?php 
include_once("db.php");

$header_zapros = "SELECT * FROM `menu` WHERE status='1'";
$header_result = mysqli_query($connect, $header_zapros);


$array_header = [];
while($row = mysqli_fetch_assoc($header_result)){
  $array_header[] = $row; 
}


$city_zapros = "SELECT * FROM `choosen city` WHERE status='1'";
$city_result = mysqli_query($connect, $city_zapros);

$array_city = [];
while($row2 = mysqli_fetch_assoc($city_result)){
$array_city[] = $row2;
}


$category_zapros = "SELECT * FROM `category` WHERE status='1'";
$category_result = mysqli_query($connect, $category_zapros);

$array_category = [];
while($row3 = mysqli_fetch_assoc($category_result)){
$array_category[] = $row3;
}


$mysqli = "SELECT * FROM `howitwork?`";
$how_res = mysqli_query($connect, $mysqli);
$array_1 = [];

while($row6 = mysqli_fetch_assoc($how_res)){
  $array_1[] = $row6;
}


$mysqli_candidates = "SELECT * FROM `Candidates` WHERE status='1'";
$candidates_res = mysqli_query($connect, $mysqli_candidates);
$array_2 = [];

while($row = mysqli_fetch_assoc($candidates_res)){
  $array_2[] = $row;
}

$mysqli_icons = "SELECT * FROM `icons` WHERE status='1'";
$icons_res = mysqli_query($connect, $mysqli_icons);
$array_3 = [];

while($row = mysqli_fetch_assoc($icons_res)){
  $array_3[] = $row;
}

$mysqli_footer = "SELECT * FROM `footer` WHERE status='1'";
$footer_res = mysqli_query($connect, $mysqli_footer);
$array_5 = [];

while($row = mysqli_fetch_assoc($footer_res)){
  $array_5[] = $row;
}

 

$mysqli_clients = "SELECT * FROM `clients` WHERE status='1'";
$clients_res = mysqli_query($connect, $mysqli_clients);
$array_4 = [];

while($row = mysqli_fetch_assoc($clients_res)){
  $array_4[] = $row;
}




$mysqli_footer2 = "SELECT * FROM `footer2` WHERE status='1'";
$footer2_res = mysqli_query($connect, $mysqli_footer2);
$array_6 = [];

while($row = mysqli_fetch_assoc($footer2_res)){
  $array_6[] = $row;
}



$mysqli_about = "SELECT * FROM `about-us` WHERE status='1'";
$about_res = mysqli_query($connect, $mysqli_about);
$array_7 = [];

while($row = mysqli_fetch_assoc($about_res)){
  $array_7[] = $row;
}








?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Finate - Job Portal Website Template Using Bootstrap 5"/>
    <meta name="keywords" content="accessories, digital products, electronic html, modern, products, responsive"/>
    <meta name="author" content="hastech"/>

    <title>Finate - Job Portal Website Template Using Bootstrap 5</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&display=swap" rel="stylesheet">


    <!--== Bootstrap CSS ==-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--== Icofont Icon CSS ==-->
    <link href="assets/css/icofont.css" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="assets/css/swiper.min.css" rel="stylesheet" />
    <!--== Fancybox Min CSS ==-->
    <link href="assets/css/fancybox.min.css" rel="stylesheet" />
    <!--== Aos Min CSS ==-->
    <link href="assets/css/aos.min.css" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>

<!--wrapper start-->
<div class="wrapper">
  
  <!--== Start Header Wrapper ==-->
  <header class="header-area transparent">
    <div class="container">
      <div class="row no-gutter align-items-center position-relative">
        <div class="col-12">
          <div class="header-align">
            <div class="header-align-start">
              <div class="header-logo-area">
                <a href="index.php">
                  <img class="logo-main" src="assets/img/logo-light.png" alt="Logo" />
                  <img class="logo-light" src="assets/img/logo-light.png" alt="Logo" />
                </a>
              </div>
            </div>

            <?php

          foreach($array_header as $key){
            echo '<div class="header-align-center">
            <div class="header-navigation-area position-relative">
            <ul class="main-menu nav">
            <li class="has-submenu"><a href="'.$key['link'].'"><span>'.$key['theme'].'</span></a>';
            if($key['num']>0){ 
              echo '<ul class="submenu-nav">';
              for($i=1; $i<=$key['num']; $i++){
                echo '<li><a href="'.$key['link'.$i.''].'">'.$key['subheader'.$i.''].'</a></li>';
            }
               echo '</ul>';
            }else{
              echo '';
            }

          echo '</li>
            </ul>
            </div>
          </div>';
          }
?>
            
             
            <div class="header-align-end">
              <div class="header-action-area">
                <a class="btn-registration" href="registration.php"><span>+</span> Registration</a>
                <button class="btn-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasMenu" aria-controls="AsideOffcanvasMenu">
                  <i class="icofont-navigation-menu"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</header> 
        