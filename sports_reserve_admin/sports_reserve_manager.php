<?php
/**
* Plugin Name: IGSL Sports Reservation Admin Menu
* Description: For Admin and manager menu
 */


function raprap_admin_menu()
{
   add_menu_page('Forms','Services Reservations','manage_options','raprap-admin-menu','raprap_admin_menu_main','dashicons-coffee', 4);
   add_submenu_page('raprap-admin-menu','Forms','Services Reservations','manage_options','raprap-admin-menu', 'raprap_admin_menu_main');
   add_submenu_page('raprap-admin-menu','Sports Submissions','Responses','manage_options','raprap-admin-menu-sub-archive', 'raprap_admin_menu_responses');
 
  
}

add_action('admin_menu','raprap_admin_menu');

function raprap_admin_menu_main()
{
    echo '<div class="wrap"><h2>Form Submissions</h2>Welcome to the form submission';
}
function raprap_admin_menu_responses(){

   //  echo '<div class="wrap"><h2>Form Submissions</h2>Welcome to the form submenu';

   //  global $wpdb, current_user;

      require_once( $template = plugin_dir_path(__FILE__).'/templates/sports_template.php' );
      
      // echo print_r($template);
      // wp_register_script( 'custom-js', plugins_url( '/js/scripts.js' , __FILE__ ) );
      wp_enqueue_script( 'scripts', plugin_dir_url(__FILE__).'/templates/js/scripts.js' );
      wp_enqueue_style( 'styles', plugin_dir_url(__FILE__).'/templates/css/style.css' );


      return $template;

}




?>