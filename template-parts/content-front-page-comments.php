
<?php
/**
 * Template part for displaying comments posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ssnblog
 *
 */

function recent_comments($no_comments = 3, $comment_len = 80) {
	$comments_query = new WP_Comment_Query();
	$comments = $comments_query->query( array( 'number' => $no_comments ) );
	$comm = '';
	?>
	<ul>
	<?php
		if ( $comments ) : foreach ( $comments as $comment ) :
			$comm .= '<li><a class="author" href="' . get_permalink( $comment->comment_post_ID ) . '#comment-' . $comment->comment_ID . '"> <span class="green-highlight">';
			$comm .= get_comment_author( $comment->comment_ID ) . '</span></a> ';
			$comm .= '<p> Posted in' . strip_tags( substr( apply_filters( 'get_comment_text', $comment->comment_content ), 0, $comment_len ) ) . '</p></li>';
		endforeach; else :
			$comm .= '<li>No comments.</li>';
		endif;
		echo $comm;
	}
	?>
	</ul>

 <?php recent_comments(); ?>
