<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

final class AC_Settings_Columns {

	CONST OPTIONS_KEY = 'cpac_options';

	private $list_screen_key;

	public function __construct( $list_screen_key ) {
		$this->list_screen_key = $list_screen_key;
	}

	public function get_key() {
		return apply_filters( 'ac/settings/key', self::OPTIONS_KEY . '_' . $this->list_screen_key );
	}

	// Column settings
	public function store( $columndata ) {
		return update_option( $this->get_key(), $columndata );
	}

	public function get_columns() {
		$columns = get_option( $this->get_key() );

		return $columns ? $columns : array();
	}

	public function delete() {
		delete_option( $this->get_key() );
	}

	// Default headings
	private function get_default_key() {
		return self::OPTIONS_KEY . '_' . $this->list_screen_key . "__default";
	}

	public function store_default_headings( $column_headings ) {
		return update_option( $this->get_default_key(), $column_headings );
	}

	public function get_default_headings() {
		$headings = get_option( $this->get_default_key() );

		if ( empty( $headings ) ) {
			return array();
		}

		return $headings;
	}

	public function delete_default_headings() {
		delete_option( $this->get_default_key() );
	}

	// Delete all
	public static function delete_all() {
		global $wpdb;

		$wpdb->query( "DELETE FROM {$wpdb->options} WHERE option_name LIKE '" . self::OPTIONS_KEY . "_%'" );
	}

	private function get_list_screen() {
		return AC()->get_list_screen( $this->list_screen_key );
	}

}