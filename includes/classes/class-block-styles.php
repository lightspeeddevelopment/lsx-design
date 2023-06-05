<?php
/**
 * The block styles file
 *
 * @package lsx-design
 */

namespace LSXD\Classes;

/**
 * All the functions that run on the frontend and the rendering of the blocks.
 *
 * @package   LSX
 * @author    LightSpeed
 * @license   GPL3
 * @link
 * @copyright 2023 LightSpeed
 */
class Block_Styles {

	/**
	 * Holds the array of block stylesheets
	 *
	 * @var array $block_assets Holds the block assets array.
	 */
	public $block_assets = array();

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
		add_action( 'init', array( $this, 'register_block_styles' ), 10 );
		add_action( 'enqueue_block_editor_assets', array( $this, 'block_editor_styles' ) );
		add_action( 'after_setup_theme', array( $this, 'enqueue_block_styles' ), 10 );
	}

	/**
	 * Register our block styles.
	 *
	 * @return void
	 */
	public function register_block_styles() {

		$block_styles = array(
			'core/separator' => array(
				'wide' => __( 'Wide', 'lsx-design' ),
				'elegant' => __( 'Elegant', 'lsx-design' ),
			),
			'core/search' => array(
				'header' => __( 'Header', 'lsx-design' ),
			),
			'core/button'    => array(
				'cta'             => __( 'CTA', 'lsx-design' ),
				'pill'            => __( 'Pill', 'lsx-design' ),
				'pill-outline'    => __( 'Pill Outline', 'lsx-design' ),
				'rounded'         => __( 'Rounded', 'lsx-design' ),
				'shadow'          => __( 'Shadow', 'lsx-design' ),
				'outline-shadow'  => __( 'Outline Shadow', 'lsx-design' ),
				'link'            => __( 'Link', 'lsx-design' ),
				'underline-hover' => __( 'Unerline Hover', 'lsx-design' ),
			),
			'core/quote'     => array(
				'contrast-background'  => __( 'Contrast', 'lsx-design' ),
				'primary-background'   => __( 'Primary', 'lsx-design' ),
				'secondary-background' => __( 'Secondary', 'lsx-design' ),
			),
			'core/pullquote' => array(
				'contrast-background'  => __( 'Contrast', 'lsx-design' ),
				'primary-background'   => __( 'Primary', 'lsx-design' ),
				'secondary-background' => __( 'Secondary', 'lsx-design' ),
			),
			'core/image'     => array(
				'inner-border' => __( 'Inner Border', 'lsx-design' ),
				'shadow'       => __( 'Shadow', 'lsx-design' ),
			),
			'core/paragraph' => array(
				'content-box'         => __( 'Content Box', 'lsx-design' ),
				'dark-content-box'    => __( 'Dark Content Box', 'lsx-design' ),
				'failure-content-box' => __( 'Failure Content Box', 'lsx-design' ),
				'warning-content-box' => __( 'Warning Content Box', 'lsx-design' ),
				'success-content-box' => __( 'Success Content Box', 'lsx-design' ),
			),
			'core/heading'   => array(
				'underline-primary'            => __( 'Underline #1', 'lsx-design' ),
				'underline-secondary-tertiary' => __( 'Underline #2', 'lsx-design' ),
				'underline-tertiary-primary'   => __( 'Underline #3', 'lsx-design' ),
				'underline'                    => __( 'Underline #4', 'lsx-design' ),
			),
		);

		foreach ( $block_styles as $block => $styles ) {
			foreach ( $styles as $style_name => $style_label ) {
				register_block_style(
					$block,
					array(
						'name'  => $style_name,
						'label' => $style_label,
					)
				);
			}
		}
	}

	/**
	 * Registers the editor styles
	 *
	 * @return void
	 */
	public function block_editor_styles() {
		wp_enqueue_style( 'editor-styles', get_template_directory_uri() . '/assets/css/editor-style.css', false, LSXD_VERSION, 'all' );
	}

	/**
	 * Returns an array of the block assets.
	 *
	 * @return array
	 */
	private function get_block_assets() {
		$this->block_assets = array(
			'core/separator' => array(
				'handle' => 'lsxd-separator-block-styles',
				'src'    => get_template_directory_uri() . '/assets/css/blocks/separator.css',
				'path'   => get_template_directory() . '/assets/css/blocks/separator.css',
			),
			'core/search' => array(
				'handle' => 'lsxd-search-block-styles',
				'src'    => get_template_directory_uri() . '/assets/css/blocks/search.css',
				'path'   => get_template_directory() . '/assets/css/blocks/search.css',
			),
			'core/button'    => array(
				'handle' => 'lsxd-button-block-styles',
				'src'    => get_template_directory_uri() . '/assets/css/blocks/button.css',
				'path'   => get_template_directory() . '/assets/css/blocks/button.css',
			),
			'core/heading'   => array(
				'handle' => 'lsxd-heading-block-styles',
				'src'    => get_template_directory_uri() . '/assets/css/blocks/heading.css',
				'path'   => get_template_directory() . '/assets/css/blocks/heading.css',
			),
			'core/image'     => array(
				'handle' => 'lsxd-image-block-styles',
				'src'    => get_template_directory_uri() . '/assets/css/blocks/image.css',
				'path'   => get_template_directory() . '/assets/css/blocks/image.css',
			),
			'core/pullquote' => array(
				'handle' => 'lsxd-pullquote-block-styles',
				'src'    => get_template_directory_uri() . '/assets/css/blocks/pullquote.css',
				'path'   => get_template_directory() . '/assets/css/blocks/pullquote.css',
			),
			'core/paragraph' => array(
				'handle' => 'lsxd-paragraph-block-styles',
				'src'    => get_template_directory_uri() . '/assets/css/blocks/paragraph.css',
				'path'   => get_template_directory() . '/assets/css/blocks/paragraph.css',
			),
		);
		return $this->block_assets;
	}

	/**
	 * Registers our block specific styles.
	 *
	 * @return void
	 */
	public function enqueue_block_styles() {
		foreach ( $this->get_block_assets() as $block_name => $block_asset ) {
			wp_enqueue_block_style(
				$block_name,
				array(
					'handle' => $block_asset['handle'],
					'src'    => $block_asset['src'],
					'path'   => $block_asset['path'],
				),
			);
		}
	}
}
