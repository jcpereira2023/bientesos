<?php 

function ponerestilos()  
{ 

    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );


	
}
add_action('wp_enqueue_scripts', 'ponerestilos');