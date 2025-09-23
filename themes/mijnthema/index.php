<!-- index.php -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="main-header">
    <div class="header-content">
        <a href="<?php echo home_url(); ?>" class="logo">Portfolio Van Yassine</a>
        <nav class="header-nav">
            <a href="#about" class="nav-link">About</a>
            <a href="#skills" class="nav-link">Skills</a>
            <a href="#projects" class="nav-link">Projects</a>           
             <a href="#CV" class="nav-link">CV</a>

        </nav>
    </div>
</header>

<main>
    <section id="about" class="about-me">
        <div class="about-image">
            <img src="<?php echo get_template_directory_uri(); ?>/skills/css.png" alt="Yassine Benmeseoud">
        </div>
        <div class="about-text">
            <h1>Yassine Benmeseoud</h1>
            <p>Full Stack Developer - Media College Amsterdam - 3e jaar</p>
            <p>Mijn naam is Yassine Benmeseoud ik ben een gepassioneerde software developer op de school Media College Amsterdam ik zit in de 3e jaar
                ik beheers zelf verschilende programeer talen zoals: HTML, CSS, JS, PHP en nog meer.
            </p>
        </div>
    </section>

    <section id="skills" class="skills">
        <h2>Mijn Vaardigheden</h2>
        <div class="skills-grid">
            <div class="skill-item"><img src="<?php echo get_template_directory_uri(); ?>/skills/docker.png" alt="Docker"></div>
            <div class="skill-item"><img src="<?php echo get_template_directory_uri(); ?>/skills/css.png" alt="CSS"></div>
            <div class="skill-item"><img src="<?php echo get_template_directory_uri(); ?>/skills/html.png" alt="HTML"></div>
            <div class="skill-item"><img src="<?php echo get_template_directory_uri(); ?>/skills/php.png" alt="PHP"></div>
            <div class="skill-item"><img src="<?php echo get_template_directory_uri(); ?>/skills/js.png" alt="JavaScript"></div>
            <div class="skill-item"><img src="<?php echo get_template_directory_uri(); ?>/skills/mysql.png" alt="MySQL"></div>
        </div>
    </section>

    <section id="projects" class="projects">
        <h2>Mijn Projecten</h2>
        <div class="projects-grid">
            <?php
            $args = [
                'post_type'      => 'post',
                'orderby'        => 'date',
                'post_status'    => 'publish',
                'order'          => 'DESC',
                'posts_per_page' => 6,
            ];
            $projects = new WP_Query($args);
            if ($projects->have_posts()) :
                while ($projects->have_posts()) : $projects->the_post(); ?>
                    <div class="project-card">
                        <?php if(has_post_thumbnail()) the_post_thumbnail('medium'); ?>
                        <h3><?php the_title(); ?></h3>
                        <a href="<?php the_permalink(); ?>">Bekijk project →</a>
                    </div>
                <?php endwhile; wp_reset_postdata();
            endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
