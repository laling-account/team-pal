<?php

/**
 * Individual Member Portfolio Page
 */

if (!defined('ABSPATH')) {
  exit;
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class('member-individual-page'); ?>>

  <?php wp_body_open(); ?>

  <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

      <?php
      $member_slug = get_post_field(
        'post_name',
        get_the_ID()
      );

      $allowed_members = array(
        'member-one',
        'member-two',
        'member-three',
        'member-four'
      );
      ?>

      <?php if (in_array($member_slug, $allowed_members, true)) : ?>

        <div class="member-portfolio-shell">

          <?php
          // MEMBER HEADER
          $header_file = 'template-parts/' . $member_slug . '/header.php';

          if (locate_template($header_file)) {
            get_template_part(
              'template-parts/' . $member_slug . '/header'
            );
          } else {
            echo '<p>Member header file not found.</p>';
          }

          // MEMBER PORTFOLIO
          $portfolio_file = 'template-parts/' . $member_slug . '/portfolio.php';

          if (locate_template($portfolio_file)) {
            get_template_part(
              'template-parts/' . $member_slug . '/portfolio'
            );
          } else {
            echo '<p>Member portfolio file not found.</p>';
          }

          // MEMBER FOOTER
          $footer_file = 'template-parts/' . $member_slug . '/footer.php';

          if (locate_template($footer_file)) {
            get_template_part(
              'template-parts/' . $member_slug . '/footer'
            );
          } else {
            echo '<p>Member footer file not found.</p>';
          }
          ?>

        </div>

      <?php else : ?>

        <main class="member-not-found">
          <h1>Portfolio Not Found</h1>
          <p>The requested member portfolio is not configured yet.</p>
          <a href="<?php echo esc_url(home_url('/')); ?>">
            Return to Homepage
          </a>
        </main>

      <?php endif; ?>

    <?php endwhile; ?>

  <?php else : ?>

    <main class="member-not-found">
      <h1>Portfolio Not Found</h1>
      <p>The requested portfolio does not exist.</p>
      <a href="<?php echo esc_url(home_url('/')); ?>">
        Return to Homepage
      </a>
    </main>

  <?php endif; ?>

  <?php wp_footer(); ?>

</body>

</html>