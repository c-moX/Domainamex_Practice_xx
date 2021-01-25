<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				/* translators: %s: post title */
				printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'domainamex' ), get_the_title() );
			} else {
				printf(
					/* translators: 1: number of comments, 2: post title */
					_nx(
						'%1$s Reply to &ldquo;%2$s&rdquo;',
						'%1$s Replies to &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						'domainamex'
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}
			?>
		</h2>

		<ul class="comment-list">
			<?php
				wp_list_comments(
					array(
						'avatar_size' => 100,
						'callback' => 'domainamex_comment'
					)
				);
			?>
		</ul>

		<?php
		the_comments_pagination(array(
			'mid_size'   =>   3,
			'prev_text'  => __('Previous <i class="flaticon-left-arrow"></i>', 'textdomain'),
			'next_text'  => __('<i class="flaticon-right-arrow"></i> Next', 'textdomain'),
		));

	endif; // Check for have_comments().

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>

		<p class="no-comments"><?php _e( 'Comments are closed.', 'domainamex' ); ?></p>
		<?php
	endif;
	?>

</div><!-- #comments -->





<!--- #Start my_comment_form# --->
<div id="comments">
<h2><?php _e('Add Comment','domainamex');?></h2>
	<?php 
		$domainamex_comment_fields = array();
		$domainamex_name_field_placeholder = __('Name','domainamex');
		$domainamex_email_field_placeholder = __('E-mail','domainamex');
		$domainamex_url_field_placeholder = __('Website','domainamex');
		
		$domainamex_comment_fields['author']=<<<EOD
			<div class="one_third first">
                <label for="name">Name <span>*</span></label>
                <input type="text" id="author" name="author" placeholder="" size="22" required>
            </div>
EOD;


		$domainamex_comment_fields['email'] = <<<EOD
			<div class="one_third">
                <label for="email">Mail <span>*</span></label>
                <input type="email" name="email" id="email" placeholder="" size="22" required>
            </div>	

EOD;

		$domainamex_comment_fields['url'] = <<<EOD
			<div class="one_third">
                <label for="url">Website</label>
                <input type="url" name="url" id="url" placeholder="" size="22">
            </div>

EOD;
		$domainamex_comment_field = <<<EOD
			<div class="block clear">
                <label for="comment">Your Comment</label>
                <textarea name="comment" id="comment" cols="25" rows="10" placeholder=""></textarea>
            </div>
EOD;
		
		$domainamex_comment_submit_button = <<<EOD
			<div>
                <input type="submit" name="submit" id="submit" value="Submit Form">
            </div>
EOD;
				$domainamex_comment_form_arguments = array(
					'fields'=>$domainamex_comment_fields,
					'comment_field'=>$domainamex_comment_field,
					'submit_button'=>$domainamex_comment_submit_button,
					'class_form'=>'msg_form',
					'comment_notes_before'=>'<p></p>',
					//'comment_notes_after'=>'<p>Your email address will not be published. Required fields are marked *</p>',
					'title_reply'=>''
				);

				comment_form($domainamex_comment_form_arguments);
				?>

</div>
	
	