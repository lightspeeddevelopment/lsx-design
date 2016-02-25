<?php
/**
 * WooCommerce Layout and  Functionality
 *
 * @package lsx
 * @subpackage woocommerce
 */

/*
 * Hooks
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'lsx_woocommerce_before_content', 10);
add_action('woocommerce_after_main_content', 'lsx_woocommerce_after_content', 10);

/*
 * Layout
 */

/**
 * Adds the top and primary divs for the layout.
 * @package lsx
 * @subpackage woocommerce
 * @category 	layout
 */
function lsx_woocommerce_before_content(){ ?>
	<div id="primary" class="content-area <?php echo lsx_main_class(); ?>">

		<?php lsx_content_before(); ?>

		<main id="main" class="site-main" role="main">
		
		<?php lsx_content_top(); ?>
<?php }s

/**
 * Adds the closing divs for primary and main to woocommerce.
 * @package lsx
 * @subpackage woocommerce
 * @category 	layout
 */
function lsx_woocommerce_after_content(){ ?>
		<?php lsx_content_bottom(); ?>

		</main><!-- #main -->

		<?php lsx_content_after(); ?>
		
	</div><!-- #primary -->
<?php }