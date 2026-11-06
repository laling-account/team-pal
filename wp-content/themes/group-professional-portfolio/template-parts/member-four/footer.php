<?php
/**
 * Individual member portfolio footer.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$member_data = gpp_get_member_data( 'member-four' );

if ( ! $member_data ) {
    return;
}

$member_name = $member_data['name'];
?>
<footer class="member-footer" id="member-contact">
  <div class="member-footer-inner">

    <div>
      <p class="member-footer-kicker">LET'S CONNECT</p>
      <h2>Thanks for visiting<br><span>my portfolio.</span></h2>
    </div>

    <div class="member-footer-links">
      <a href="<?php echo esc_url( home_url( '/#team' ) ); ?>">← Back to Group Portfolio</a>
      <span>© <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php echo esc_html( $member_name ); ?></span>
    </div>
  </div>
</footer>
