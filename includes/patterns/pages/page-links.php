<?php
/**
 * Page Links
 * 
 * @package lsx
 */

return array(
	'title'	  => __( 'Page Links', 'lsx-design' ),
	'categories' => array( 'pages' ),
	'content'	=> '<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"left":"30px","top":"var:preset|spacing|x-large","right":"30px","bottom":"var:preset|spacing|x-large"}}},"className":"is-style-full-height","layout":{"inherit":true,"type":"constrained"}} -->
    <div class="wp-block-group alignfull is-style-full-height" style="margin-top:0px;padding-top:var(--wp--preset--spacing--x-large);padding-right:30px;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:30px"><!-- wp:group -->
    <div class="wp-block-group">
    <!-- wp:image {"align":"center","id":3489,"width":120,"height":120,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
    <figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="' .  esc_url( get_theme_file_uri() ) . '/assets/images/lsxd-placeholder-contrast-800x800.jpg'. '"  alt="' . esc_attr__( 'Sample Image', 'lsx-design' ). '" class="wp-image-3489" width="120" height="120"/></figure>
    <!-- /wp:image -->
    <!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
    <h2 class="has-text-align-center has-x-large-font-size" id="your-name-1">' .  esc_html__( 'Your Name', 'lsx-design' ). '</h2>
    <!-- /wp:heading -->
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">' .  esc_html__( 'Company Name', 'lsx-design' ). '<br><a href="mailto:name@company.com">name@company.com</a></p>
    <!-- /wp:paragraph -->
    <!-- wp:social-links {"iconBackgroundColor":"contrast","iconBackgroundColorValue":"#000","size":"has-normal-icon-size","align":"center","style":{"spacing":{"blockGap":"10px","margin":{"bottom":"var:preset|spacing|medium"}}},"className":"has-icon-base-color","layout":{"type":"flex","justifyContent":"center"}} -->
    <ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-background-color has-icon-base-color" style="margin-bottom:var(--wp--preset--spacing--medium)">
    <!-- wp:social-link {"url":"#","service":"facebook"} /-->
    <!-- wp:social-link {"url":"#","service":"instagram"} /-->
    <!-- wp:social-link {"url":"#","service":"twitter"} /-->
    <!-- wp:social-link {"url":"#","service":"dribbble"} /-->
    <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
    </ul>
    <!-- /wp:social-links -->
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"},"style":{"spacing":{"blockGap":"10px"}}} -->
    <div class="wp-block-buttons">
    <!-- wp:button {"width":100,"style":{"border":{"radius":0}}} -->
    <div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link no-border-radius">' .  esc_html__( 'Visit My Website', 'lsx-design' ). '</a></div>
    <!-- /wp:button -->
    <!-- wp:button {"width":100,"style":{"border":{"radius":0}}} -->
    <div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link no-border-radius">' .  esc_html__( 'Read My Blog', 'lsx-design' ). '</a></div>
    <!-- /wp:button -->
    <!-- wp:button {"width":100,"style":{"border":{"radius":0}}} -->
    <div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link no-border-radius">' .  esc_html__( 'Download My Ebook', 'lsx-design' ). '</a></div>
    <!-- /wp:button -->
    <!-- wp:button {"width":100,"style":{"border":{"radius":0}}} -->
    <div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link no-border-radius">' .  esc_html__( 'Follow My Newsletter', 'lsx-design' ). '</a></div>
    <!-- /wp:button -->
    <!-- wp:button {"width":100,"style":{"border":{"radius":0}}} -->
    <div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link no-border-radius">' .  esc_html__( 'Listen to My Podcast', 'lsx-design' ). '</a></div>
    <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
    <!-- wp:spacer {"height":"40px"} -->
    <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center"><a href="#">' .  esc_html__( 'Made with LSX', 'lsx-design' ). '</a></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->
    ',
);

