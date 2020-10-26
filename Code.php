This code is to be added in THEME EDITOR > FUNCTIONS.PHP

Make sure you have a back up of your wordpress site first.


This code gives flexibility for developers to manually change the texts of their Login or Logout buttons. It has the functionality to add your own FONTAWESOME icons as well. Finally, you may add a redirect link and all of these functionalities without adding any plugin!




add_filter( 'wp_nav_menu_items', 'my_account_loginout_link', 10, 2 );

function my_account_loginout_link( $items, $args ) {
if (is_user_logged_in() && $args->theme_location == 'social-menu') { 
$items .= '<li class="right-menu"><a href="'. wp_logout_url( get_permalink( wc_get_page_id( 'YOUR LINK HERE' ) ) ) .'"><i class="fas fa-sign-out-alt"></i> &nbsp;Cerrar sesión</a></li>';
}
elseif (!is_user_logged_in() && $args->theme_location == 'social-menu') {
$items .= '<li class="right-menu lrm-login"><a href="' . get_permalink( wc_get_page_id( 'myaccount' ) ) . '"><i class="fas fa-user"></i>&nbsp; INICIAR SESIÓN</a></li>';
}
return $items;
}

