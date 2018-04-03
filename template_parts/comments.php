<?php
$args     = array(
	'status'  => 'hold',
	'number'  => '5',
	'post_id' => 1, // use post_id, not post_ID
);
$comments = get_comments( $args );
foreach ( $comments as $comment ) :
	echo( $comment->comment_author . '<br />' . $comment->comment_content );
endforeach;

wp_list_comments( array(
	'walker' => new Walker_Comment()
) );


comment_form(); ?>