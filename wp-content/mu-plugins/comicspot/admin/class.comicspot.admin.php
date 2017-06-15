<?php

class Comicspot_Admin {

	public function init() {
		$this->create_post_type();
		$this->create_taxonomies();
	}

	/**
	 * Initialize post types
	 */
	public function create_post_type() {
		require_once COMICSPOT__PLUGIN_DIR . '/admin/post-types/class.comicspot.post-type.php';

		$comics = new Comicspot_Post_Type( 'comic', 'Comic', 'Comics' );
		$comics->init();
	}

	/**
	 * Initialize taxonomies
	 */
	public function create_taxonomies() {
		require_once COMICSPOT__PLUGIN_DIR . '/admin/taxonomies/class.comicspot.taxonomy.php';

		$characters = new Comicspot_Taxonomy( 'character', 'Character', 'Characters', array( 'comic' ) );
		$characters->init();

		$publishers = new Comicspot_Taxonomy( 'publisher', 'Publisher', 'Publishers', array( 'comic' ) );
		$publishers->init();

		$series = new Comicspot_Taxonomy( 'series', 'Series', 'Series', array( 'comic' ) );
		$series->init();

		$writers = new Comicspot_Taxonomy( 'writer', 'Writer', 'Writers', array( 'comic' ) );
		$writers->init();

		$artists = new Comicspot_Taxonomy( 'artist', 'Artist', 'Artists', array( 'comic' ) );
		$artists->init();
	}
}