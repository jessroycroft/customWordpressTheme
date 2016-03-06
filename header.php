<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=News+Cycle|Neuton:400,300,400italic' rel='stylesheet' type='text/css'>
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="titleCutout">
    <div class="wrapper">
      <h1>
        <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?>
        </a>
      </h1>
      <p><?php bloginfo('description'); ?></p>
    </div>

  </div> <!-- /.titleCutout -->
</header><!--/.header-->
  <div class="headerNav">
      <nav class="primary">
        <?php wp_nav_menu( array(
          'theme_location' => 'primary'
        )); ?>
      </nav>
      <nav class="social">
        <?php wp_nav_menu( array(
          'theme_location' => 'social'
        )); ?>
      </nav>
      <nav class="search">
        <?php get_search_form() ?>
      </nav>
    </div>

