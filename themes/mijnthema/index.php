<?php
get_header();
?>

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
<section id="CV" class="cv-section" style="text-align:center; padding:60px 20px;">
    <h2>Curriculum Vitae</h2>
    <button id="openCV" style="padding:12px 24px; background:white; color:black; border:none; border-radius:8px; cursor:pointer; font-size:16px;">
        Bekijk CV
    </button>
</section>

<div id="cvModal" class="cv-modal" style="display:none; position:fixed; z-index:2000; left:0; top:0; width:100%; height:100%; overflow:auto; background:rgba(0,0,0,0.6);">
    <div style="background:#fff; margin:8% auto; padding:30px; border-radius:15px; width:80%; max-width:800px; position:relative; box-shadow:0 10px 40px rgba(0,0,0,0.2);">
        <span id="closeCV" style="position:absolute; top:15px; right:20px; font-size:28px; font-weight:bold; color:#2563eb; cursor:pointer;">&times;</span>
        <h2 style="margin-bottom:20px; color:#2563eb;">Curriculum Vitae</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim. Curabitur vitae velit in neque dictum luctus a ut diam. Vivamus volutpat, magna nec ullamcorper malesuada, risus nisl fermentum arcu, in facilisis risus nibh eu justo.</p>
        <p>Phasellus vel justo non magna malesuada vehicula. Ut finibus sapien a malesuada aliquam. Donec sagittis justo ac mi egestas, nec ullamcorper erat ultrices. Cras congue velit eu felis convallis, vel sollicitudin enim mattis.</p>
        <p>Praesent dignissim, augue in sodales sodales, magna elit maximus leo, at tristique sapien urna non risus. Sed a cursus elit. Aliquam in enim risus. Duis euismod enim id orci fermentum tincidunt.</p>
    </div>
</div>

<script>
document.getElementById("openCV").addEventListener("click", function() {
    document.getElementById("cvModal").style.display = "block";
});
document.getElementById("closeCV").addEventListener("click", function() {
    document.getElementById("cvModal").style.display = "none";
});
window.addEventListener("click", function(e) {
    if (e.target == document.getElementById("cvModal")) {
        document.getElementById("cvModal").style.display = "none";
    }
});
</script>

<?php get_footer(); ?>
