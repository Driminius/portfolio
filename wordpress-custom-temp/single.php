<!-- This is called for each post, creates a new single post -->

<?php get_header(); ?>

<div class="row">
  <div class="col-sm-12">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content-single', get_post_format() ); ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>

</div>
<?php get_footer(); ?>
