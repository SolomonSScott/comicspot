<?php

class Comicspot_Post_Type {

	public $slug;

	public $plural;

	public $singular;

	public $args = array();

	public function __construct( $slug, $singular, $plural, $args = null ) {
		$this->slug     = $slug;
		$this->singular = $singular;
		$this->plural   = $plural;

		if ( is_null($args) ) {
			$this->args = array(
				'label'           => __( $this->slug, COMICSPOT__PLUGIN_NAME ),
				'description'     => __( '', COMICSPOT__PLUGIN_NAME ),
				'labels'          => $this->labels(),
				'public'          => TRUE,
				'has_archive'     => TRUE,
				'capability_type' => 'post',
			);
		} else {
			$this->args = $args;
		}

		add_action( 'init', array( $this, 'register_post_type' ), 0 );
	}

	public function labels() {
		$labels = array(
			'name'               => _x( $this->plural, 'Post Type General Name', COMICSPOT__PLUGIN_NAME ),
			'singular_name'      => _x( $this->singular, 'Post Type Singular Name', COMICSPOT__PLUGIN_NAME ),
			'menu_name'          => __( $this->plural, COMICSPOT__PLUGIN_NAME ),
			'parent_item_colon'  => __( 'Parent ' . $this->singular, COMICSPOT__PLUGIN_NAME ),
			'all_items'          => __( 'All ' . $this->plural, COMICSPOT__PLUGIN_NAME ),
			'view_item'          => __( 'View ' . $this->singular, COMICSPOT__PLUGIN_NAME ),
			'add_new_item'       => __( 'Add New ' . $this->singular, COMICSPOT__PLUGIN_NAME ),
			'add_new'            => __( 'Add New', COMICSPOT__PLUGIN_NAME ),
			'edit_item'          => __( 'Edit ' . $this->singular, COMICSPOT__PLUGIN_NAME ),
			'update_item'        => __( 'Update ' . $this->singular, COMICSPOT__PLUGIN_NAME ),
			'search_items'       => __( 'Search ' . $this->singular, COMICSPOT__PLUGIN_NAME ),
			'not_found'          => __( 'Not Found', COMICSPOT__PLUGIN_NAME ),
			'not_found_in_trash' => __( 'Not found in Trash', COMICSPOT__PLUGIN_NAME ),
		);

		return $labels;
	}

	public function arguments() {
		$args = $this->args;
		return $args;
	}

	public function register_post_type() {
		register_post_type( $this->slug, $this->arguments() );
	}
}