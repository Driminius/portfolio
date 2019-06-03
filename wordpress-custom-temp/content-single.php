




<!-- <?php //if ( has_post_thumbnail() ) :
    //  the_post_thumbnail( 'large', array( 'class' => 'bordered-thumb' ) );
    //endif;
//?>
-->

<p class=""><?php the_date(); ?></p>
<h1> <?php the_title(); ?> </h1>
<hr />
<img class="" width="15" height="15" src="<?php echo get_template_directory_uri() . '/images/cropped-HAlogo.jpg'; ?>" />
by <a href="#"><?php the_author(); ?></a></p>
<hr />
<div class="row">
  <div class="col-sm-9">
    <?php the_content(); ?>
  </div>
  <div class="col-sm-3">
    <?php get_sidebar(); ?>
  </div>


</div>
