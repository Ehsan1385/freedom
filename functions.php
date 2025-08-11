<?php
function hodcode_enqueue_styles() {
  wp_enqueue_style(
    'hodcode-style', // Handle name
    get_stylesheet_uri(), // This gets style.css in the root of the theme
    
  );
  wp_enqueue_script(
    'tailwind', // Handle name
    "https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4", // This gets style.css in the root of the theme
    
  );
}
add_action('wp_enqueue_scripts', 'hodcode_enqueue_styles');

add_action("init",function(){
add_theme_support("custom-icon");
});

add_action("after_setup_theme",function(){
    register_nav_menus([
    "header" => "Heder Menu"
]);
});