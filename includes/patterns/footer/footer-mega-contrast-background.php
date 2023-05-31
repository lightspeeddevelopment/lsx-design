<?php
/**
 * Footer with text, links.
 *
 * @package lsx-design
 */

return array(
	'title'      => __( 'Footer Mega Contrast', 'lsx-design' ),
	'categories' => array( 'footer' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"18px"},"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0px"}}},"backgroundColor":"contrast","textColor":"base","className":"has-background-color","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0px;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);font-size:18px"><!-- wp:columns {"align":"wide","style":{"elements":{"link":{"color":[]}}}} -->
<div class="wp-block-columns alignwide has-link-color"><!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:heading {"level":4} -->
<h4 id="our-company">' . esc_html__( 'Our Company', 'lsx-design' ) . '</h4>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Quisque aliquam nisl quis metus taylor feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum vitae gravida non diam.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-fill-base"} -->
<div class="wp-block-button is-style-fill-base"><a class="wp-block-button__link no-border-radius wp-element-button" href="#">' . esc_html__( 'Learn More', 'lsx-design' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:heading {"level":4} -->
<h4 id="about-us">' . esc_html__( 'About Us', 'lsx-design' ) . '</h4>
<!-- /wp:heading -->
<!-- wp:list {"fontSize":"small"} -->
<ul class="has-small-font-size"><!-- wp:list-item -->
<li><a href="#">' . esc_html__( 'Start Here', 'lsx-design' ) . '</a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="#">' . esc_html__( 'Our Mission', 'lsx-design' ) . '</a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="#">' . esc_html__( 'Brand Guide', 'lsx-design' ) . '</a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="#">' . esc_html__( 'Newsletter', 'lsx-design' ) . '</a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="#">' . esc_html__( 'Accessibility', 'lsx-design' ) . '</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:heading {"level":4} -->
<h4 id="services">' . esc_html__( 'Services', 'lsx-design' ) . '</h4>
<!-- /wp:heading -->
<!-- wp:list {"fontSize":"small"} -->
<ul class="has-small-font-size"><!-- wp:list-item -->
<li><a href="#">' . esc_html__( 'Web Design', 'lsx-design' ) . '</a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="#">' . esc_html__( 'Development', 'lsx-design' ) . '</a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="#">' . esc_html__( 'Copywriting', 'lsx-design' ) . '</a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="#">' . esc_html__( 'Marketing', 'lsx-design' ) . '</a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="#">' . esc_html__( 'Social Media', 'lsx-design' ) . '</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:heading {"level":4} -->
<h4 id="connect">' . esc_html__( 'Connect', 'lsx-design' ) . '</h4>
<!-- /wp:heading -->
<!-- wp:list {"fontSize":"small"} -->
<ul class="has-small-font-size"><!-- wp:list-item -->
<li><a href="#">Facebook</a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="#">Instagram</a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="#">Twitter</a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="#">LinkedIn</a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="#">Dribbble</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);
