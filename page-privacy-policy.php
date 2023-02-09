<?php get_header(); ?>

    <section class="privacy">
      <div class="privacy__top">
        <h1 class="privacy__h1"><?php the_field('heading'); ?></h1>
        <p class="privacy__update">Last Updated on <?php the_field('updated_date'); ?></p>
      </div>
      <div class="privacy__wrapper">
        <div class="privacy__content"><?php the_field('content'); ?></div>
        <div class="privacy__space"></div>
      </div>
    </section>

    <?php get_footer(); ?>
