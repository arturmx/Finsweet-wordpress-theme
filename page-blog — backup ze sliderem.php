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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;900&display=swap" rel="stylesheet">
    <title>Blog page</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/css/reset.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/css/header.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/css/footer.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/css/featured.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/css/allposts.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/css/allcat.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/css/subscribe.css" />
    <link rel="stylesheet" href="/components/css/reset.css" />
    <link rel="stylesheet" href="/components/css/header.css" />
    <link rel="stylesheet" href="/components/css/footer.css" />
    <link rel="stylesheet" href="/slick/slick.css" />
    <link rel="stylesheet" href="/components/css/featured.css" />
    <link rel="stylesheet" href="/components/css/allposts.css" />
    <link rel="stylesheet" href="/components/css/allcat.css" />
    <link rel="stylesheet" href="/components/css/subscribe.css" />
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
    <section class="featured">
      <div class="featured__wrapper">
          <div>
              <h1 class="featured__h1">FEATURED POST</h1>
              <h2 class="featured__h2"><?php the_field('featured_post_heading') ?></h2>
              <p class="featured__authordate">
                  By <span class="featured__author"><?php the_field('featured_post_author') ?> </span>l
                  <span class="featured__date"><?php the_field('featured_post_date') ?></span></p>
              <p class="featured__p"><?php the_field('featured_post_paragraph') ?></p>
              <a href="#" class="featured__button">Read More &gt</a>
          </div>
          <img src="<?php the_field('featured_post_photo') ?>" class="featured__photo">
      </div>
    </section>

    <section class="allposts">
      <h1 class="allposts__h1">All posts</h1>
      <div class="allposts__line"></div>
      
      <div class="allposts__slider">
        <div class="allpost__slide1">
          <a href="#" class="allposts__row">
              <img class="allposts__photo" src="<?php echo get_template_directory_uri(); ?>/components/page-blog/1181533.png" 
              alt="two women in front of dry erase board">
              <div class="allposts__text">
                  <h2 class ="allposts__h2">STARTUP</h2>
                  <h3 class ="allposts__h3">Design tips for designers that cover everything you need</h3>
                  <p class ="allposts__p">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
                      dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
              </div>
          </a>
  
          <a href="#" class="allposts__row">
            <img class="allposts__photo" src="<?php echo get_template_directory_uri(); ?>/components/page-blog/3183197.png" 
            alt="people doing handshakes">
            <div class="allposts__text">
                <h2 class ="allposts__h2">BUSINESS</h2>
                <h3 class ="allposts__h3">Design tips for designers that cover everything you need</h3>
                <p class ="allposts__p">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            </div>
          </a>
  
          <a href="#" class="allposts__row">
            <img class="allposts__photo" src="<?php echo get_template_directory_uri(); ?>/components/page-blog/3183173.png" 
            alt="woman looking at man">
            <div class="allposts__text">
                <h2 class ="allposts__h2">STARTUP</h2>
                <h3 class ="allposts__h3">Logo design trends to avoid in 2022</h3>
                <p class ="allposts__p">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            </div>
          </a>
  
          <a href="#" class="allposts__row">
            <img class="allposts__photo" src="<?php echo get_template_directory_uri(); ?>/components/page-blog/3182811.png" 
            alt="people walking on hallway">
            <div class="allposts__text">
                <h2 class ="allposts__h2">TECHNOLOGY</h2>
                <h3 class ="allposts__h3">8 Figma design systems you can download for free today</h3>
                <p class ="allposts__p">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            </div>
          </a>
  
          <a href="#" class="allposts__row">
            <img class="allposts__photo" src="<?php echo get_template_directory_uri(); ?>/components/page-blog/1181533.png" 
            alt="two women in front of dry erase board">
            <div class="allposts__text">
                <h2 class ="allposts__h2">ECONOMY</h2>
                <h3 class ="allposts__h3">Font sizes in UI design: The complete guide to follow</h3>
                <p class ="allposts__p">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            </div>
          </a>
        </div>
  
        <div class="allposts__slide2">
          <a href="#" class="allposts__row">
            <img class="allposts__photo" src="<?php echo get_template_directory_uri(); ?>/components/page-blog/3183197.png" 
            alt="people doing handshakes">
            <div class="allposts__text">
                <h2 class ="allposts__h2">BUSINESS</h2>
                <h3 class ="allposts__h3">Design tips for designers that cover everything you need</h3>
                <p class ="allposts__p">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            </div>
          </a>
  
          <a href="#" class="allposts__row">
            <img class="allposts__photo" src="<?php echo get_template_directory_uri(); ?>/components/page-blog/3183197.png" 
            alt="people doing handshakes">
            <div class="allposts__text">
                <h2 class ="allposts__h2">BUSINESS</h2>
                <h3 class ="allposts__h3">Design tips for designers that cover everything you need</h3>
                <p class ="allposts__p">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            </div>
          </a>
  
          <a href="#" class="allposts__row">
            <img class="allposts__photo" src="<?php echo get_template_directory_uri(); ?>/components/page-blog/3183197.png" 
            alt="people doing handshakes">
            <div class="allposts__text">
                <h2 class ="allposts__h2">BUSINESS</h2>
                <h3 class ="allposts__h3">Design tips for designers that cover everything you need</h3>
                <p class ="allposts__p">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            </div>
          </a>
  
          <a href="#" class="allposts__row">
            <img class="allposts__photo" src="<?php echo get_template_directory_uri(); ?>/components/page-blog/3183197.png" 
            alt="people doing handshakes">
            <div class="allposts__text">
                <h2 class ="allposts__h2">BUSINESS</h2>
                <h3 class ="allposts__h3">Design tips for designers that cover everything you need</h3>
                <p class ="allposts__p">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            </div>
          </a>
  
          <a href="#" class="allposts__row">
            <img class="allposts__photo" src="<?php echo get_template_directory_uri(); ?>/components/page-blog/3183197.png" 
            alt="people doing handshakes">
            <div class="allposts__text">
                <h2 class ="allposts__h2">BUSINESS</h2>
                <h3 class ="allposts__h3">Design tips for designers that cover everything you need</h3>
                <p class ="allposts__p">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            </div>
          </a>
  
        </div>
  
        <div class="allposts__slide3">
  
          <a href="#" class="allposts__row">
            <img class="allposts__photo" src="<?php echo get_template_directory_uri(); ?>/components/page-blog/3183173.png" 
            alt="woman looking at man">
            <div class="allposts__text">
                <h2 class ="allposts__h2">STARTUP</h2>
                <h3 class ="allposts__h3">Logo design trends to avoid in 2022</h3>
                <p class ="allposts__p">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            </div>
          </a>
  
          <a href="#" class="allposts__row">
            <img class="allposts__photo" src="<?php echo get_template_directory_uri(); ?>/components/page-blog/3183173.png" 
            alt="woman looking at man">
            <div class="allposts__text">
                <h2 class ="allposts__h2">STARTUP</h2>
                <h3 class ="allposts__h3">Logo design trends to avoid in 2022</h3>
                <p class ="allposts__p">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            </div>
          </a>
  
          <a href="#" class="allposts__row">
            <img class="allposts__photo" src="<?php echo get_template_directory_uri(); ?>/components/page-blog/3183173.png" 
            alt="woman looking at man">
            <div class="allposts__text">
                <h2 class ="allposts__h2">STARTUP</h2>
                <h3 class ="allposts__h3">Logo design trends to avoid in 2022</h3>
                <p class ="allposts__p">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            </div>
          </a>
  
          <a href="#" class="allposts__row">
            <img class="allposts__photo" src="<?php echo get_template_directory_uri(); ?>/components/page-blog/3183173.png" 
            alt="woman looking at man">
            <div class="allposts__text">
                <h2 class ="allposts__h2">STARTUP</h2>
                <h3 class ="allposts__h3">Logo design trends to avoid in 2022</h3>
                <p class ="allposts__p">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            </div>
          </a>
  
          <a href="#" class="allposts__row">
            <img class="allposts__photo" src="<?php echo get_template_directory_uri(); ?>/components/page-blog/3183173.png" 
            alt="woman looking at man">
            <div class="allposts__text">
                <h2 class ="allposts__h2">STARTUP</h2>
                <h3 class ="allposts__h3">Logo design trends to avoid in 2022</h3>
                <p class ="allposts__p">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            </div>
          </a>
  
        </div>
      </div>
      <div class="allposts__arrows">
        <div class="arrow-prev">
          <p>&lt Prev</p>
        </div>
        <div class="arrow-next">
          <p>Next &gt</p>
        </div>
      </div>
    </section>
  
    <section class="allcat">
      <h2 class="allcat__h2">All Categories</h2>
      <div class="allcat__columns">
        <a class="allcat__column" href="#">
          <img class="allcat__img" src="<?php echo get_template_directory_uri(); ?>/components/allcat/Icon1.png"
          alt="2 houses symbol">
          <h3 class="allcat__h3">Business</h3>
          <p class="allcat__p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
        </a>
        <a class="allcat__column" href="#">
          <img class="allcat__img" src="<?php echo get_template_directory_uri(); ?>/components/allcat/Icon1.png"
          alt="rocket symbol">
          <h3 class="allcat__h3">Startup</h3>
          <p class="allcat__p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
        </a>
        <a class="allcat__column" href="#">
          <img class="allcat__img" src="<?php echo get_template_directory_uri(); ?>/components/allcat/Icon3.png"
          alt="chart symbol">
          <h3 class="allcat__h3">Economy</h3>
          <p class="allcat__p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
        </a>
        <a class="allcat__column" href="#">
          <img class="allcat__img" src="<?php echo get_template_directory_uri(); ?>/components/allcat/Icon4.png"
          alt="human head symbol">
          <h3 class="allcat__h3">Technology</h3>
          <p class="allcat__p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
        </a>
      </div>
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

    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-1.11.0.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/components/page-blog/slider.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript" src="components/page-blog/slider.js"></script>
  </body>
</html>
