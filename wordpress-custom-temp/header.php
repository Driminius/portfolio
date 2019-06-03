<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="https://fonts.googleapis.com/css?family=Lato|Oswald" rel="stylesheet">

      <?php wp_head(); ?>
  </head>

<!-- using custom background gui wordpress interface with body_class -->
  <body <?php body_class(); ?>>
<!-- navigation bar -->
    <nav class="navbar sticky-top header-color">
      <!-- initial format <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light header-color"> -->

      <div class="container container-header">
        <?php echo get_the_date( 'l F j, Y' ); ?>
  <a class="navbar-brand" href="#"><img class="" width="50" height="50" src="<?php echo get_template_directory_uri() . '/images/cropped-HAlogo.png'; ?>" /></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</div>
</nav>
<!-- end of navigation -->



<!-- begin experiment -->

<div class="container-header">
  <div class="heroesheader">
    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
      <h1 class=""><a href="<?php echo get_bloginfo( 'wpurl' ); ?>">
        <?php echo get_bloginfo( 'name' ); ?></a>
      </h1>
      <p class=" "><?php echo get_bloginfo( 'description' ); ?></p>
    </div>
      <div class="col-sm-1"></div>
    </div>

      <nav class="navbar navbar-expand-lg  header-color">
        <!-- initial format <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light header-color"> -->
        <div class="container container-header">
    <a class="navbar-brand" href="#"><img class="" width="45" height="45" src="<?php echo get_template_directory_uri() . '/images/cropped-HAlogo.png'; ?>" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">NEWS <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">REVIEW</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">VLOGS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">READING THE COMMENTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">CONTACT US</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown link
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
  </nav>

  </div>



</div>

<!-- end of experiment -->


  <div class="container content-background container-box-shadow">
