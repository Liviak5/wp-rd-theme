<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */


/*
Do not delete these lines.
Prevent access to this file directly
*/

defined( 'ABSPATH' ) || die( __( 'Please do not load this page directly. Thanks!', 'foundationpress' ) );
if ( post_password_required() ) { ?>
    <section id="comments">
        <div class="notice">
            <p class="bottom"><?php _e( 'Dieser Post ist Passwort-geschützt. Geben Sie das Passwort ein um Kommentare zu sehen.', 'foundationpress' ); ?></p>
        </div>
    </section>
	<?php
	return;
}
?>

<?php
if ( comments_open() ) :
	if ( ( is_page() || is_single() ) && ( ! is_home() && ! is_front_page() ) ) :
		?>
        <section id="respond">
            <h3>
				<?php
				comment_form_title(
					__( 'Kommentar hinterlassen', 'foundationpress' ),
					/* translators: %s: author of comment being replied to */
					__( 'Leave a Reply to %s', 'foundationpress' )
				);
				?>
            </h3>
            <p class="cancel-comment-reply"><?php cancel_comment_reply_link(); ?></p>
			<?php if ( get_option( 'comment_registration' ) && ! is_user_logged_in() ) : ?>
                <p>
					<?php
					/* translators: %s: login url */
					printf(
						__( 'Du musst <a href="%s">eingeloggt</a> sein um Kommentare zu erfassen.', 'foundationpress' ),
						wp_login_url( get_permalink() )
					);
					?>
                </p>
			<?php else : ?>
                <form action="<?php echo get_option( 'siteurl' ); ?>/wp-comments-post.php" method="post"
                      id="commentform">
					<?php if ( is_user_logged_in() ) : ?>
                        <p>
							<?php
							/* translators: %1$s: site url, %2$s: user identity  */
							printf(
								__( 'Eingeloggt als <a href="%1$s/wp-admin/profile.php">%2$s</a>.', 'foundationpress' ),
								get_option( 'siteurl' ),
								$user_identity
							);
							?> <a href="<?php echo wp_logout_url( get_permalink() ); ?>"
                                  title="<?php __( 'von Account ausloggen', 'foundationpress' ); ?>"><?php _e( '&raquo; Ausloggen', 'foundationpress' ); ?></a>
                        </p>
					<?php else : ?>
                        <div class="comment__form-item">
                            <label for="author">
								<?php
								_e( 'Name', 'foundationpress' );
								if ( $req ) {
									_e( ' (erfordert)', 'foundationpress' );
								}
								?>
                            </label>
                            <input type="text" class="five" name="author" id="author"
                                   value="<?php echo esc_attr( $comment_author ); ?>" size="22"
                                   tabindex="1" <?php if ( $req ) {
								echo "aria-required='true'";
							} ?>>
                        </div>
                        <div class="comment__form-item">
                            <label for="email">
								<?php
								_e( 'E-mail', 'foundationpress' );
								if ( $req ) {
									_e( ' (erfordert, wird nicht publiziert)', 'foundationpress' );
								}
								?>
                            </label>
                            <input type="text" class="five" name="email" id="email"
                                   value="<?php echo esc_attr( $comment_author_email ); ?>" size="22"
                                   tabindex="2" <?php if ( $req ) {
								echo "aria-required='true'";
							} ?>>
                        </div>
					<?php endif; ?>
                    <div class="comment__form-item">
                        <label for="comment">
							<?php
							_e( 'Kommentar', 'foundationpress' );
							?>
                        </label>
                        <textarea name="comment" id="comment" tabindex="3"></textarea>
                    </div>
                    <div class="comment__form-item">
                        <input name="submit" class="button" type="submit" id="submit" tabindex="4"
                               value="<?php esc_attr_e( 'Kommentar senden', 'foundationpress' ); ?>">
                    </div>
					<?php comment_id_fields(); ?>
					<?php do_action( 'comment_form', $post->ID ); ?>
                </form>
			<?php endif; // If registration required and not logged in.
			?>
        </section>
	<?php
	endif; // If you delete this the sky will fall on your head.
endif; // If you delete this the sky will fall on your head.

if ( have_comments() ) :
	if ( ( is_page() || is_single() ) && ( ! is_home() && ! is_front_page() ) ) :
		?>
        <section id="comments">
			<?php

			wp_list_comments(
				array(
					'walker'            => new Foundationpress_Comments(),
					'max_depth'         => '',
					'style'             => 'ul',
					'callback'          => null,
					'end-callback'      => null,
					'type'              => 'all',
					'reply_text'        => __( 'Antworten', 'foundationpress' ),
					'page'              => '',
					'per_page'          => '',
					'avatar_size'       => 48,
					'reverse_top_level' => null,
					'reverse_children'  => '',
					'format'            => 'html5',
					'short_ping'        => false,
					'echo'              => true,
					'moderation'        => __( 'Ihr Kommentar wartet auf Freigabe.', 'foundationpress' ),
				)
			);

			?>
        </section>
	<?php
	endif;
endif;
?>