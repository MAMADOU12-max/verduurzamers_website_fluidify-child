<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
 
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}
function custom_post_type() {

   $nieuws_labels = array(
       'name'                => _x( 'Nieuws', 'Nieuws', 'nieuws' ),
       'singular_name'       => _x( 'Nieuws', 'Nieuws', 'nieuws' ),
       'menu_name'           => __( 'Nieuws', 'nieuws' ),
       'parent_item_colon'   => __( 'Parent Item:', 'nieuws' ),
       'all_items'           => __( 'Alle nieuws', 'nieuws' ),
       'view_item'           => __( 'Bekijk nieuws', 'view_nieuws' ),
       'add_new_item'        => __( 'Nieuwe nieuws', 'add_new_nieuws' ),
       'add_new'             => __( 'Nieuwe nieuws', 'text_domain' ),
       'edit_item'           => __( 'Edit Item', 'text_domain' ),
       'update_item'         => __( 'Update Item', 'text_domain' ),
       'search_items'        => __( 'Search Item', 'text_domain' ),
       'not_found'           => __( 'Not found', 'text_domain' ),
       'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
   );
   $nieuws_args = array(
       'label'               => __( 'nieuws', 'text_domain' ),
       'description'         => __( 'Post type voor fdfd nieuws', 'text_domain' ),
       'labels'              => $nieuws_labels,
       'supports'            => array('title', 'excerpt', 'editor', 'thumbnail', 'custom-fields', 'author' ),
       'hierarchical'        => false,
       'public'              => true,
       'show_ui'             => true,
       'show_in_menu'        => true,
       'show_in_nav_menus'   => true,
       'show_in_admin_bar'   => true,
       'show_in_rest'        => true,
       'menu_position'       => 5,
       'menu_icon'           => '',
       'can_export'          => true,
       'rewrite'             => array('slug' => 'nieuws'),
       'has_archive'         => true,
       'exclude_from_search' => false,
       'publicly_queryable'  => true,
       'capability_type'     => 'page',
       'taxonomies'          => array('post_tag', 'category'),
   );
   register_post_type( 'nieuws', $nieuws_args );


   $experts_labels = array(
      'name'                => _x( 'Expert', 'Expert', 'expert' ),
      'singular_name'       => _x( 'Expert', 'Expert', 'expert' ),
      'menu_name'           => __( 'Experts', 'expert' ),
      'parent_item_colon'   => __( 'Parent Item:', 'expert' ),
      'all_items'           => __( 'Alle Experts', 'expert' ),
      'view_item'           => __( 'Bekijk expert', 'view_expert' ),
      'add_new_item'        => __( 'Nieuwe expert', 'add_new_expert' ),
      'add_new'             => __( 'Nieuwe expert', 'text_domain' ),
      'edit_item'           => __( 'Edit Item', 'text_domain' ),
      'update_item'         => __( 'Update Item', 'text_domain' ),
      'search_items'        => __( 'Search Item', 'text_domain' ),
      'not_found'           => __( 'Not found', 'text_domain' ),
      'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
  );
  $experts_args = array(
      'label'               => __( 'expert', 'text_domain' ),
      'description'         => __( 'Post type voor fdfd expert', 'text_domain' ),
      'labels'              => $experts_labels,
      'supports'            => array('title', 'excerpt', 'editor', 'thumbnail', 'custom-fields' ),
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 5,
      'menu_icon'           => '',
      'can_export'          => true,
      'rewrite'             => array('slug' => 'expert'),
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'capability_type'     => 'page',
      'taxonomies'          => array('post_tag', 'category'),
  );
  register_post_type( 'expert', $experts_args );

  $nieuws_labels = array(
    'name'                => _x( 'Nieuws', 'Nieuws', 'nieuws' ),
    'singular_name'       => _x( 'Nieuws', 'Nieuws', 'nieuws' ),
    'menu_name'           => __( 'Nieuws', 'nieuws' ),
    'parent_item_colon'   => __( 'Parent Item:', 'nieuws' ),
    'all_items'           => __( 'Alle nieuws', 'nieuws' ),
    'view_item'           => __( 'Bekijk nieuws', 'view_nieuws' ),
    'add_new_item'        => __( 'Nieuwe nieuws', 'add_new_nieuws' ),
    'add_new'             => __( 'Nieuwe nieuws', 'text_domain' ),
    'edit_item'           => __( 'Edit Item', 'text_domain' ),
    'update_item'         => __( 'Update Item', 'text_domain' ),
    'search_items'        => __( 'Search Item', 'text_domain' ),
    'not_found'           => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
);
$nieuws_args = array(
    'label'               => __( 'nieuws', 'text_domain' ),
    'description'         => __( 'Post type voor fdfd nieuws', 'text_domain' ),
    'labels'              => $nieuws_labels,
    'supports'            => array('title', 'excerpt', 'editor', 'thumbnail', 'custom-fields', 'author' ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'show_in_rest'        => true,
    'menu_position'       => 5,
    'menu_icon'           => '',
    'can_export'          => true,
    'rewrite'             => array('slug' => 'nieuws'),
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
    'taxonomies'          => array('post_tag', 'category'),
);
register_post_type( 'nieuws', $nieuws_args );


$courses_labels = array(
   'name'                => _x( 'Courses', 'course', 'course' ),
   'singular_name'       => _x( 'Courses', 'Course', 'course' ),
   'menu_name'           => __( 'courses', 'course' ),
   'parent_item_colon'   => __( 'Parent Item:', 'course' ),
   'all_items'           => __( 'Alle courses', 'course' ),
   'view_item'           => __( 'Bekijk course', 'view_course' ),
   'add_new_item'        => __( 'Nieuwe course', 'add_new_course' ),
   'add_new'             => __( 'Nieuwe course', 'text_domain' ),
   'edit_item'           => __( 'Edit Item', 'text_domain' ),
   'update_item'         => __( 'Update Item', 'text_domain' ),
   'search_items'        => __( 'Search Item', 'text_domain' ),
   'not_found'           => __( 'Not found', 'text_domain' ),
   'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
);
$courses_args = array(
   'label'               => __( 'course', 'text_domain' ),
   'description'         => __( 'Post type voor fdfd course', 'text_domain' ),
   'labels'              => $courses_labels,
   'supports'            => array('title', 'excerpt', 'editor', 'thumbnail', 'custom-fields' ),
   'hierarchical'        => false,
   'public'              => true,
   'show_ui'             => true,
   'show_in_menu'        => true,
   'show_in_nav_menus'   => true,
   'show_in_admin_bar'   => true,
   'menu_position'       => 5,
   'menu_icon'           => '',
   'can_export'          => true,
   'rewrite'             => array('slug' => 'expert'),
   'has_archive'         => true,
   'exclude_from_search' => false,
   'publicly_queryable'  => true,
   'capability_type'     => 'page',
   'taxonomies'          => array('post_tag', 'category'),
);
register_post_type( 'course', $courses_args );
   
 }
 add_action( 'init', 'custom_post_type', 0 );

?>