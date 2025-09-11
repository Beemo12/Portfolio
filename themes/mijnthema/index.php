<?php get_header(); ?>

<main id="main" class="site-main">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php else : ?>
        <p>Geen berichten gevonden.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
