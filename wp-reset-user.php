<?php
define('WP_USE_THEMES', 0);

/** 
Loads the WordPress Environment and Template 
NOTE: re-create if missing table wp_users, wp_usermeta
- use default admin acc.
*/
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
global $wpdb;

if(!$wpdb) die('WP Environment not found.');

function reset_role_akrr( $role ) {
	$default_roles = array(
		'administrator' => array(
			'switch_themes' => 1,
			'edit_themes' => 1,
			'activate_plugins' => 1,
			'edit_plugins' => 1,
			'edit_users' => 1,
			'edit_files' => 1,
			'manage_options' => 1,
			'moderate_comments' => 1,
			'manage_categories' => 1,
			'manage_links' => 1,
			'upload_files' => 1,
			'import' => 1,
			'unfiltered_html' => 1,
			'edit_posts' => 1,
			'edit_others_posts' => 1,
			'edit_published_posts' => 1,
			'publish_posts' => 1,
			'edit_pages' => 1,
			'read' => 1,
			'level_10' => 1,
			'level_9' => 1,
			'level_8' => 1,
			'level_7' => 1,
			'level_6' => 1,
			'level_5' => 1,
			'level_4' => 1,
			'level_3' => 1,
			'level_2' => 1,
			'level_1' => 1,
			'level_0' => 1,
			'edit_others_pages' => 1,
			'edit_published_pages' => 1,
			'publish_pages' => 1,
			'delete_pages' => 1,
			'delete_others_pages' => 1,
			'delete_published_pages' => 1,
			'delete_posts' => 1,
			'delete_others_posts' => 1,
			'delete_published_posts' => 1,
			'delete_private_posts' => 1,
			'edit_private_posts' => 1,
			'read_private_posts' => 1,
			'delete_private_pages' => 1,
			'edit_private_pages' => 1,
			'read_private_pages' => 1,
			'delete_users' => 1,
			'create_users' => 1,
			'unfiltered_upload' => 1,
			'edit_dashboard' => 1,
			'update_plugins' => 1,
			'delete_plugins' => 1,
			'install_plugins' => 1,
			'update_themes' => 1,
			'install_themes' => 1,
			'update_core' => 1,
			'list_users' => 1,
			'remove_users' => 1,
			'add_users' => 1,
			'promote_users' => 1,
			'edit_theme_options' => 1,
			'delete_themes' => 1,
			'export' => 1,
		),
		'editor' => array(
			'moderate_comments' => 1,
			'manage_categories' => 1,
			'manage_links' => 1,
			'upload_files' => 1,
			'unfiltered_html' => 1,
			'edit_posts' => 1,
			'edit_others_posts' => 1,
			'edit_published_posts' => 1,
			'publish_posts' => 1,
			'edit_pages' => 1,
			'read' => 1,
			'level_7' => 1,
			'level_6' => 1,
			'level_5' => 1,
			'level_4' => 1,
			'level_3' => 1,
			'level_2' => 1,
			'level_1' => 1,
			'level_0' => 1,
			'edit_others_pages' => 1,
			'edit_published_pages' => 1,
			'publish_pages' => 1,
			'delete_pages' => 1,
			'delete_others_pages' => 1,
			'delete_published_pages' => 1,
			'delete_posts' => 1,
			'delete_others_posts' => 1,
			'delete_published_posts' => 1,
			'delete_private_posts' => 1,
			'edit_private_posts' => 1,
			'read_private_posts' => 1,
			'delete_private_pages' => 1,
			'edit_private_pages' => 1,
			'read_private_pages' => 1,
		),
		'author' => array(
			'upload_files' => 1,
			'edit_posts' => 1,
			'edit_published_posts' => 1,
			'publish_posts' => 1,
			'read' => 1,
			'level_2' => 1,
			'level_1' => 1,
			'level_0' => 1,
			'delete_posts' => 1,
			'delete_published_posts' => 1,
		),
		'contributor' => array(
			'edit_posts' => 1,
			'read' => 1,
			'level_1' => 1,
			'level_0' => 1,
			'delete_posts' => 1,
		),
		'subscriber' => array(
			'read' => 1,
			'level_0' => 1,
		),
		'display_name' => array(
			'administrator' => 'Administrator',
			'editor'		=> 'Editor',
			'author'		=> 'Author',
			'contributor'   => 'Contributor',
			'subscriber'	=> 'Subscriber',
		),
	);
	$role = strtolower( $role );
	remove_role( $role );
	return add_role( $role, $default_roles['display_name'][$role], $default_roles[$role] );
}

