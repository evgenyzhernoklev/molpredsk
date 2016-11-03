<?php
/*
 Template Name: Документы
*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main site-main-titleNoImg site-main-docs" role="main">
		<h1 class="entry-title linkTabTitle">
			<span class="linkTab linkTab--active"><?php the_title() ?></span>
			<a class="linkTab" href="<?php echo get_permalink( 458 ); ?>">Библиотека начинающего предпринимателя</a>
		</h1>

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
		?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content colsFlex colsFlexGrid">
					<?php the_content(); ?>
				</div><!-- .entry-content -->

				<?php
					edit_post_link(
						sprintf(
							/* translators: %s: Name of current post */
							__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
							get_the_title()
						),
						'<footer class="entry-footer"><span class="edit-link">',
						'</span></footer><!-- .entry-footer -->'
					);
				?>

			</article><!-- #post-## -->

		<?php
		// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
