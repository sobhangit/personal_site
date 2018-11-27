<!DOCTYPE html>
<html lang="en">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name='keywords' content='سبحان کناری, سبحان, کناری, وب سایت شخصی, وب سایت شخصی سبحان کناری'>
    <meta name='description' content='سبحان کناری هستم طراح وب و برنامه نویس این وب سایت را به عنوان یک نمونه کار برای خودم را اندازی کردم ، امیدوارم این وب سایت مورد پسند شما باشد '>
    <style>iframe[id*="google_ads_iframe_"] { display: none !important; } </style>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Sobhan Konari | Home Page</title>

    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?> >

  <div id="wptime-plugin-preloader">
    درحال بارگذاری
  </div>
  
  <!-- <div class="loader text-center">
   
    <img src="./images/loader.gif" alt="">
    <p>در حال بارگزاری</p>

  </div> -->

  <div class="container-large primary">

    <header>

      <?php
        echo "<input id='image' type='hidden' value=".get_header_image().">";
        echo "<input id='header-text-color' type='hidden' value=".get_header_textcolor().">";
      ?>
      
      <nav class="navbar navbar-fixed-top primary-menu">

        <div class="container-large">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header text-center">

            <button type="button" class="navbar-toggle collapsed" aria-label="Left Align" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
            </button>
              
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="menu collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <?php get_sidebar('primary'); ?>
            
            <!-- <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="اینجا تایپ کنید..">
              </div>
              <button class="btn btn-default" type="button">جستجو</button>
            </form> -->

            <?php get_search_form(); ?>





            
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>