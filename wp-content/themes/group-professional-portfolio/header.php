<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>

  <!-- =====================================
     MAIN WEBSITE HEADER
====================================== -->

  <header class="gpp-header">

    <div class="gpp-container gpp-header-inner">

      <!-- LOGO / BRAND -->

      <a class="gpp-brand" href="<?php echo esc_url(home_url('/')); ?>">
        TEAM <span>PAL</span>
      </a>

      <!-- NAVIGATION -->

      <nav class="gpp-nav" id="gpp-navigation"
        aria-label="<?php esc_attr_e('Main navigation', 'group-professional-portfolio'); ?>">

        <a href="<?php echo esc_url(home_url('/')); ?>">
          Home
        </a>

        <a href="<?php echo esc_url(home_url('/#about')); ?>">
          About
        </a>

        <a href="<?php echo esc_url(home_url('/#team')); ?>">
          Team
        </a>

        <a href="<?php echo esc_url(home_url('/#expertise')); ?>">
          Expertise
        </a>

        <a href="<?php echo esc_url(home_url('/#projects')); ?>">
          Projects
        </a>

        <a href="<?php echo esc_url(home_url('/#contact')); ?>">
          Contact
        </a>

      </nav>

      <!-- EXPLORE MEMBERS BUTTON -->

      <a class="gpp-header-cta"
        href="<?php echo esc_url(home_url('/#team')); ?>">
        Explore Members
        <span>↗</span>
      </a>

      <!-- MOBILE MENU BUTTON -->

      <button class="gpp-menu-toggle"
        type="button"
        aria-label="Open navigation menu"
        aria-expanded="false"
        aria-controls="gpp-navigation">

        <span></span>
        <span></span>
        <span></span>

      </button>

    </div>

  </header>