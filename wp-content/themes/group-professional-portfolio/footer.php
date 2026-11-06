<?php

/**
 * Main website footer.
 */
?>

<footer class="gpp-footer">

  <div class="gpp-container">

    <!-- =====================================
             FOOTER MAIN CONTENT
        ====================================== -->

    <div class="gpp-footer-main">


      <!-- ABOUT OUR GROUP -->

      <div class="gpp-footer-column gpp-footer-about">

        <a href="<?php echo esc_url(home_url('/')); ?>"
          class="gpp-footer-brand">
          TEAM <span>PAL</span>
        </a>

        <p>
          We are a team of Bachelor of Science in Information
          Technology students passionate about learning,
          innovation, and creating technology solutions.
        </p>

        <span class="gpp-footer-course">
          BS INFORMATION TECHNOLOGY
        </span>

      </div>


      <!-- QUICK LINKS -->

      <div class="gpp-footer-column">

        <h3>Quick Links</h3>

        <ul>
          <li>
            <a href="<?php echo esc_url(home_url('/')); ?>">
              Home
            </a>
          </li>

          <li>
            <a href="<?php echo esc_url(home_url('/#about')); ?>">
              About Us
            </a>
          </li>

          <li>
            <a href="<?php echo esc_url(home_url('/#team')); ?>">
              Our Team
            </a>
          </li>

          <li>
            <a href="<?php echo esc_url(home_url('/#expertise')); ?>">
              Expertise
            </a>
          </li>

          <li>
            <a href="<?php echo esc_url(home_url('/#projects')); ?>">
              Projects
            </a>
          </li>

          <li>
            <a href="<?php echo esc_url(home_url('/#contact')); ?>">
              Contact
            </a>
          </li>
        </ul>

      </div>


      <!-- OUR MEMBERS -->

      <div class="gpp-footer-column">

        <h3>Our Members</h3>

        <ul>

          <?php
          $footer_members = new WP_Query(array(
            'post_type'      => 'portfolio_member',
            'post_status'    => 'publish',
            'posts_per_page' => 4,
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
          ));
          ?>

          <?php if ($footer_members->have_posts()) : ?>

            <?php while ($footer_members->have_posts()) :
              $footer_members->the_post(); ?>

              <li>
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </li>

            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

          <?php else : ?>

            <li>
              <span>Member profiles coming soon</span>
            </li>

          <?php endif; ?>

        </ul>

      </div>


      <!-- CONNECT WITH US -->

      <div class="gpp-footer-column gpp-footer-connect">

        <h3>Connect With Us</h3>

        <p>
          Have questions, ideas, or collaboration opportunities?
          Feel free to reach out to our group.
        </p>

        <ul class="gpp-footer-contact-list">

          <li>
            <span><i class="fas fa-location-dot"></i> Location</span>
            <p>Philippines</p>
          </li>

        </ul>

        <div class="gpp-footer-socials">

          <a href="https://www.facebook.com/"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="Facebook">
            <i class="fab fa-facebook-f"></i>
          </a>

          <a href="https://www.linkedin.com/"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="LinkedIn">
            <i class="fab fa-linkedin-in"></i>
          </a>

          <a href="https://github.com/"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="GitHub">
            <i class="fab fa-github"></i>
          </a>

        </div>

      </div>

    </div>


    <!-- =====================================
             FOOTER BOTTOM
        ====================================== -->

    <div class="gpp-footer-bottom">

      <p>
        &copy; <?php echo esc_html(date_i18n('Y')); ?>

        <?php bloginfo('name'); ?>.

        All Rights Reserved.
      </p>

      <p class="gpp-footer-credit">
        Designed and Developed by TEAM PAL
      </p>

    </div>

  </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>