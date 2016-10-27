<?php
/*
 Template Name: Список постов "Новости"
*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main site-main-titleNoImg" role="main">
		<h1 class="entry-title"><?php the_title() ?></h1>

		<div class="colsFlex colsFlexGrid">
			<?php
				$args = array(
							'post_type' => 'news_molpred',
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
		?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
