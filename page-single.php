<?php get_header(); ?>

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

    <?php get_footer(); ?>