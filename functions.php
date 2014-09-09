<?php
add_theme_support('automatic-feed-links');

function sonen_output_stuff( $content ) {
	return $content . "Jeg er spytta ut av en egen funksjon.";
}
add_filter( 'the_content', 'sonen_output_stuff' );

add_action( 'init', 'codex_book_init' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_book_init() {
	$labels = array(
		'name'               => _x( 'Books', 'post type general name', 'sonen' ),
		'singular_name'      => _x( 'Book', 'post type singular name', 'sonen' ),
		'menu_name'          => _x( 'Books', 'admin menu', 'sonen' ),
		'name_admin_bar'     => _x( 'Book', 'add new on admin bar', 'sonen' ),
		'add_new'            => _x( 'Add New', 'book', 'sonen' ),
		'add_new_item'       => __( 'Add New Book', 'sonen' ),
		'new_item'           => __( 'New Book', 'sonen' ),
		'edit_item'          => __( 'Edit Book', 'sonen' ),
		'view_item'          => __( 'View Book', 'sonen' ),
		'all_items'          => __( 'All Books', 'sonen' ),
		'search_items'       => __( 'Search Books', 'sonen' ),
		'parent_item_colon'  => __( 'Parent Books:', 'sonen' ),
		'not_found'          => __( 'No books found.', 'sonen' ),
		'not_found_in_trash' => __( 'No books found in Trash.', 'sonen' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'book', $args );
}

register_nav_menu( 'hovedmeny', 'Denne menyen vises på toppen av sida.');

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );
