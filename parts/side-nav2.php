<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<nav role="navigation">
    <ul class="side-nav-<?php echo apply_filters( 'filter_mobile_nav_position', 'mobile_nav_position' ); ?>">
        <li class="name">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sk-logo-100x100px.png" alt="<?php bloginfo( 'name' ); ?>" /></a>
        </li>
          <?php wp_nav_menu( array( 'sideNav' => 'Side Nav' ) ); ?>
    </ul>

</nav>
