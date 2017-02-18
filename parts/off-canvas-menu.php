<?php
/**
 * Template part for off canvas menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div class="show-for-small-only" >

  <nav class="tab-bar">
    <section class=" <?php echo apply_filters( 'filter_mobile_nav_position', 'mobile_nav_position' ); ?>-small">
      <a class="<?php echo apply_filters( 'filter_mobile_nav_position', 'mobile_nav_position' ); ?>-off-canvas-toggle menu-icon" href="#"><span></span></a>
    </section>
    <section class="middle tab-bar-section">

      <a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-mobile.png"  alt="<?php bloginfo( 'name' ); ?>" /></a></h1>

    </section>
  </nav>


  <aside class="<?php echo apply_filters( 'filter_mobile_nav_position', 'mobile_nav_position' ); ?>-off-canvas-menu" aria-hidden="true">
      <?php foundationpress_mobile_off_canvas( apply_filters('filter_mobile_nav_position', 'mobile_nav_position') ); ?>
  </aside>

</div>
