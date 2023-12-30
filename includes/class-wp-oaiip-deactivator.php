<?php

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    WP_OAIIP
 * @subpackage WP_OAIIP/includes
 */
class WP_OAIIP_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		// TODO: Define your action here. You might want to remove the options you added during activation, drop the database tables, or stop some other processes.

		// For example, you can remove a default option like this:
		// delete_option( 'wp_oaiip_default_option' );

		// Or drop a database table like this:
		/*
		global $wpdb;
		$table_name = $wpdb->prefix . 'my_table';

		$sql = "DROP TABLE IF EXISTS $table_name;";

		$wpdb->query($sql);
		*/
	}
}
