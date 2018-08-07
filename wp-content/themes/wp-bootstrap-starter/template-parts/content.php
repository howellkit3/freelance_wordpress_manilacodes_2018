<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="thumbnail-wrapper">
	<div class="post-thumbnail">
		<?php the_post_thumbnail(); ?>
	</div>
	<div class="post-thumb-content">
	<div class="thumbnail-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;?>

	</div><!-- .entry-header -->
	<div class="thumbnail-content">
		<?php
		$content = get_the_content();
        if ( is_single() ) :
        	the_content();
        else :
            echo mb_strimwidth($content, 0, 400, '...');
        endif;

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	</div>
	</div>

</article><!-- #post-## -->
