<?php
/**
 * Plugin Name: Urban Estate - Custom Content Type
 * Plugin URI: http://www.tooit.com
 * Description: Define custom content types for Urban Estate
 * Version: Version: 2.0
 * Author: Luciano Caccia
 * Author URI: http://www.tooit.com
 * License: A "Slug" license name e.g. GPL2
 */

// Based in http://www.smashingmagazine.com/2012/11/08/complete-guide-custom-post-types/

// WP custom content type Project creation
function ue_cct_project() {
  $labels = array(
    'name'               => _x( 'Proyectos', 'post type general name' ),
    'singular_name'      => _x( 'Proyecto', 'post type singular name' ),
    'add_new'            => _x( 'Agregar nuevo PR', 'proyecto' ),
    'add_new_item'       => __( 'Agregar nuevo Proyecto' ),
    'edit_item'          => __( 'Edit Project' ),
    'new_item'           => __( 'New Project' ),
    'all_items'          => __( 'Todos los proyectos' ),
    'view_item'          => __( 'View Projects' ),
    'search_items'       => __( 'Search Projects' ),
    'not_found'          => __( 'No Projects found' ),
    'not_found_in_trash' => __( 'No Projects found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Proyectos'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Administrar ptoyectos en Urban State',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    'has_archive'   => true,
  );
  register_post_type( 'proyecto', $args );
}
add_action( 'init', 'ue_cct_project' );


// WP Mesagges
function ue_cct_messages( $messages ) {
  global $post, $post_ID;  
  $messages['project'] = array(
    0 => '',
    1 => sprintf( __('Project updated. <a href="%s">View project</a>'), esc_url( get_permalink($post_ID) ) ),
    2 => __('Custom field updated.'),
    3 => __('Custom field deleted.'),
    4 => __('Project updated.'),
    5 => isset($_GET['revision']) ? sprintf( __('Project restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
    6 => sprintf( __('Project published. <a href="%s">View project</a>'), esc_url( get_permalink($post_ID) ) ),
    7 => __('Project saved.'),
    8 => sprintf( __('Project submitted. <a target="_blank" href="%s">Preview project</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
    9 => sprintf( __('Project scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview project</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
    10 => sprintf( __('Project draft updated. <a target="_blank" href="%s">Preview project</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
  );
  return $messages;
}
add_filter( 'post_updated_messages', 'ue_cct_messages' );


// WP Taxonomiy for Projects
function ue_taxonomies_project() {
  $labels = array(
    'name'              => _x( 'Categoría de PR', 'taxonomy general name' ),
    'singular_name'     => _x( 'Categoría de proyecto', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Projects Categories' ),
    'all_items'         => __( 'Todas las categorías' ),
    'parent_item'       => __( 'Parent Projects Category' ),
    'parent_item_colon' => __( 'Parent Projects Category:' ),
    'edit_item'         => __( 'Edit Project Category' ),
    'update_item'       => __( 'Update Project Category' ),
    'add_new_item'      => __( 'Agregar nueva' ),
    'new_item_name'     => __( 'New Project Category' ),
    'menu_name'         => __( 'Categorías de PR' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
    'show_admin_column'	=> true,
  );
  register_taxonomy( 'proyecto_categoria', 'proyecto', $args );
}
add_action( 'init', 'ue_taxonomies_project', 0 );
