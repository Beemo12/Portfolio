<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <h1><?php bloginfo('name'); ?></h1>
    
    <nav class="nav-container">
        <div class="dropdown">
            <button class="dropdown-btn">Projects ▼</button>
            <div class="dropdown-content">
                <a href="<?php echo home_url('/projects'); ?>">View All Projects</a>
                <a href="<?php echo home_url('/web-development'); ?>">Web Development</a>
                <a href="<?php echo home_url('/mobile-apps'); ?>">Mobile Apps</a>
                <a href="<?php echo home_url('/design'); ?>">Design</a>
            </div>
        </div>
    </nav>
</header>