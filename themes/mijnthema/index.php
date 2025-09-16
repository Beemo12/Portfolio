<?php get_header(); ?>

<?php if ( is_front_page() ) : ?>
    <div class="github-widget">
        <?php github_profile_widget(); ?>
    </div>
<?php endif; ?>

<main>
    <div class="projects">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="project">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main>

<div class="go-to-projects">
  <a href="<?php echo home_url(); ?>">Go to Projects</a>
</div>

<?php get_footer(); ?>
