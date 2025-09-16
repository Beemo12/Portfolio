<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
  <h1><a href="<?php echo home_url(); ?>" style="color:#fff;text-decoration:none;">
    Portfolio Van Yassine Benmeseoud
  </a></h1>
  <nav>
    <a href="<?php echo home_url(); ?>">Projects</a>
    <a href="<?php echo site_url('/about'); ?>">About</a>
  </nav>
</header>

<main>
