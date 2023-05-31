<?php
/**
 * Footer with text, links.
 *
 * @package lsx-design
 */

return array(
	'title'      => __( 'Hero 3 Colum ', 'lsx-design' ),
	'categories' => array( 'featured' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|x-large","right":"30px","bottom":"var:preset|spacing|x-large","left":"30px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;padding-top:var(--wp--preset--spacing--x-large);padding-right:30px;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:30px"><!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="has-text-align-center has-x-large-font-size" id="image-heading-text-button-1">' . esc_html__( 'Image, heading, text, button.', 'lsx-design' ) . '</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<!-- /wp:paragraph -->
<!-- wp:spacer {"height":40} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"id":676,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( get_theme_file_uri() ) . '/assets/images/lsxd-placeholder-contrast-1200x1200.jpg' . '"  alt="' . esc_attr__( 'Sample Image', 'lsx-design' ) . '" class="wp-image-676"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="has-text-align-center" id="sample-heading-1">' . esc_html__( 'Sample Heading', 'lsx-design' ) . '</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris finibus dolor ex, non hendrerit purus vulputate blandit.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link no-border-radius">' . esc_html__( 'Learn More', 'lsx-design' ) . '</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"id":676,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( get_theme_file_uri() ) . '/assets/images/lsxd-placeholder-contrast-1200x1200.jpg' . '"  alt="' . esc_attr__( 'Sample Image', 'lsx-design' ) . '" class="wp-image-676"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="has-text-align-center" id="sample-heading-2">' . esc_html__( 'Sample Heading', 'lsx-design' ) . '</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris finibus dolor ex, non hendrerit purus vulputate blandit.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link no-border-radius">' . esc_html__( 'Learn More', 'lsx-design' ) . '</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"id":676,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="' . esc_url( get_theme_file_uri() ) . '/assets/images/lsxd-placeholder-contrast-1200x1200.jpg' . '"  alt="' . esc_attr__( 'Sample Image', 'lsx-design' ) . '" class="wp-image-676"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="has-text-align-center" id="sample-heading-3">' . esc_html__( 'Sample Heading', 'lsx-design' ) . '</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris finibus dolor ex, non hendrerit purus vulputate blandit.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link no-border-radius">' . esc_html__( 'Learn More', 'lsx-design' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);
