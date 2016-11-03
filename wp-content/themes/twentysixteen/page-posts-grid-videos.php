<?php
/*
 Template Name: Список постов "Видео"
*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main site-main-titleNoImg" role="main">
		<h1 class="entry-title linkTabTitle">
			<a class="linkTab" href="<?php echo get_permalink( 485 ); ?>">Фото</a>
			<span class="linkTab linkTab--active"><?php the_title() ?></span>
		</h1>

		<div class="colsFlex colsFlexGrid">
			<?php
				$args = array(
							'post_type' => 'videos',
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
