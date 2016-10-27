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
	// шаблон для отображения новости на странице списка новостей
?>
<article class="colFlex colFlex--2" id="post-<?php the_ID(); ?>" >
	<?php if ( has_post_thumbnail() ) { ?>
		<a class="colFlexImgWrapper post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
			<?php the_post_thumbnail( 'large', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
		</a>
	<?php } ?>

	<?php the_title( sprintf( '<h2 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

	<div class="colFlexExcerpt">
		<?php the_excerpt(); ?>
	</div>
</article>
