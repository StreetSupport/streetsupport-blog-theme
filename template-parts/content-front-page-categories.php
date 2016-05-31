<?php
/**
 * Template part for displaying categories posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ssnblog
 */

$args = array(
  'orderby' => 'name',
  'parent' => 0
  );
$categories = get_categories( $args );
foreach ( $categories as $category ) {
    echo '<a href="' . get_category_link( $category->term_id ) . '"><span class="green-highlight">' . $category->name . '</span></a><br />';
}
?>



