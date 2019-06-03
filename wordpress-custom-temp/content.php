<!-- This page is called in index.php and the loop that exists
within index.php, calls this page within the loop to present content of each post -->




<div class="row">
  <div class="col-sm-6 center-image">
<?php if ( has_post_thumbnail() ) :
      the_post_thumbnail( 'medium', array( 'class' => 'bordered-thumb' ) );
    endif;
?>
</div>
<div class="col-sm-6">
<h1> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<p class=""><?php the_date(); ?>


<?php the_excerpt(); ?>
<img class="" width="15" height="15" src="<?php echo get_template_directory_uri() . '/images/cropped-HAlogo.png'; ?>" />
by <a href="#"><?php the_author(); ?></a></p>
</div>
</div>


<hr />
