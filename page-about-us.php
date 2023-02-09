<?php get_header(); ?>

    <section class="abouthero">
      <div class="abouthero__top">
        <div class="abouthero__topleft">
          <h1 class="abouthero__h1">ABOUT US</h1>
          <h2 class="abouthero__h2"><?php the_field('top_heading_description') ?></h2>
        </div>
        <p class="abouthero__p"><?php the_field('top_paragraph') ?></p>
      </div>
      <img class="abouthero__photo" src="<?php the_field('hero_photo') ?>">
      <div class="abouthero__box">
        <div class="abouthero__column">
          <p class="abouthero__number"><?php the_field('top_blogs_published') ?></p>
          <p class="abouthero__numberof">Blogs Published</p>
        </div>
        <div class="abouthero__column">
          <p class="abouthero__number"><?php the_field('top_views_on_finsweet') ?></p>
          <p class="abouthero__numberof">Views on Finsweet</p>
        </div>
        <div class="abouthero__column">
          <p class="abouthero__number"><?php the_field('top_total_active_users') ?></p>
          <p class="abouthero__numberof">Total active Users</p>
        </div>
      </div>
      <div class="abouthero__line">
        <div class="abouthero__lineleft"></div>
        <div class="abouthero__lineright"></div>
      </div>
    </section>
    
    
    <section class="aboutus">
      <div class="aboutus__column">
        <h4 class="aboutus__h4">OUR MISSION</h4>
        <h5 class="aboutus__h5">
        <?php the_field('our_mission_heading_left'); ?>
        </h5>
        <p class="aboutus__p">
        <?php the_field('our_mission_paragraph_left'); ?>
        </p>
      </div>
      <div class="aboutus__column">
        <h4 class="aboutus__h4">OUR VISION</h4>
        <h6 class="aboutus__h6">
        <?php the_field('our_mission_heading_right'); ?>
        </h6>
        <p class="aboutus__p">
        <?php the_field('our_mission_paragraph_right'); ?>
        </p>
      </div>
    </section>

    <section class="ourteam">
      <div class="ourteam__wrapper">
        <div class="ourteam__text">
          <h2 class="ourteam__h2"><?php the_field('our_team_heading_top'); ?></h2>
          <h3 class="ourteam__h3"><?php the_field('our_team_description_top'); ?></h3>
          <p class="ourteam__p"><?php the_field('our_team_paragraph_top'); ?></p>
        </div>
        <img src="<?php the_field('our_team_photo_top'); ?>">
      </div>
      <div class="ourteam__wrapper">
        <img src="<?php the_field('our_team_photo_bottom'); ?>">
        <div class="ourteam__text">
          <h2 class="ourteam__h2"><?php the_field('our_team_heading_bottom'); ?></h2>
          <h3 class="ourteam__h3"><?php the_field('our_team_description_bottom'); ?></h3>
          <p class="ourteam__p"><?php the_field('our_team_paragraph_bottom'); ?></p>
        </div>
      </div>
    </section>

    <section class="authors">
      <h2 class="authors__h2"><?php the_field('authors_heading'); ?></h2>
      <div class="authors__columns">
        <div class="authors__column">
          <img src="<?php the_field('authors_photo1'); ?>">
          <p class="authors__name"><?php the_field('authors_name1'); ?></p>
          <p class="authors__job"><?php the_field('authors_job1'); ?></p>
          <div class="authors__social">
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/facebook.png" alt="facebook logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/twitter.png" alt="twitter logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/instagram.png" alt="instagram logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/linkedin.png" alt="linkedin logo"></a>
          </div>
        </div>
        <div class="authors__column">
          <img src="<?php the_field('authors_photo2'); ?>">
          <p class="authors__name"><?php the_field('authors_name2'); ?></p>
          <p class="authors__job"><?php the_field('authors_job2'); ?></p>
          <div class="authors__social">
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/facebook.png" alt="facebook logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/twitter.png" alt="twitter logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/instagram.png" alt="instagram logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/linkedin.png" alt="linkedin logo"></a>
          </div>
        </div>
        <div class="authors__column">
          <img src="<?php the_field('authors_photo3'); ?>">
          <p class="authors__name"><?php the_field('authors_name3'); ?></p>
          <p class="authors__job"><?php the_field('authors_job3'); ?></p>
          <div class="authors__social">
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/facebook.png" alt="facebook logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/twitter.png" alt="twitter logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/instagram.png" alt="instagram logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/linkedin.png" alt="linkedin logo"></a>
          </div>
        </div>
        <div class="authors__column">
          <img src="<?php the_field('authors_photo4'); ?>">
          <p class="authors__name"><?php the_field('authors_name4'); ?></p>
          <p class="authors__job"><?php the_field('authors_job4'); ?></p>
          <div class="authors__social">
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/facebook.png" alt="facebook logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/twitter.png" alt="twitter logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/instagram.png" alt="instagram logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/linkedin.png" alt="linkedin logo"></a>
          </div>
        </div>
      </div>

      <div class="authors__columns">
        <div class="authors__column">
          <img src="<?php the_field('authors_photo5'); ?>">
          <p class="authors__name"><?php the_field('authors_name5'); ?></p>
          <p class="authors__job"><?php the_field('authors_job5'); ?></p>
          <div class="authors__social">
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/facebook.png" alt="facebook logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/twitter.png" alt="twitter logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/instagram.png" alt="instagram logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/linkedin.png" alt="linkedin logo"></a>
          </div>
        </div>
        <div class="authors__column">
          <img src="<?php the_field('authors_photo6'); ?>">
          <p class="authors__name"><?php the_field('authors_name6'); ?></p>
          <p class="authors__job"><?php the_field('authors_job6'); ?></p>
          <div class="authors__social">
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/facebook.png" alt="facebook logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/twitter.png" alt="twitter logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/instagram.png" alt="instagram logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/linkedin.png" alt="linkedin logo"></a>
          </div>
        </div>
        <div class="authors__column">
          <img src="<?php the_field('authors_photo7'); ?>">
          <p class="authors__name"><?php the_field('authors_name7'); ?></p>
          <p class="authors__job"><?php the_field('authors_job7'); ?></p>
          <div class="authors__social">
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/facebook.png" alt="facebook logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/twitter.png" alt="twitter logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/instagram.png" alt="instagram logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/linkedin.png" alt="linkedin logo"></a>
          </div>
        </div>
        <div class="authors__column">
          <img src="<?php the_field('authors_photo8'); ?>">
          <p class="authors__name"><?php the_field('authors_name8'); ?></p>
          <p class="authors__job"><?php the_field('authors_job8'); ?></p>
          <div class="authors__social">
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/facebook.png" alt="facebook logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/twitter.png" alt="twitter logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/instagram.png" alt="instagram logo"></a>
            <a href="#" class=""><img src="<?php echo get_template_directory_uri(); ?>/assets/linkedin.png" alt="linkedin logo"></a>
          </div>
        </div>
      </div>
    </section>

    <section class="subscribe">
      <h2 class="subscribe__h2">Join our team to be a part of our story</h2>
      <p class="subscribe__p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
      <a href="#" class="subscribe__button">Join Now</a>
    </section>

<?php get_footer(); ?>
