<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div class="firstcontainer">
  <nav role="navigation">
    <div class="nav-container">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo( 'name' ); ?>"/>
      </a>

      <?php wp_nav_menu( array( 'sideNav' => 'Side Nav' ) ); ?>
    </div>

  </nav>
</div>
