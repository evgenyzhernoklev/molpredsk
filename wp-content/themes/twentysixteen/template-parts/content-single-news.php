<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php
	// внутренняя страница новостей
?>

<div class="singlePostWrapper singlePostWrapper--news clearfix">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_title( '<h1 class="entry-title titleNews">', '</h1>' ); ?>
		<p class="entry-date dateNews"><?php echo get_the_date(); ?></p>

		<div class="postLinksContent">
			<?php
				the_content();

				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				) );

				// if ( '' !== get_the_author_meta( 'description' ) ) {
				// 	get_template_part( 'template-parts/biography' );
				// }
			?>
		</div><!-- .entry-content -->
	</article><!-- #post-## -->
</div>
