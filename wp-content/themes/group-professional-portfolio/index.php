<?php get_header(); ?>
<main class="gpp-page">
  <div class="gpp-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="gpp-profile">
          <h1><?php the_title(); ?></h1>
          <div class="gpp-profile-content"><?php the_content(); ?></div>
        </article>
      <?php endwhile;
      the_posts_pagination();
    else : ?>
      <div class="gpp-empty">Nothing to display yet.</div>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>