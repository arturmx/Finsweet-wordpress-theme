<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;900&display=swap"
      rel="stylesheet"
    />
    <title>single blog page</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/css/reset.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/css/header.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/css/singleblog.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/css/readnext.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/css/subscribe.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/css/footer.css" />
    <link rel="stylesheet" href="components/css/reset.css" />
    <link rel="stylesheet" href="components/css/header.css" />
    <link rel="stylesheet" href="components/css/singleblog.css" />
    <link rel="stylesheet" href="components/css/readnext.css" />
    <link rel="stylesheet" href="components/css/subscribe.css" />
    <link rel="stylesheet" href="components/css/footer.css" />    
  </head>
  <body>
    <header class="header">
      <div class="header__wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/components/header/Logo.png" alt="company logo" />
        <nav class="header__nav">
          <a href="/front-page" class="header__a">Home</a>
          <a href="/page-blog" class="header__a">Blog</a>
          <a href="/about-us" class="header__a">About Us</a>
          <a href="/contact" class="header__a">Contact us</a>
          <a href="#" class="header__button">Subscribe</a>
        </nav>
      </div>
    </header>
    <div class="fixedheaderpatch"></div>

    <section class="singleblog">
      <div class="singleblog__wrapper">
        <div class="singleblog__author">
          <img src="<?php the_field('author_photo_top'); ?>">
          <div>
            <p class="singleblog__name"><?php the_field('author_top'); ?></p>
            <p class="singleblog__date">Posted on <?php the_field('date_top'); ?></p>
          </div>
        </div>
        <h1 class="singleblog__h1"><?php the_field('heading_top'); ?></h1>
        <div class="singleblog__category">
          <img src="<?php the_field('category_logo_top'); ?>" alt="rocket">
          <p class="singleblog__categoryname"><?php the_field('category_name_top'); ?></p>
        </div>
      </div>
      <img class="singleblog__photo" src="<?php the_field('hero_photo_top'); ?>">
      <div class="singleblog__wrapper">
        <?php the_field('text_top'); ?>
    </section>

    <section class="readnext">
      <h2 class="readnext__h2">What to read next</h2>
      <div class="readnext__columns">
        <div class="readnext__column">
          <img src="<?php the_field('bottom_photo1'); ?>">
          <p class="readnext__authordate">
            By <span class="readnext__author"><?php the_field('bottom_author1'); ?></span>l
            <span class="readnext__date"><?php the_field('bottom_date1'); ?></span></p>
          <h3 class="readnext__h3"><?php the_field('bottom_heading1'); ?></h3>
          <p class="readnext__p"><?php the_field('bottom_paragraph1'); ?></p>
        </div>
        <div class="readnext__column">
          <img src="<?php the_field('bottom_photo2'); ?>">
          <p class="readnext__authordate">
            By <span class="readnext__author"><?php the_field('bottom_author2'); ?></span>l
            <span class="readnext__date"><?php the_field('bottom_date2'); ?></span></p>
          <h3 class="readnext__h3"><?php the_field('bottom_heading2'); ?></h3>
          <p class="readnext__p"><?php the_field('bottom_paragraph2'); ?></p>
        </div>
        <div class="readnext__column">
          <img src="<?php the_field('bottom_photo3'); ?>">
          <p class="readnext__authordate">
            By <span class="readnext__author"><?php the_field('bottom_author3'); ?></span>l
            <span class="readnext__date"><?php the_field('bottom_date3'); ?></span></p>
          <h3 class="readnext__h3"><?php the_field('bottom_heading3'); ?></h3>
          <p class="readnext__p"><?php the_field('bottom_paragraph3'); ?></p>
        </div>
      </div>
      <div class="readnext__line"></div>
    </section>

    <section class="subscribe">
      <h2 class="subscribe__h2">Join our team to be a part of our story</h2>
      <p class="subscribe__p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
      <a href="#" class="subscribe__button">Join Now</a>
    </section>

    <footer class="footer">
      <div class="footer__wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/components/footer/Logo.png" alt="company logo" />
        <nav class="footer__nav">
          <a href="#">Home</a>
          <a href="#">Blog</a>
          <a href="#">About Us</a>
          <a href="#">Contact us</a>
          <a href="#">Privacy policy</a>
        </nav>
      </div>
      <div class="footer__bg2">
        <div class="footer__wrapper2">
          <h2 class="footer__h2">
            Subscribe to our news letter to get latest updates and news
          </h2>
          <form>
            <input
              id="subscribe"
              class="footer__input"
              placeholder="Enter Your Email"
              type="email"
            />
            <button type="submit" class="footer__button">Subscribe</button>
          </form>
        </div>
      </div>
      <div class="footer__bottom">
        <div class="footer__adress">
          <adress>Finstreet 118 2561 Fintown</adress>
          <adress>Hello@finsweet.com 020 7993 2905</adress>
        </div>
        <div class="footer__social">
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/components/footer/facebook.png"
             alt="facebook logo" /></a>
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/components/footer/twitter.png"
            alt="twitter logo" /></a>
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/components/footer/instagram.png"
            alt="instagram logo" /></a>
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/components/footer/linkedin.png"
            alt="linkedin logo" /></a>
        </div>
      </div>
    </footer>
  </body>
</html>