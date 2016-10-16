<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php
	// Retrieves the stored value from the database
	$meta_date_custom = get_post_meta( get_the_ID(), 'dates-meta-original', true );
	$meta_place_custom = get_post_meta( get_the_ID(), 'place-meta-original', true );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<span class="sticky-post"><?php _e( 'Featured', 'twentysixteen' ); ?></span>
		<?php endif; ?>

		<?php if( !empty( $meta_date_custom ) ) {
			echo '<div class="metaCustom__date">' . $meta_date_custom . '</div>';
		} ?>

		<?php if( !empty( $meta_place_custom ) ) {
			echo '<div class="metaCustom__place"><p class="metaCustom__place__info">Место:</p>' . $meta_place_custom . '</div>';
		} ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<?php twentysixteen_excerpt(); ?>
</article><!-- #post-## -->
