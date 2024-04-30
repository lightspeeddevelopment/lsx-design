<?php
/**
 * Posts Style 1 Cards 
 *
 * @package lsx-design
 */

return array(
	'title'      => __( 'Posts Style 1 Cards ', 'lsx-design' ),
	'categories' => array( 'cards' ),
	'content'    => '<!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"perPage":12,"parents":[]},"enhancedPagination":true,"lock":{"move":false,"remove":false},"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"className":"is-style-badges-img","layout":{"type":"grid","columnCount":3}} -->
    <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"bottom":"0","top":"0"}},"border":{"radius":"10px"},"color":{"background":"#e9edf72e"}},"className":"project-","layout":{"type":"constrained"}} -->
    <div class="wp-block-group project- has-background" style="border-radius:10px;background-color:#e9edf72e;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"radius":{"topLeft":"12px","topRight":"12px"}}}} /-->
    
    <!-- wp:group {"style":{"spacing":{"blockGap":"8px","padding":{"top":"12px","right":"12px","left":"12px","bottom":"8px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":{"bottomLeft":"12px","bottomRight":"12px"},"width":"1px","color":"var( \u002d\u002dwp\u002d\u002dcustom\u002d\u002dcolour\u002d\u002dneutral\u002d\u002d100 )"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-border-color" style="border-color:var( --wp--custom--colour--neutral--100 );border-width:1px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;margin-top:0;margin-bottom:0;padding-top:12px;padding-right:12px;padding-bottom:8px;padding-left:12px"><!-- wp:post-title {"isLink":true,"style":{"layout":{"flexSize":"min(2.5rem, 3vw)","selfStretch":"fixed"},"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.35"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"medium"} /-->
    
    <!-- wp:group {"style":{"spacing":{"blockGap":"0.3em"}},"layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"},"fontSize":"tiny"} -->
    <div class="wp-block-group has-tiny-font-size"><!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"contrast"} /-->
    
    <!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"textColor":"contrast-2"} -->
    <p class="has-contrast-2-color has-text-color" style="padding-top:0;padding-bottom:0">—</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}},"textColor":"contrast-2"} -->
    <p class="has-contrast-2-color has-text-color" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0">by</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:post-author-name {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"contrast"} /-->
    
    <!-- wp:post-terms {"term":"category","prefix":" ","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"className":"is-style-primary-badge"} /--></div>
    <!-- /wp:group -->
    
    <!-- wp:post-excerpt {"moreText":"READ MORE","showMoreOnNewLine":false,"excerptLength":20,"style":{"layout":{"flexSize":"min(2.5rem, 3vw)","selfStretch":"fixed"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"contrast-2","fontSize":"x-small"} /--></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->
    <!-- /wp:post-template -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:query-pagination {"paginationArrow":"chevron","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
    <!-- wp:query-pagination-previous {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->
    
    <!-- wp:query-pagination-numbers /-->
    
    <!-- wp:query-pagination-next {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->
    <!-- /wp:query-pagination --></div>
    <!-- /wp:group --></div>
    <!-- /wp:query -->',
);
