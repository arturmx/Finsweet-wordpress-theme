<?php
  $page_object = get_queried_object();
  $args = array(  
    'post_type' => 'post',
    'post_status' => 'publish',
    'paged' => get_query_var( 'paged' ),
    'posts_per_page' => 5,
  );
  
  $query = new WP_Query( $args ); 
?>

<?php get_header(); ?>

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
      <?php while ($query->have_posts()) { ?>
        <?php $query->the_post(); ?>
        <a href="<?php echo get_the_permalink(); ?>" class="allposts__row">
          <img class="allposts__photo" src="<?php the_field('post_photo') ?>">
              <div class="allposts__text">
                  <h2 class ="allposts__h2"><?php echo get_the_category()[0]->name ?></h2>
                  <h3 class ="allposts__h3"><?php the_title(); ?></h3>
                  <p class ="allposts__p"><?php the_field('post_paragraph') ?></p>
              </div>
        </a>

      <?php } wp_reset_postdata();?>
      <?php pagination_bar( $query ); ?>

    </section>
  
    <section class="allcat">
      <h2 class="allcat__h2">All Categories</h2>
      <div class="allcat__columns">
        <a class="allcat__column" href="#">
          <img class="allcat__img" src="<?php echo get_template_directory_uri(); ?>/assets/business.png"
          alt="2 houses symbol">
          <h3 class="allcat__h3">Business</h3>
          <p class="allcat__p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
        </a>
        <a class="allcat__column" href="#">
          <img class="allcat__img" src="<?php echo get_template_directory_uri(); ?>/assets/startup.png"
          alt="rocket symbol">
          <h3 class="allcat__h3">Startup</h3>
          <p class="allcat__p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
        </a>
        <a class="allcat__column" href="#">
          <img class="allcat__img" src="<?php echo get_template_directory_uri(); ?>/assets/economy.png"
          alt="chart symbol">
          <h3 class="allcat__h3">Economy</h3>
          <p class="allcat__p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
        </a>
        <a class="allcat__column" href="#">
          <img class="allcat__img" src="<?php echo get_template_directory_uri(); ?>/assets/technology.png"
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

    <?php get_footer(); ?>
