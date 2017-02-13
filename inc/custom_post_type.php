<?php 
// Custom Post Type for Projects
function waxom_projects_post_types() {
  // Set UI labels for Custom Post Type
  $labels = array(
    'name'                =>  __( 'Projects', 'Post Type General Name', 'waxom' ),
    'singular_name'       =>  __( 'Project', 'Post Type Singular Name', 'waxom' ),
    'menu_name'           =>  __( 'Projects', 'waxom' ),
    'parent_item_colon'   =>  __( 'Parent Projects', 'waxom' ),
    'all_items'           =>  __( 'All Projects', 'waxom' ),
    'view_items'          =>  __( 'View Projects', 'waxom' ),
    'add_new_item'        =>  __( 'Add New Projects', 'waxom' ),
    'add_new'             =>  __( 'Add New', 'waxom' ),
    'edit_item'           =>  __( 'Edit Project', 'waxom' ),
    'update_item'         =>  __( 'Update Project', 'waxom' ),
    'search_items'        =>  __( 'Search Projects', 'waxom' ),
    'not_found'           =>  __( 'Not Found', 'waxom' ),
    'not_found_in_trash'  =>  __( 'Not found in Trash', 'waxom' ),
  );
  // Set options for Custom Post Type
  $args = array(
    'label'               => __( 'how_tos ', 'bertolli' ),
    'description'         => __( 'How Tos', 'bertolli' ),
    'labels'              => $labels,
    'supports'            => array( 'title','editor','thumbnail', 'revisions', ),
    'public'              => true,
    'has_archive'         => true,
    'menu_icon'           => 'dashicons-pencil',
    'menu_position'       => 5,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
  );
  // Registering Custom Post Type
  register_post_type( 'projects', $args );
}
// Hook into the 'init' action so function for custom post type is not unnecessarily executed.
add_action( 'init', 'waxom_projects_post_types', 0 );
?>