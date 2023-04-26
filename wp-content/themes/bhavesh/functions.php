<?php 
add_action( 'after_setup_theme', 'bhavesh_setup' );

function bhavesh_setup(){

  // This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary'  => esc_html__( 'Main Menu', 'bhavesh' ),
			'footer'   => esc_html__( 'Footer Menu', 'bhavesh' ),	
		) );		
}

/**
 * Generate breadcrumbs
 **/
function get_breadcrumb() {
  echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
  if (is_category() || is_single()) {
      echo '<span><i class="fa fa-angle-right"></i></span>';
      the_category(' &bull; ');
          if (is_single()) {
              echo '<span><i class="fa fa-angle-right"></i></span>';
              echo '<span class="current">'.get_the_title().'</span>';
          }
  } elseif (is_page()) {
      echo '<span><i class="fa fa-angle-right"></i></span>';
      echo '<span class="current">'.get_the_title().'</span>';
  } elseif (is_search()) {
      echo '<span><i class="fa fa-angle-right"></i></span>Search Results for... ';
      echo '"<em>';
      echo the_search_query();
      echo '</em>"';
  }
}

/**
 * Add a sidebar.
 */
function wpdocs_theme_slug_widgets_init() {
  register_sidebar( array(
      'name'          => __( 'footer-1', 'textdomain' ),
      'id'            => 'footer-1',
      'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widgettitle">',
      'after_title'   => '</h2>',
  ) );
  register_sidebar( array(
    'name'          => __( 'footer-2', 'textdomain' ),
    'id'            => 'footer-2',
    'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
  ) );
  register_sidebar( array(
    'name'          => __( 'footer-3', 'textdomain' ),
    'id'            => 'footer-3',
    'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
  ) );
  register_sidebar( array(
    'name'          => __( 'sidebar', 'textdomain' ),
    'id'            => 'sidebar',
    'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );