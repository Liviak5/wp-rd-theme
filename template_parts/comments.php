<?php
//TODO: Kommentare sollten angezeigt werden und irgend ein Formular zum Erfassen
$args     = array(
	'status'  => 'hold',
	'number'  => '5',
	'post_id' => 1,
);
$comments = get_comments( $args );
foreach ( $comments as $comment ) :
	echo $comment->comment_author . '<br />' . $comment->comment_content;
endforeach;

wp_list_comments( array(
	'walker' => new Walker_Comment()
) );


comment_form(); ?>