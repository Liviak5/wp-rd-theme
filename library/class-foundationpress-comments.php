<?php
/**
 * FoundationPress Comments
 *
 * @package FoundationPress
 */

if ( ! class_exists( 'Foundationpress_Comments' ) ) :
	class Foundationpress_Comments extends Walker_Comment {

		// Init classwide variables.
		public $tree_type = 'comment';

		// Comment ID
		public $db_fields = array(
			'parent' => 'comment_parent',
			'id'     => 'comment_ID',
		);

		/** CONSTRUCTOR
		 * Um an den Anfang der Liste zu kommen */
		function __construct() { ?>
            <ul class="comment__list">
		<?php }

		/** START_LVL
		 * beginnt Liste vor dem Hinzufügen des ersten Child-Elements. */
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$GLOBALS['comment_depth'] = $depth + 1; ?>

        <ul class="children">
	<?php }

		/** END_LVL
		 * Beendet die Liste nach dem alle Elemente hinzugefügt wurden. */
	function end_lvl( &$output, $depth = 0, $args = array() ) {
		$GLOBALS['comment_depth'] = $depth + 1; ?>

        </ul>

	<?php }

		/** START_EL */
	function start_el( &$output, $comment, $depth = 0, $args = array(), $id = 0 ) {
		$depth ++;
		$GLOBALS['comment_depth'] = $depth;
		$GLOBALS['comment']       = $comment;
		$parent_class             = ( empty( $args['has_children'] ) ? '' : 'parent' ); ?>

        <li class="comment__list-item" id="comment-<?php comment_ID(); ?>">
        <!-- comment-body -->
        <article class="comment-body">
            <!-- comment-author -->
            <header class="comment-author">

				<?php echo get_avatar( $comment, $args['avatar_size'] ); ?>

                <div class="author-meta vcard author">
					<?php
					/* translators: %s: comment author link */
					printf(
						__( '<cite class="fn">%s</cite>', 'foundationpress' ),
						get_comment_author_link()
					);
					?>
                    <!-- /.comment-meta -->
                    <span class="comment-meta comment-meta-data hide">
                        <a href="<?php echo htmlspecialchars( get_comment_link( get_comment_ID() ) ); ?>"><?php comment_date(); ?>
                            at <?php comment_time(); ?></a> <?php edit_comment_link( '(Edit)' ); ?>
                    </span>
                </div>

            </header>
            <!-- comment-content -->
            <section class="comment-content">
				<?php if ( ! $comment->comment_approved ) : ?>
                    <div class="notice">
                        <p class="bottom"><?php _e( 'Ihr Kommentar wartet auf Freigabe.', 'foundationpress' ); ?></p>
                    </div>
				<?php else : comment_text(); ?>
				<?php endif; ?>
            </section>

            <!-- reply -->
            <div class="comment-reply">
				<?php
				$reply_args = array(
					'depth'     => $depth,
					'max_depth' => $args['max_depth'],
				);

				comment_reply_link( array_merge( $args, $reply_args ) ); ?>
            </div>
        </article>

	<?php }

	function end_el( & $output, $comment, $depth = 0, $args = array() ) { ?>
        </li>
	<?php }

		/** DESTRUCTOR */
		function __destruct() { ?>

            </ul><!-- /#comment-list -->

			<?php
		}
	}
endif;

