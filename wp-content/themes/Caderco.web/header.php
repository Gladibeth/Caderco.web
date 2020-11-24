<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset='UTF-8'>
  <meta content='width=device-width, initial-scale=1.0' name='viewport'>
  <title>CADERCO</title>
  <link href='<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri();?>/assets/css/slick.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri();?>/assets/css/slick-theme.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri();?>/assets/css/font-awesome.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri();?>/assets/css/animate.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri();?>/assets/css/main.css' rel='stylesheet'>
  <link href='https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.1/css/flag-icon.min.css' rel='stylesheet'>
  <?php wp_head(); ?>
</head>

<body data-spy="scroll" data-target="#navbarNav">
  
  <section class='redes-sociales wow animated' data-wow-duration='1500ms' id='redes-social'>
    <ul>
      <li>
        <i aria-hidden='true' class='fa fa-facebook'></i>
      </li>
      <li>
        <i aria-hidden='true' class='fa fa-instagram'></i>
      </li>
      <li>
        <i aria-hidden='true' class='fa fa-twitter'></i>
      </li>
      <li>
        <i aria-hidden='true' class='fa fa-linkedin'></i>
      </li>
    </ul>
  </section>


  <section class="home">
    <nav class='navbar navbar-expand-md js-navbar-fixed' id='home-caderco'>
      <div class='content-nav'>
        <a class='navbar-brand' href='<?php echo bloginfo('url'); ?>/'>
            <img alt='' id='logo' src='<?php echo get_template_directory_uri();?>/assets/img/CADERCO_BLANCO.svg'>
          </a>
        <button class='navbar-toggler p-2 border-0 hamburger hamburger--elastic d-none-lg' data-toggle='offcanvas' type='button'>
            <span class='hamburger-box'>
              <span class='hamburger-inner'></span>
            </span>
          </button>
        <div class='offcanvas-collapse fil' id='navbarNav'>
          <ul class='language-ul'>
            <li class='nav-item nav-language'>
              <a class='active language-link language' href='#'>ESP</a>
              <a class='language' href='#'>ENG</a>
            </li>
          </ul>
          <ul class='navbar-nav'>
            <li class='nav-item active'>
              <a class='nav-link active' data-scroll='' href='#home-caderco'>Inicio</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' data-scroll='' href='about.html'>Nosotros</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' data-scroll='' href='#services'>Servicios</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' data-scroll='' href='#projects'>Experiencias</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' data-scroll='' href='#footer'>Contacto</a>
            </li>
          </ul>
        </div>
      </div>
      <hr>
    </nav>