class Role_WooCommerce {
	/**
	 * Create roles and capabilities.
	 */
	public static function create_roles() {
		global $wp_roles;

		if ( ! class_exists( 'WP_Roles' ) ) {
			return;
		}

		if ( ! isset( $wp_roles ) ) {
			$wp_roles = new WP_Roles();
		}

		// Customer role
		add_role( 'customer', __( 'Customer', 'woocommerce' ), array(
			'read' 					=> true,
		) );

		// Shop manager role
		add_role( 'shop_manager', __( 'Shop manager', 'woocommerce' ), array(
			'level_9'                => true,
			'level_8'                => true,
			'level_7'                => true,
			'level_6'                => true,
			'level_5'                => true,
			'level_4'                => true,
			'level_3'                => true,
			'level_2'                => true,
			'level_1'                => true,
			'level_0'                => true,
			'read'                   => true,
			'read_private_pages'     => true,
			'read_private_posts'     => true,
			'edit_users'             => true,
			'edit_posts'             => true,
			'edit_pages'             => true,
			'edit_published_posts'   => true,
			'edit_published_pages'   => true,
			'edit_private_pages'     => true,
			'edit_private_posts'     => true,
			'edit_others_posts'      => true,
			'edit_others_pages'      => true,
			'publish_posts'          => true,
			'publish_pages'          => true,
			'delete_posts'           => true,
			'delete_pages'           => true,
			'delete_private_pages'   => true,
			'delete_private_posts'   => true,
			'delete_published_pages' => true,
			'delete_published_posts' => true,
			'delete_others_posts'    => true,
			'delete_others_pages'    => true,
			'manage_categories'      => true,
			'manage_links'           => true,
			'moderate_comments'      => true,
			'upload_files'           => true,
			'export'                 => true,
			'import'                 => true,
			'list_users'             => true,
		) );

		$capabilities = self::get_core_capabilities();

		foreach ( $capabilities as $cap_group ) {
			foreach ( $cap_group as $cap ) {
				$wp_roles->add_cap( 'shop_manager', $cap );
				$wp_roles->add_cap( 'administrator', $cap );
			}
		}
	}
	/**
	 * Get capabilities for WooCommerce - these are assigned to admin/shop manager during installation or reset.
	 *
	 * @return array
	 */
	 private static function get_core_capabilities() {
		$capabilities = array();

		$capabilities['core'] = array(
			'manage_woocommerce',
			'view_woocommerce_reports',
		);

		$capability_types = array( 'product', 'shop_order', 'shop_coupon', 'shop_webhook' );

		foreach ( $capability_types as $capability_type ) {

			$capabilities[ $capability_type ] = array(
				// Post type
				"edit_{$capability_type}",
				"read_{$capability_type}",
				"delete_{$capability_type}",
				"edit_{$capability_type}s",
				"edit_others_{$capability_type}s",
				"publish_{$capability_type}s",
				"read_private_{$capability_type}s",
				"delete_{$capability_type}s",
				"delete_private_{$capability_type}s",
				"delete_published_{$capability_type}s",
				"delete_others_{$capability_type}s",
				"edit_private_{$capability_type}s",
				"edit_published_{$capability_type}s",

				// Terms
				"manage_{$capability_type}_terms",
				"edit_{$capability_type}_terms",
				"delete_{$capability_type}_terms",
				"assign_{$capability_type}_terms",
			);
		}

		return $capabilities;
	}

	/**
	 * woocommerce_remove_roles function.
	 */
	public static function remove_roles() {
		global $wp_roles;

		if ( ! class_exists( 'WP_Roles' ) ) {
			return;
		}

		if ( ! isset( $wp_roles ) ) {
			$wp_roles = new WP_Roles();
		}

		$capabilities = self::get_core_capabilities();

		foreach ( $capabilities as $cap_group ) {
			foreach ( $cap_group as $cap ) {
				$wp_roles->remove_cap( 'shop_manager', $cap );
				$wp_roles->remove_cap( 'administrator', $cap );
			}
		}

		remove_role( 'customer' );
		remove_role( 'shop_manager' );
	}
}

echo "<p>reset role</p>";
if ( ! function_exists( 'populate_roles' ) ) {
    include_once( ABSPATH . '/wp-admin/includes/schema.php' );
}
populate_roles();	//reset_role_akrr('administrator')
if(is_plugin_active('woocommerce/woocommerce.php')) Role_WooCommerce::create_roles();
//$admin_role_set = get_role( 'administrator' )->capabilities;print_r($admin_role_set);die;

echo "<p>list users</p>";
$first_adm=0;
$users = get_users(array('orderby' => 'ID','order' => 'ASC',));
foreach($users as $user) {
	if(empty($user->roles)) {
		echo "<p>add role (administrator) to user {$user->ID} ({$user->user_login})</p>";
		if(!$first_adm) {
			$user->add_role('administrator');
		}
		else $user->add_role('contributor');
	}
}
//list user
$users = get_users();
print_r($users);
