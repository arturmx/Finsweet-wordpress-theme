<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;900&display=swap" rel="stylesheet">
    <title><?php echo get_the_title(); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
  <header class="header">
      <div class="header__wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/Logo.png" alt="company logo" />
        <nav class="header__nav">
          <a href="/front-page" class="header__a">Home</a>
          <a href="/blog" class="header__a">Blog</a>
          <a href="/about-us" class="header__a">About Us</a>
          <a href="/contact" class="header__a">Contact us</a>
          <a href="#" class="header__button">Subscribe</a>
        </nav>
      </div>
    </header>
    <div class="fixedheaderpatch"></div>