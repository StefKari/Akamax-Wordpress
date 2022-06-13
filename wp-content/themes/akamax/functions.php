<?php
function insert_jquery()
{
    wp_enqueue_script('jquery', false, array(), false, false);
}
add_filter('wp_enqueue_scripts', 'insert_jquery', 1);



add_theme_support('post-thumbnails');


function custom_excerpt_length($length)
{
    return 25;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);


function akamax_register_nav_menu()
{
    register_nav_menus(array(
        'main-menu' => __('Main menu', 'text_domain')
    ));
}
add_action('after_setup_theme', 'akamax_register_nav_menu', 0);



add_filter("gform_validation_message", "gwp_change_message", 10, 2);
function gwp_change_message($message, $form)
{
    return '
    <script>
    swal({
        title: "Greška",
        text: "Došlo je do greške pri popunjavanju prijave. Molimo Vas da popunite sva označena obavezna polja. Hvala!",
        icon: "error",
        buttons: true,
        dangerMode: true,
      });
      </script>
';
}



//<script>alert("Došlo je do greške pri popunjavanju prijave. Molimo Vas da popunite sva označena obavezna polja. Hvala!");</script>
