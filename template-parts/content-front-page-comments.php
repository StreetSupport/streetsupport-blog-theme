
<?php
/**
 * Template part for displaying categories posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ssnblog
 */

      $number=3; // number of recent comments desired
      $post_id = get_the_ID();
      $comments = $wpdb->get_results("SELECT * FROM $wpdb->comments WHERE comment_post_ID=$post_id AND comment_approved = '1' ORDER BY comment_date_gmt DESC LIMIT $number");
   ?>

   <ul id="recentcomments">
      <?php if ($comments) :
         echo '<h2>' . sizeof($comments) . ' Recent Comments</h2>';
         foreach ( (array) $comments as $comment) :
            echo  '<li class="recentcomments">' . sprintf(__('%1$s on %2$s'), get_comment_author_link(), '<a href="'. get_comment_link($comment->comment_ID) . '">' . get_the_title($comment->comment_post_ID) . '</a>') . '</li>';
         endforeach;
      endif;?>
   </ul> <!-- end of comments -->
</div>