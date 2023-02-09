
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
    <title>contact</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/css/reset.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/css/header.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/css/footer.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/css/contact.css" />
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
    <section class="contact">
      <h1 class="contact__h1"><?php the_title(); ?></h1>
      <h2 class="contact__h2"><?php the_field('heading'); ?></h2>
      <p class="contact__p"><?php the_field('paragraph'); ?></p>
      <div class="contact__purple">
        <div class="contact__columns">
          <div class="contact__column">
            <h3 class="contact__h3">Working hours</h3>
            <div class="contact__line"></div>
            <p class="contact__p2"><?php the_field('working_days'); ?></p>
            <p class="contact__p2"><?php the_field('working_hours'); ?></p>
            <p3 class="contact__p3"><?php the_field('support'); ?></p3>
            <div class="contact__space"></div>
          </div>
          <div class="contact__column">
            <h3 class="contact__h3">Contact Us</h3>
            <div class="contact__line"></div>
            <p class="contact__p2"><?php the_field('phone_number'); ?></p>
            <p3 class="contact__p3"><?php the_field('e_mail'); ?></p3>
          </div>
        </div>
      </div>
      <form class="contact__form">
        <input class="contact__input" id="name" type="text" placeholder="Full Name">
        <input class="contact__input" id="name" type="email" placeholder="Your Email">
        <input class="contact__input" id="name" type="text" placeholder="Full Name">
        <textarea class="contact__textarea" placeholder="Message"></textarea>
        <button class="contact__button">Send Message</button>
      </form>

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