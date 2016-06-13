
<?php
/**
 * Template part for displaying tags.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ssnblog
 *
 */
$args = array( 'orderby' => 'count', 'order' => 'DESC', 'number' => '5' );
$tags = get_tags($args);

$html = '<ul class="tags-list">';
foreach ( $tags as $tag ) {
  $tag_link = get_tag_link( $tag->term_id );
  $tag_name = ucwords($tag->name);
  $html .= "<li><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
  $html .= "{$tag_name}</a></li>";
}
$html .= '</ul>';
echo $html;