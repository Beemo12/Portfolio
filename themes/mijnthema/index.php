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
            <p>Mijn naam is Yassine Benmeseoud ik ben een gepassioneerde software developer op de school Media College Amsterdam ik zit in het 3e jaar
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

<section id="CV" class="cv-section">
    <h2>Curriculum Vitae</h2>
    <button id="openCV">Bekijk CV</button>
</section>

<!-- Modal -->
<div id="cvModal" class="modal">
    <div class="modal-content">
        <button class="close-btn" id="closeModal">&times;</button>
        <div class="cv-content">
            <h2><strong>Yassine Benmeseoud</strong></h2>

            
            <h2><strong>Over mij</strong></h2>
            <p>Passie voor <strong>software development</strong>. Sterk analytisch, klantgericht en leergierig. Ervaring met zowel front-end als back-end ontwikkeling en affiniteit met techniek en servicegericht werk.</p>
            
            <h2><strong>Opleiding</strong></h2>
            <p><strong>2023 – heden | Media College Amsterdam</strong><br>
            Software Development (3e jaar)</p>
            <ul>
                <li>Ervaring met front-end & back-end</li>
                <li>Talen & tools: PHP, SQL, HTML, CSS, JavaScript, SCSS, Sass, Docker</li>
            </ul>
            
            <h2><strong>Werkervaring</strong></h2>
            <p><strong>2025/6 – 2025/9 | Burgers n' Shake</strong> – Courier</p>
            <ul>
                <li>Behalen van tijdsdoelen bij bezorgingen</li>
                <li>Klantvriendelijke service</li>
            </ul>
            
            <p><strong>2025/1 – 2025/3 | The Health House</strong> – Winkelmedewerker</p>
            <ul>
                <li>Systematisch behalen van verkooptargets</li>
                <li>Adviseren van klanten over training en voedingssupplementen</li>
                <li>Sterke klantgerichtheid en flexibiliteit</li>
            </ul>
            
            <p><strong>2020/4 – 2021/5 | Albert Heijn XL</strong> – Winkelmedewerker</p>
            <ul>
                <li>Vakkenvullen en spiegelen</li>
                <li>Klantvriendelijkheid</li>
            </ul>
            
            <h2><strong>Talen</strong></h2>
            <ul>
                <li>Nederlands – C2</li>
                <li>Engels – C2</li>
                <li>Arabisch – B1</li>
            </ul>
            
            <h2><strong>Vaardigheden</strong></h2>
            <ul>
                <li>Programmeren: PHP, SQL, JavaScript, CSS, HTML, SCSS, Docker</li>
                <li>Ervaring met front-end én back-end ontwikkeling</li>
                <li>Klantgericht, resultaatgericht en technisch inzicht</li>
            </ul>
        </div>
    </div>
</div>

<script>
// Modal functionaliteit
const modal = document.getElementById('cvModal');
const openBtn = document.getElementById('openCV');
const closeBtn = document.getElementById('closeModal');

openBtn.addEventListener('click', function() {
    modal.style.display = 'flex';
    setTimeout(() => {
        modal.classList.add('show');
    }, 10);
});

closeBtn.addEventListener('click', function() {
    modal.classList.remove('show');
    setTimeout(() => {
        modal.style.display = 'none';
    }, 300);
});

// Sluit modal bij klikken buiten de content
modal.addEventListener('click', function(e) {
    if (e.target === modal) {
        modal.classList.remove('show');
        setTimeout(() => {
            modal.style.display = 'none';
        }, 300);
    }
});
    
</script>

<?php get_footer(); ?>