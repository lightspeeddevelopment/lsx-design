<?php
namespace LSX\Classes;

/**
 * All the functions for setting up the theme.
 *
 * @package   LSX
 * @author    LightSpeed
 * @license   GPL3
 * @link
 * @copyright 2023 LightSpeed
 */
class Setup {

	/**
	 * Contructor
	 */
	public function __construct() {
	}

	/**
	 * Initiate our class.
	 *
	 * @return void
	 */
	public function init() {
		add_action( 'admin_init', array( $this, 'remove_customizer_menu' ), 10 );
		add_filter( 'user_has_cap', array( $this, 'remove_customize_capability' ), 200, 4 );
		add_action( 'wp_before_admin_bar_render', array( $this, 'admin_bar_render' ), 10 );

		add_action( 'after_setup_theme', array( $this, 'theme_setup' ) );
	}

	/**
	 * Removed the Customzer option from the Appearance Menu 
	 *
	 * @return void
	 */
	public function remove_customizer_menu() {
        remove_action( 'plugins_loaded', '_wp_customize_include', 10 );
        remove_action(
            'admin_enqueue_scripts',
            '_wp_customize_loader_settings',
            11
        );

		$customize_url = 'customize.php';
		if ( isset( $_SERVER['REQUEST_URI'] ) ) {
			$customize_url .= '?return=' . urlencode( $_SERVER['REQUEST_URI'] );
		}
		remove_submenu_page( 'themes.php', $customize_url );
	}

	/**
	 * Removes the customizer capability
	 *
	 * @param array $caps
	 * @param string $cap
	 * @param array $args
	 * @param object $wp_user
	 * @return void
	 */
    public function remove_customize_capability( $all_caps = [],$caps = '',$args = [], $wp_user ) {
		if ( isset( $all_caps['customize'] ) ) {
			unset( $all_caps['customize'] );
		}
        return $all_caps;
    }

	/**
	 * Removes unwanted links from the admin bar.
	 *
	 * @return void
	 */
	public function admin_bar_render() {
		global $wp_admin_bar;
		$wp_admin_bar->remove_menu('customize');
	}

	/**
	 * Adds the old menu options back in for site transition
	 *
	 * @deprecated in version 1.0.0
	 * @todo Remove in Version 1.1.0
	 * @return void
	 */
	public function theme_setup() {
		add_theme_support( 'menus' );
	}
}
