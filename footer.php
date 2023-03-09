<footer class="footer">
      <div class="footer__wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/Logo.png" alt="company logo" />
        <nav class="footer__nav">
          <a href="/front-page">Home</a>
          <a href="/blog">Blog</a>
          <a href="/about-us">About Us</a>
          <a href="/contact">Contact us</a>
          <a href="/privacy-policy">Privacy policy</a>
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
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/facebook1.png"
             alt="facebook logo" /></a>
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/twitter1.png"
            alt="twitter logo" /></a>
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/instagram1.png"
            alt="instagram logo" /></a>
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/linkedin1.png"
            alt="linkedin logo" /></a>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>