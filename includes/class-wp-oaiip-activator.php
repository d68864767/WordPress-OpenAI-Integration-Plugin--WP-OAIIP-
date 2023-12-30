<?php

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    WP_OAIIP
 * @subpackage WP_OAIIP/includes
 */
class WP_OAIIP_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		// TODO: Define your action here. You might want to add some default options, create a new database table, or start some other processes.

		// For example, you can add a default option like this:
		// add_option( 'wp_oaiip_default_option', 'Default value' );

		// Or create a new database table like this:
		/*
		global $wpdb;
		$table_name = $wpdb->prefix . 'my_table';
		$charset_collate = $wpdb->get_charset_collate();

		$sql = "CREATE TABLE $table_name (
			id mediumint(9) NOT NULL AUTO_INCREMENT,
			time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
			name tinytext NOT NULL,
			text text NOT NULL,
			url varchar(55) DEFAULT '' NOT NULL,
			PRIMARY KEY  (id)
		) $charset_collate;";

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );
		*/
	}
}
