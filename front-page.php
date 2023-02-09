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
    <title>coding page</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/css/reset.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/css/header.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/css/homehero.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/css/featuredall.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/css/aboutus.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/css/allcat.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/css/whywestarted.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/css/authors.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/css/testimonials.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/css/subscribe.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/css/footer.css" />
    <link rel="stylesheet" href="/components/css/reset.css"/>
    <link rel="stylesheet" href="/components/css/header.css"/>
    <link rel="stylesheet" href="/slick/slick.css" />
    <link rel="stylesheet" href="/components/css/homehero.css"/>
    <link rel="stylesheet" href="/components/css/featuredall.css"/>
    <link rel="stylesheet" href="/components/css/aboutus.css"/>
    <link rel="stylesheet" href="/components/css/allcat.css"/>
    <link rel="stylesheet" href="/components/css/whywestarted.css"/>
    <link rel="stylesheet" href="/components/css/authors.css"/>
    <link rel="stylesheet" href="/components/css/testimonials.css"/>
    <link rel="stylesheet" href="/components/css/subscribe.css"/>
    <link rel="stylesheet" href="/components/css/footer.css"/>
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

    <section class="homehero" style="background-image: url('<?php the_field('background_top') ?>')">
      <div class="homehero__wrapper">
        <h2 class="homehero__h2">
        <?php the_field('top_surtitle'); ?>
        </h2>
        <h1 class="homehero__h1">
        <?php the_field('heading_top'); ?>
        </h1>
        <p class="homehero__authordate">
          By <span class="homehero__author"><?php the_field('author_top'); ?></span> |
          <span><?php the_field('date_top'); ?></span>
        </p>
        <p class="homehero__p">
        <?php the_field('paragraph_top'); ?>
        </p>
        <a class="homehero__button" href="#">Read More &gt</a>
      </div>
    </section>

    <section class="featuredall">
      <div class="featuredall__column1">
        <h2 class="featuredall__h2">Featured Post</h2>
        <div class="featuredall__column1wrapper">
          <img class="featuredall__photo" src="<?php the_field('photo_left') ?>">
          <p class="featuredall__authordate">
            By <span class="featuredall__author"><?php the_field('author_featured'); ?></span>l
            <span class="featuredall__date"><?php the_field('date_featured'); ?></span>
          </p>
          <h3 class="featuredall__h3"><?php the_field('h3_featured'); ?></h3>
          <p class="featuredall__p"><?php the_field('paragraph_featured'); ?></p>
          <a href="#" class="featuredall__button">Read More &gt</a>
        </div>
      </div>
      <div class="featuredall__column2">
        <div class="featuredall__righttop">
          <h2 class="featuredall__h2">All Posts</h2>
          <a href="#" class="featuredall__a">View All</a>
        </div>

        <div class="featuredall__rows">
        <a href="#" class="featuredall__row">
          <p class="featuredall__authordate">
            By <span class="featuredall__author"><?php the_field('right_author1'); ?></span>l
            <span class="featuredall__date"><?php the_field('right_date1'); ?></span>
          </p>
          <h4 class="featuredall__h4"><?php the_field('right_header1'); ?></h4>
        </a>
        <a href="#" class="featuredall__row">
          <p class="featuredall__authordate">
            By <span class="featuredall__author"><?php the_field('right_author2'); ?></span>l
            <span class="featuredall__date"><?php the_field('right_date2'); ?></span>
          </p>
          <h4 class="featuredall__h4"><?php the_field('right_header2'); ?></h4>
        </a>
        <a href="#" class="featuredall__row">
          <p class="featuredall__authordate">
            By <span class="featuredall__author"><?php the_field('right_author3'); ?></span>l
            <span class="featuredall__date"><?php the_field('right_date3'); ?></span>
          </p>
          <h4 class="featuredall__h4"><?php the_field('right_header3'); ?></h4>
        </a>
        <a href="#" class="featuredall__row">
          <p class="featuredall__authordate">
            By <span class="featuredall__author"><?php the_field('right_author4'); ?></span>l
            <span class="featuredall__date"><?php the_field('right_date4'); ?></span>
          </p>
          <h4 class="featuredall__h4"><?php the_field('right_header4'); ?></h4>
        </a>
        </div>
        
      </div>
    </section>
    
    <div class="aboutus__line">
      <div class="aboutus__lineleft"></div>
      <div class="aboutus__lineright"></div>
    </div>
    <section class="aboutus">
      <div class="aboutus__column">
        <h4 class="aboutus__h4">ABOUT US</h4>
        <h5 class="aboutus__h5">
        <?php the_field('descriptionleft_aboutus'); ?>
        </h5>
        <p class="aboutus__p">
        <?php the_field('paragraphleft_aboutus'); ?>
        </p>
        <a href="#" class="aboutus__readmore">Read More &gt</a>
      </div>
      <div class="aboutus__column">
        <h4 class="aboutus__h4">OUR MISSION</h4>
        <h6 class="aboutus__h6">
        <?php the_field('descriptionright_aboutus'); ?>
        </h6>
        <p class="aboutus__p">
        <?php the_field('paragraphright_aboutus'); ?>
        </p>
      </div>
    </section>

    <section class="allcat">
      <h2 class="allcat__h2">All Categories</h2>
      <div class="allcat__columns">
        <a class="allcat__column" href="#">
          <img class="allcat__img" src="<?php the_field('category_photo1') ?>"
          alt="2 houses symbol">
          <h3 class="allcat__h3"><?php the_field('category_name1') ?></h3>
          <p class="allcat__p"><?php the_field('category_description1') ?></p>
        </a>
        <a class="allcat__column" href="#">
          <img class="allcat__img" src="<?php the_field('category_photo2') ?>"
          alt="2 houses symbol">
          <h3 class="allcat__h3"><?php the_field('category_name2') ?></h3>
          <p class="allcat__p"><?php the_field('category_description2') ?></p>
        </a>
        <a class="allcat__column" href="#">
          <img class="allcat__img" src="<?php the_field('category_photo3') ?>"
          alt="rocket symbol">
          <h3 class="allcat__h3"><?php the_field('category_name3') ?></h3>
          <p class="allcat__p"><?php the_field('category_description3') ?></p>
        </a>
        <a class="allcat__column" href="#">
          <img class="allcat__img" src="<?php the_field('category_photo4') ?>"
          alt="human head symbol">
          <h3 class="allcat__h3"><?php the_field('category_name4') ?></h3>
          <p class="allcat__p"><?php the_field('category_description4') ?></p>
        </a>
      </div>
    </section>

    <section class="whywestarted">
      <img src="<?php the_field('why_we_started_photo') ?>">
      <div class="whywestarted__right">
        <h2 class="whywestarted__h2">WHY WE STARTED</h2>
        <h3 class="whywestarted__h3"><?php the_field('why_we_started_heading') ?></h3>
        <p class="whywestarted__p"><?php the_field('why_we_started_paragraph') ?></p>
        <a class="whywestarted__button" href="#">Discover our story &gt</a>
      </div>
    </section>

    <section class="authors">
      <h2 class="authors__h2">List of Authors</h2>
      <div class="authors__columns">
        <div class="authors__column">
          <img src="<?php the_field('authors_photo1') ?>">
          <p class="authors__name"><?php the_field('authors_name1') ?></p>
          <p class="authors__job"><?php the_field('authors_job1') ?></p>
          <div class="authors__social">
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/components/front-page/facebook.png" alt="facebook logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/components/front-page/twitter.png" alt="twitter logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/components/front-page/instagram.png" alt="instagram logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/components/front-page/linkedin.png" alt="linkedin logo"></a>
          </div>
        </div>
        <div class="authors__column">
          <img src="<?php the_field('authors_photo2') ?>">
          <p class="authors__name"><?php the_field('authors_name2') ?></p>
          <p class="authors__job"><?php the_field('authors_job2') ?></p>
          <div class="authors__social">
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/components/front-page/facebook.png" alt="facebook logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/components/front-page/twitter.png" alt="twitter logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/components/front-page/instagram.png" alt="instagram logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/components/front-page/linkedin.png" alt="linkedin logo"></a>
          </div>
        </div>
        <div class="authors__column">
          <img src="<?php the_field('authors_photo3') ?>">
          <p class="authors__name"><?php the_field('authors_name3') ?></p>
          <p class="authors__job"><?php the_field('authors_job3') ?></p>
          <div class="authors__social">
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/components/front-page/facebook.png" alt="facebook logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/components/front-page/twitter.png" alt="twitter logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/components/front-page/instagram.png" alt="instagram logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/components/front-page/linkedin.png" alt="linkedin logo"></a>
          </div>
        </div>
        <div class="authors__column">
          <img src="<?php the_field('authors_photo4') ?>">
          <p class="authors__name"><?php the_field('authors_name4') ?></p>
          <p class="authors__job"><?php the_field('authors_job4') ?></p>
          <div class="authors__social">
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/components/front-page/facebook.png" alt="facebook logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/components/front-page/twitter.png" alt="twitter logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/components/front-page/instagram.png" alt="instagram logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/components/front-page/linkedin.png" alt="linkedin logo"></a>
          </div>
        </div>
      </div>
      <div class="authors__logos">
        <img src="<?php the_field('authors_logo0') ?>">
        <img src="<?php the_field('authors_logo1') ?>">
        <img src="<?php the_field('authors_logo2') ?>">
        <img src="<?php the_field('authors_logo3') ?>">
        <img src="<?php the_field('authors_logo4') ?>">
        <img src="<?php the_field('authors_logo5') ?>">
      </div>
    </section>

    <section class="testimonials">
      <div class="testimonials__wrapper">
        <div class="testimonials__left">
          <h2 class="testimonials__h2">TESTIMONIALS</h2>
          <h3 class="testimonials__h3"><?php the_field('testimonials_header') ?></h3>
          <p class="testimonials__p"><?php the_field('testimonials_description') ?></p>
        </div>
        <div class="testimonials__line"></div>
        <div class="testimonials__right">

          <div>
            <p class="testimonials__h4"><?php the_field('testimonials_person1_paragraph') ?></p>
            <div class="testimonials__bottom">
              <img class="testimonials__photo" src="<?php the_field('testimonials_person1_photo') ?>">
              <div>
                <p class="testimonials__name"><?php the_field('testimonials_person1_name') ?></p>
                <p class="testimonials__city"><?php the_field('testimonials_person1_city') ?></p>
              </div>
              
            </div>
          </div>

          <div>
            <p class="testimonials__h4"><?php the_field('testimonials_person2_paragraph') ?></p>
            <div class="testimonials__bottom">
              <img class="testimonials__photo" src="<?php the_field('testimonials_person2_photo') ?>">
              <div>
                <p class="testimonials__name"><?php the_field('testimonials_person2_name') ?></p>
                <p class="testimonials__city"><?php the_field('testimonials_person2_city') ?></p>
              </div>            
            </div>
          </div>

          <div>
            <p class="testimonials__h4"><?php the_field('testimonials_person3_paragraph') ?></p>
            <div class="testimonials__bottom">
              <img class="testimonials__photo" src="<?php the_field('testimonials_person3_photo') ?>">
              <div>
                <p class="testimonials__name"><?php the_field('testimonials_person3_name') ?></p>
                <p class="testimonials__city"><?php the_field('testimonials_person3_city') ?></p>
              </div>         
            </div>
          </div>

        </div>        
      </div>
      <div class="testimonials__arrows">
        <div class="testimonials__arrow testimonials__arrowleft">
          <svg width="23" height="16" viewBox="0 0 23 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M21.2852 9C21.8374 9 22.2852 8.55228 22.2852 8C22.2852 7.44772 21.8374 7 21.2852 7L21.2852 9ZM0.449017 7.29289C0.0584927 7.68342 0.0584926 8.31658 0.449017 8.7071L6.81298 15.0711C7.2035 15.4616 7.83667 15.4616 8.22719 15.0711C8.61772 14.6805 8.61772 14.0474 8.22719 13.6569L2.57034 8L8.22719 2.34314C8.61772 1.95262 8.61772 1.31946 8.22719 0.928931C7.83667 0.538407 7.2035 0.538407 6.81298 0.928931L0.449017 7.29289ZM21.2852 7L1.15612 7L1.15612 9L21.2852 9L21.2852 7Z" fill="#232536"/>
          </svg>
        </div>
        <div class="testimonials__arrow testimonials__arrowright">
          <svg width="23" height="16" viewBox="0 0 23 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M21.2852 9C21.8374 9 22.2852 8.55228 22.2852 8C22.2852 7.44772 21.8374 7 21.2852 7L21.2852 9ZM0.449017 7.29289C0.0584927 7.68342 0.0584926 8.31658 0.449017 8.7071L6.81298 15.0711C7.2035 15.4616 7.83667 15.4616 8.22719 15.0711C8.61772 14.6805 8.61772 14.0474 8.22719 13.6569L2.57034 8L8.22719 2.34314C8.61772 1.95262 8.61772 1.31946 8.22719 0.928931C7.83667 0.538407 7.2035 0.538407 6.81298 0.928931L0.449017 7.29289ZM21.2852 7L1.15612 7L1.15612 9L21.2852 9L21.2852 7Z" fill="#232536"/>
          </svg>
        </div>
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
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/components/front-page/slider.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript" src="components/front-page/slider.js"></script>
  </body>
</html>
