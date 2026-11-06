<?php get_header(); ?>
<main class="gpp-section">
  <div class="gpp-container">
    <div class="gpp-section-heading"><h2>Our Team Members</h2><p>Explore each individual portfolio.</p></div>
    <?php if ( have_posts() ) : ?><div class="gpp-grid">
      <?php while ( have_posts() ) : the_post(); ?>
        <a class="gpp-card" href="<?php the_permalink(); ?>">
          <div class="gpp-avatar"><?php echo esc_html( strtoupper( mb_substr( get_the_title(), 0, 1 ) ) ); ?></div>
          <h3><?php the_title(); ?></h3>
          <div class="gpp-role"><?php echo esc_html( gpp_get_member_role( get_the_ID() ) ); ?></div>
          <p><?php echo esc_html( get_the_excerpt() ); ?></p>
          <div class="gpp-card-link">View portfolio <span>→</span></div>
        </a>
      <?php endwhile; ?>
    </div><?php the_posts_pagination(); ?><?php else : ?><div class="gpp-empty">No member profiles have been added yet.</div><?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>
