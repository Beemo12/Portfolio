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
        <a href="<?php echo home_url(); ?>" class="logo">Portfolio</a>
        <div class="projects-menu">
            <span class="projects-title">Projects ▼</span>
            <div class="projects-dropdown">
                <a href="<?php echo home_url('/projects'); ?>">Bekijk alle projecten</a>
            </div>
        </div>
    </div>
</header>

<main>
    <section class="about-me">
        <div class="about-image">
            <img src="<?php echo get_template_directory_uri(); ?>/image.png" alt="Yassine Benmeseoud">
        </div>
        <div class="about-text">
            <h1>Yassine Benmeseoud</h1>
            <p>Full Stack Developer - Media College Amsterdam - 3e jaar</p>
        </div>
    </section>

    <section class="skills">
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

    <section class="projects">
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

<?php wp_footer(); ?>

<script>
let lastScroll = 0;
const header = document.querySelector('.main-header');
document.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;
    if (currentScroll > lastScroll && currentScroll > 100) {
        header.style.top = '-100px'; // hide
    } else {
        header.style.top = '0'; // show
    }
    lastScroll = currentScroll;
});

const projectsMenu = document.querySelector('.projects-menu');
projectsMenu.addEventListener('mouseenter', () => {
    projectsMenu.querySelector('.projects-dropdown').style.display = 'block';
});
projectsMenu.addEventListener('mouseleave', () => {
    projectsMenu.querySelector('.projects-dropdown').style.display = 'none';
});
</script>

</body>
</html>
