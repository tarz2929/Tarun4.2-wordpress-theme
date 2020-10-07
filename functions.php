<?php

/**
 * Register a navigation menu.
 */
register_nav_menus( // We must register nav locations if we want the admin to be able to add navs to the site.
  array( // An "ID" for the menu, and the text that appears to admin.
    'main_menu'   => 'Main Menu (Header)',
    'footer_menu' => 'Footer Menu',
  )
);

/**
 * Enqueue theme stylesheets and scripts.
 */
add_action( 'wp_enqueue_scripts', function ()
{

  

} );
