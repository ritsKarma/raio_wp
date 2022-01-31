<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/app/scss/style.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <title>Radio Gham Chhaya</title> -->
    
</head>
<body>
    <header class="header ">
        <div class="overlay has-fade"></div>
        <nav class="container container--pall flex flex-jc-sb flex-ai-c">
          <a href="<?php echo site_url()?>" class="header__logo">
            <img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="Easybank" />
          </a>

          <a id="btnHamburger" href="#" class="header__toggle hide-for-desktop">
            <span></span>
            <span></span>
            <span></span>
            <div class="header__links hide-for-mobile">
               <!-- <a href="<?php echo site_url() ?>">Home</a>
              <a href="<?php echo site_url('/about-us')?>">About Us</a>
               <a href="#">Features</a> 
              <a href="#">Blog</a>
              <a href="<?php echo site_url('privacy-policy')?>">Our Shows</a>
              <a href="#">Contact Us</a>  -->
             <?php wp_nav_menu( array(
               'theme_location' => 'headerMenuLocation'
             ));
             ?>
            </div>

            <a href="https://liveradio.lexiconcpl.com:8443/radioghamchhaya.mp3" target="_blank" class="hide-for-mobile button header__cta ">Play Radio</button>
            </a>
        </nav>

        <div class="header__menu has-fade ">
         
          <?php wp_nav_menu( array(
               'theme_location' => 'headerMenuLocation'
             ));
             ?>
        </div>
      </header>

