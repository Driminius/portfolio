<?php get_header(); ?>

<div class="row">
  <div class="col-sm-8">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>

  <div class="col-sm-4">

  </div>


</div>
<?php get_footer(); ?>
