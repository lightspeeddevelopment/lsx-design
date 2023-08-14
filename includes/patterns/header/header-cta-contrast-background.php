<?php
/**
 * Header CTA
 *
 * @package lsx-design
 */

return array(
	'title'      => __( 'Header CTA Contrast', 'lsx-design' ),
	'categories' => array( 'header' ),
	'content'    => '
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"backgroundColor":"contrast","layout":{"inherit":true,"type":"constrained","justifyContent":"center"},"extUtilities":[]} -->
    <div class="wp-block-group alignfull has-contrast-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var(--wp--preset--spacing--x-small, 1rem)","top":"var(--wp--preset--x-small, 1.00rem)"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
    <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--small, 1.00rem);padding-bottom:var(--wp--preset--spacing--large, 1rem)"><!-- wp:group {"layout":{"type":"flex"}} -->
    <div class="wp-block-group"><!-- wp:image {"align":"center","id":379,"width":164,"height":65,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image aligncenter size-full is-resized"><img src="' . esc_url( get_theme_file_uri() ) . '/assets/images/lsxd-white.png' . '" alt="" class="wp-image-379" width="164" height="65"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:group -->
    
    <!-- wp:navigation {"textColor":"base","icon":"menu","overlayBackgroundColor":"contrast","overlayTextColor":"base","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"},"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"},"typography":{"fontSize":"18px"}}} /-->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"cta","textColor":"base","className":"is-style-cta"} -->
    <div class="wp-block-button is-style-cta"><a class="wp-block-button__link has-base-color has-cta-background-color has-text-color has-background wp-element-button" href="#">View on Github</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->',
);
