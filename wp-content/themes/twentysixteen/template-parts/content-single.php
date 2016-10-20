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
	// Retrieves the stored value from the database
	$meta_date_custom = get_post_meta( get_the_ID(), 'dates-meta-original', true );
	$meta_month_custom = get_post_meta( get_the_ID(), 'month-meta-original', true );
	$meta_place_custom = get_post_meta( get_the_ID(), 'place-meta-original', true );

	$meta_file_custom = get_post_meta( get_the_ID(), 'link', true );
    $meta_idea_custom = get_post_meta( get_the_ID(), 'idea', true );
?>

<div class="singlePostWrapper clearfix">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
			// twentysixteen_excerpt();
		?>

		<div class="imgWrapper">
			<div class="imgWrapper__overlay"></div>
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<?php if( !empty( $meta_date_custom ) && !empty( $meta_month_custom ) ) {
					echo '<div class="entry-header__date">' . $meta_date_custom . ' ' . $meta_month_custom . '</div>';
				} ?>
			</header><!-- .entry-header -->

			<?php twentysixteen_post_thumbnail(); ?>
		</div>

		<div class="postLinksWrapper clearfix">
			<?php if( !empty( $meta_place_custom ) ) {
				echo '<div class="postLinksWrappe__place"><p>место:</p>' . $meta_place_custom . '</div>';
			} ?>
			<div class="postLinksBlock">
				<?php if( !empty( $meta_file_custom ) && $meta_file_custom != 'Выберите файл') {
					echo '<p class="postLinksBlock__item"><a download class="postLinksBlock__link postLinksBlock__link--twoLines" href="' . $meta_file_custom . '">Скачать положение<br/>о конкурсе</a></p>';
				} ?>

				<?php if( !empty( $meta_idea_custom ) && $meta_idea_custom != 'Выберите файл') {
					echo '<p class="postLinksBlock__item"><a download class="postLinksBlock__link" href="' . $meta_idea_custom . '">Подать свою идею</a></p>';
				} ?>
			</div>
		</div>

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

				if ( '' !== get_the_author_meta( 'description' ) ) {
					get_template_part( 'template-parts/biography' );
				}
			?>
		</div><!-- .entry-content -->
	</article><!-- #post-## -->
</div>
