<?php

class Comicspot {

	static $instance = FALSE;

	public function __construct() {
		$this->load_dependencies();
		$this->admin_init();
		$this->acf();
	}

	public static function init() {
		if ( ! self::$instance ) {
			self::$instance = new Comicspot;
		}
		return self::$instance;
	}

	private function load_dependencies() {
		require_once COMICSPOT__PLUGIN_DIR . '/admin/class.comicspot.admin.php';
	}

	/**
	 * Initialize admin interface
	 */
	private function admin_init() {
		$admin = new Comicspot_Admin();
		$admin->init();
	}

	public function acf() {
		add_filter('acf/settings/save_json', array( $this, 'save_acf_json' ) );
		add_filter('acf/settings/load_json', array( $this, 'load_acf_json' ) );
	}

	public function save_acf_json( $path ) {
		$path = COMICSPOT__PLUGIN_DIR . '/admin/fields';
		return $path;
	}

	public function load_acf_json( $paths ) {
		$paths[] = COMICSPOT__PLUGIN_DIR . '/admin/fields';
		return $paths;
	}
}