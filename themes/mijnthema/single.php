<?php
get_header();


?>
<main>
    <section id="about" class="about-me">
        <div class="about-image">
        </div>
        <div class="about-text">
            <h1> <?php the_title();?></h1>
            <p><?php the_content();?></p>
        </div>
    </section>
<?php get_footer(); ?>
