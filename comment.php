<?php 
	if ( isset( $GLOBALS['comment_depth'] ) ) {
		$depth = intval( $GLOBALS['comment_depth'] );
	} else {
		$depth = 1;
	}

	$max_depth = intval( get_option( 'thread_comments_depth' ) );
?>

<?php echo get_avatar($comment, '64'); ?>
<div class="media-body">
  <h4 class="media-heading"><?php echo get_comment_author_link(); ?></h4>
  <time datetime="<?php echo comment_date('c'); ?>"><a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>"><?php printf(esc_html__('%1$s on %2$s', 'lsx'), get_comment_date(),  get_comment_time()); ?></a></time>
  <?php edit_comment_link(esc_html__('(Edit)', 'lsx'), '', ''); ?>
  
  <?php if ($comment->comment_approved == '0') : ?>
  <div class="alert alert-info">
    <?php esc_html_e('Your comment is awaiting moderation.', 'lsx'); ?>
  </div>
<?php endif; ?>

<?php comment_text(); ?>
<?php comment_reply_link( array( 'depth' => $depth, 'max_depth' => $max_depth ) );