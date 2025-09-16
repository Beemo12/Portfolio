<?php
function portfolio_enqueue_styles() {
    wp_enqueue_style('portfolio-style', get_stylesheet_uri());
}add_action('wp_enqueue_scripts', 'portfolio_enqueue_styles');
function portfolio_cleanup_defaults() {
    $hello = get_page_by_title('Hello World', OBJECT, 'post');
    if ($hello) wp_delete_post($hello->ID, true);
    $sample = get_page_by_title('Sample Page');
    if ($sample) wp_delete_post($sample->ID, true);
}
add_action('after_setup_theme', 'portfolio_cleanup_defaults');
function github_profile_widget() {
    $username = 'Beemo12'; 
    $url = "https://api.github.com/users/$username";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'WordPress'); 
    $response = curl_exec($ch);
    curl_close($ch);
    $data = json_decode($response, true);
    if ($data && isset($data['avatar_url'])) {
        echo '<div class="github-profile">';
        echo '<a href="' . esc_url($data['html_url']) . '" target="_blank">';
        echo '<img src="' . esc_url($data['avatar_url']) . '" alt="GitHub Profile" style="width:120px; border-radius:50%;">';
        echo '</a>';
        echo '<p style="margin-top:10px; font-weight:bold;">' . esc_html($data['login']) . '</p>';
        echo '</div>';
    } else {
        echo '<p>GitHub profiel kon niet geladen worden.</p>';
    }
}
function register_github_widget() {
    register_sidebar(array(
        'name' => 'GitHub Profile Sidebar',
        'id' => 'github-profile',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
    ));
}
add_action('widgets_init', 'register_github_widget');
?>
