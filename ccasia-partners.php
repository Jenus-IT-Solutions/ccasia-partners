<?php
   /*
   Plugin Name: ComicCon Asia Partners
   Description: Custom Post Type for ComicCon Asia Partners
   Author: Jenus Web Solutions Inc
   Author URI: http://jenusitsolutions.com
   Plugin URI: https://github.com
   Version: 0.0.1
   License: GPL2
   */



/**
 * The main class that handles the entire output, content filters, etc., for this plugin.
 *
 * @package ComicCon Asia Partners
 * @since 0.0.1
 */
class ComicCon_Asia_Partners {

	/** Constructor */
	function __construct() {
		register_activation_hook( __FILE__, array( $this, 'activation_hook' ) );
		
		/**
		 * Add Custom Post Type
		 */
		add_action( 'init', [ $this, 'comiccon_partners_post_type' ] );
	}

	function activation_hook() {

	}

	function comiccon_partners_post_type() {
		register_post_type( 'comiccon_partners',
			array(
				'labels' => array(
					'name'               => __('Partners'),
					'singular_name'      => __('Partner'),
					'add_new_item'       => __('Add New Partner'),
					'edit_item'          => __('Edit Partner'),
					'new_item'           => __('New Partner'),
					'view_item'          => __('View Partner'),
					'search_items'       => __('Search Partners'),
					'not_found'          => __('No Partner Found'),
					'not_found_in_trash' => __('No Partners found in Trash')
				),
				'hierarchical'         => false,
				'menu_icon'            => 'dashicons-groups',
				'menu_position'        => 5,
				'public'               => true,
				'rewrite'              => array( 'slug' => 'comiccon-partners', 'with_front' => false ),
				'show_in_admin_bar'    => false,
				'show_in_nav_menus'    => true,
				'show_ui'              => true,
				'supports'             => array('title', 'editor', 'author', 'contributor', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'revisions', 'page-attributes')
			)
		);
	}

}	

$ComicCon_Asia_Partners = new ComicCon_Asia_Partners;


