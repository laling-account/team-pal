<?php
/**
 * Individual member portfolio header.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$member_name = get_the_title();
?>
<header class="member-header">
  <div class="member-header-inner">
    <a class="member-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <span class="member-brand-mark">TP</span>
      <span>MY <strong>PORTFOLIO</strong></span>
    </a>
    <nav class="member-nav" aria-label="Member portfolio navigation">
      <a href="#member-home">Home</a>
      <a href="#member-about">About</a>
      <a href="#member-projects">My Work</a>
      <a href="#member-contact">Contact</a>
      <a class="member-nav-home" href="<?php echo esc_url( home_url( '/#team' ) ); ?>">All Members</a>
    </nav>
    <button class="member-menu-toggle" type="button" aria-expanded="false" aria-label="Open navigation">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>
