<?php
/**
 * Template part for displaying aside posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package popper
 */

?>

<?php
// Is this the first post of the front page?
$first_post = $wp_query->current_post == 0 && !is_paged() && is_front_page();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content">
        <?php the_content(); ?>
</div>

    <footer class="entry-footer">
        <div class="index-entry-meta">'
           <?php popper_index_posted_on(); ?>
        </div>
    </footer><!-- .entry-footer -->


</article><!-- #post-## -->