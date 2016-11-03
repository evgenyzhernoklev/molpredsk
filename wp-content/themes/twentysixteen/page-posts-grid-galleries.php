<?php
/*
 Template Name: Список постов "Фото"
*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main site-main-titleNoImg" role="main">
		<h1 class="entry-title linkTabTitle">
			<span class="linkTab linkTab--active"><?php the_title() ?></span>
			<!-- <a class="linkTab" href="<?php echo get_permalink( 412 ); ?>">Видео</a> -->
		</h1>

		<div class="colsFlex colsFlexGrid">
			<?php
				$args = array(
							'post_type' => 'galleries',
							'publish' => true,
							'paged' => get_query_var('paged'),
							'posts_per_page' => 6
					 	);

				query_posts($args);

				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'post-grid' );
				endwhile;
			?>
		</div>

		<?php
			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

			wp_reset_query();
		?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
