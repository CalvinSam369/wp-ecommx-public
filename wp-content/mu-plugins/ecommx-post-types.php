<?php
function ecomm_post_types(){
  // Post Type Event
    register_post_type( 'event', array(
      'capability_type' => 'event',
      'map_meta_cap' => true,
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'excerpt'),
      'rewrite' => array('slug' => 'events'),
      'has_archive' => true,
      'public' => true,
      'menu_icon' => 'dashicons-calendar-alt',
      'labels' => array(
        'name' => 'Events',
        'add_new_item' => 'Add New Event',
        'edit_item' => 'Edit Event',
        'all_items' => 'All Events',
        'singular_name' => 'Event'
      )
    ));

    // Post Type Program
    register_post_type( 'program', array(
      'show_in_rest' => true,
      'supports' => array('title', 'excerpt'),
      'rewrite' => array('slug' => 'programs'),
      'has_archive' => true,
      'public' => true,
      'menu_icon' => 'dashicons-awards',
      'labels' => array(
        'name' => 'Programs',
        'add_new_item' => 'Add New Program',
        'edit_item' => 'Edit Program',
        'all_items' => 'All Programs',
        'singular_name' => 'Programs'
      )
    ));

    // Post Type Professor
    register_post_type( 'professor', array(
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
      'public' => true,
      'menu_icon' => 'dashicons-businessperson',
      'labels' => array(
        'name' => 'Professors',
        'add_new_item' => 'Add New Professor',
        'edit_item' => 'Edit Professor',
        'all_items' => 'All Professors',
        'singular_name' => 'Professors'
      )
    ));

    // Post Type Campus
    register_post_type( 'campus', array(
      'capability_type' => 'campus',
      'map_meta_cap' => true,
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'excerpt'),
      'rewrite' => array('slug' => 'campuses'),
      'has_archive' => true,
      'public' => true,
      'menu_icon' => 'dashicons-location-alt',
      'labels' => array(
        'name' => 'Campuses',
        'add_new_item' => 'Add New Campus',
        'edit_item' => 'Edit Campus',
        'all_items' => 'All Campuses',
        'singular_name' => 'Campus'
      )
    ));

    // Post Type Note
    register_post_type( 'note', array(
      'capability_type' => 'note',
      'map_meta_cap' => true,
      'show_in_rest' => true,
      'supports' => array('title', 'editor'),
      'public' => false,
      'show_ui' => true,
      'menu_icon' => 'dashicons-welcome-write-blog',
      'labels' => array(
        'name' => 'Notes',
        'add_new_item' => 'Add New Note',
        'edit_item' => 'Edit Note',
        'all_items' => 'All Notes',
        'singular_name' => 'Notes'
      )
    ));

    // Post Type Like
    register_post_type( 'like', array(
      'supports' => array('title'),
      'public' => false,
      'show_ui' => true,
      'menu_icon' => 'dashicons-heart',
      'labels' => array(
        'name' => 'Likes',
        'add_new_item' => 'Add New Like',
        'edit_item' => 'Edit Like',
        'all_items' => 'All Likes',
        'singular_name' => 'Likes'
      )
    ));
  }
add_action('init', 'ecomm_post_types');
?>
