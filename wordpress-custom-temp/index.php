<?php get_header(); ?>

<!-- query the top news over here -->
<?php
  $topNews = array();
      $args = array( 'numberposts' => '3' );
      $recent_posts = wp_get_recent_posts( $args );
      foreach( $recent_posts as $recent ){

             echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
             //echo get_the_post_thumbnail($recent['ID'], 'thumbnail');
             //echo get_the_post_thumbnail_url( get_the_ID(),'full');
             echo '<img class="headerImages" src="' . get_the_post_thumbnail_url( $recent["ID"],'full'). '">';
      }
      wp_reset_query();
  ?>

<br />
<div class="row">
  <div class="col-sm-12">
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <!-- article 1 -->
      <img class="alignleft" src="<?php echo get_template_directory_uri() . '/images/header-image.png'; ?>" />
      <?php $post_id = 1;
          $queried_post = get_post($post_id);
          $title = $queried_post->post_title;
          echo $title;
          //echo $queried_post->post_content;?>
    </div>
    <div class="carousel-item">
      <!-- article 2 -->
      <img class="alignleft" src="<?php echo get_template_directory_uri() . '/images/header-image-b.png'; ?>" />
      <?php $post_id = 2;
          $queried_post = get_post($post_id);
          $title = $queried_post->post_title;
          echo $title;
          //echo $queried_post->post_content;?>
    </div>
    <div class="carousel-item">
      <!-- article 3 -->
      <img class="alignleft" src="<?php echo get_template_directory_uri() . '/images/header-image-c.png'; ?>" />
      <?php
        	$args = array( 'numberposts' => '3' );
        	$recent_posts = wp_get_recent_posts( $args );
        	foreach( $recent_posts as $recent ){

          		   echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
                 echo get_the_post_thumbnail($recent['ID'], 'thumbnail');
                


        	}
        	wp_reset_query();
        ?>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


</div>

<hr />

  <div class="row">
    <div class="col-sm-9">
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'content', get_post_format() ); ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <div class="col-sm-3 sideBar">
      <?php get_sidebar(); ?>
    </div>


</div>
<?php get_footer(); ?>
