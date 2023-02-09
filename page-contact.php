<?php get_header(); ?>

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

    <?php get_footer(); ?>