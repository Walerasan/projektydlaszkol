<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Site Metas -->
  <meta name="keywords" content="aplikacje dla szkół, projekty dla szkół, erasmus+" />
  <meta name="description" content="Autorskie aplikacje dla dyrektorów szkół, Aplikacje internetowe dla szkół, projekty dla szkół, erasmus+" />
  <meta name="author" content="Walerasan@gmail.com" />

  <title>Projekty dla Szkół</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet" type="text/css">

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet" type="text/css">
  <!-- responsive style -->
  <link href="<?php echo get_bloginfo('template_directory'); ?>/css/responsive.css" rel="stylesheet" type="text/css">
  <?php wp_head(); ?>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <div class="brand_box" style="text-align:center;">
      <a class="navbar-brand" href="index.html">
        <span>
          Projekty Dla Szkół<br/>
          Aplikacje Dla Szkół<br/>
          Bilety lotnicze dla Szkół<br/>
        </span>
      </a>
    </div>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="img-box">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/images/slajd1.jpg" alt="Projekty dla Szkół">
            </div>
          </div>
          <div class="carousel-item">
            <div class="img-box">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/images/slajd2.jpg" alt="Aplikacje dla Szkół">
            </div>
          </div>
          <div class="carousel-item">
            <div class="img-box">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/images/slajd3.jpg" alt="Bilety lotnicze dla Szkół">
            </div>
          </div>
          <div class="carousel-item">
            <div class="img-box">
              <img src="<?php echo get_bloginfo('template_directory'); ?>/images/slajd4.jpg" alt="Bilety lotnicze dla Szkół">
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- nav section -->

  <section class="nav_section">
    <div class="container">
      <div class="custom_nav2">
        <nav class="navbar navbar-expand custom_nav-container ">

          <div class="collapse navbar-collapse" id="navbarSupportedContent">

              <?php wp_nav_menu( array(
                'theme_location' => 'main-menu',
                'menu_class'=>'navbar-nav',
                'walker' => new MenuWalerasanWalker(),
                ) ); ?>
              
          </div>
        </nav>
      </div>
    </div>
  </section>

  <!-- end nav section -->