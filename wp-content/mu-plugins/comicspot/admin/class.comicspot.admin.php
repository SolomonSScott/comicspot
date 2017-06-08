<?php

class Comicspot_Admin {

	public function init() {
		$this->create_post_type();
	}

	/**
	 * Initialize post types
	 */
	public function create_post_type() {
		require_once COMICSPOT__PLUGIN_DIR . '/admin/post-types/class.comicspot.post-type.php';
		$comics = new Comicspot_Post_Type( 'comic', 'Comic', 'Comics' );
	}
}