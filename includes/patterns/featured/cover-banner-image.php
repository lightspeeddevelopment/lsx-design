<?php
/**
 * Cover Banne with Image
 *
 * @package lsx-design
 */

return array(
	'title'      => __( 'Cover Banner with Image', 'lsx-design' ),
	'categories' => array( 'featured' ),
	'content'    => '<!-- wp:cover {"url":""' . esc_url( get_theme_file_uri() ) . '/assets/images/lsxd-placeholder-contrst-1920x1200.jpg","dimRatio":40,"customOverlayColor":"#000000","minHeight":707,"minHeightUnit":"px","contentPosition":"center center","isDark":false,"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}}} -->
    <div class="wp-block-cover alignfull is-light" style="margin-bottom:var(--wp--preset--spacing--medium);min-height:707px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim" style="background-color:#000000"></span><img class="wp-block-cover__image-background" alt="" src=""' . esc_url( get_theme_file_uri() ) . '/assets/images/lsxd-placeholder-contrst-1920x1200.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"48px","lineHeight":"1.2"}},"className":"wp-block-heading alignwide has-white-color has-text-color"} -->
    <h2 class="wp-block-heading has-text-align-center alignwide has-white-color has-text-color" style="font-size:48px;line-height:1.2"><strong>Featured: Heading</strong></h2>
    <!-- /wp:heading -->
    
    <!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"width":""} -->
    <div class="wp-block-column"><!-- wp:paragraph {"align":"center","style":{"color":{"text":"#ffffff"}}} -->
    <p class="has-text-align-center has-text-color" style="color:#ffffff">Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum. Fringilla nec accumsan eget, facilisis mi justo, luctus eu pellentesque vitae gravida <em>non diam accumsan</em>.</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons {"className":"wp-block-button has-custom-width wp-block-button__width-75 is-style-fill","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
    <div class="wp-block-buttons wp-block-button has-custom-width wp-block-button__width-75 is-style-fill"><!-- wp:button {"width":25,"className":"is-style-pill"} -->
    <div class="wp-block-button has-custom-width wp-block-button__width-25 is-style-pill"><a class="wp-block-button__link wp-element-button">Start Here</a></div>
    <!-- /wp:button -->
    
    <!-- wp:button {"textColor":"base","width":25,"className":"is-style-pill-outline"} -->
    <div class="wp-block-button has-custom-width wp-block-button__width-25 is-style-pill-outline"><a class="wp-block-button__link has-base-color has-text-color wp-element-button">View More</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->
    
    <!-- wp:column -->
    <div class="wp-block-column"></div>
    <!-- /wp:column --></div></div>
    <!-- /wp:cover -->',
);

