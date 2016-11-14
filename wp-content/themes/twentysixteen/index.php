<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<?php
		// отображение страницы списка событий
	?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
			<?php endif; ?>

			<header class="headerEvents">
				<img src="https://molpredsk.ru/wp-content/uploads/2016/10/bg_events.png" />
				<h1 class="entry-title"><?php echo single_post_title(); ?></h1>
			</header>

			<?php


			/*
			 * Сортировка массива по двум параметрам с помощью usort()
			 */
			// function _usort_object_by_date($a, $b) {
			// 	// поля по которым сортировать
			// 	$array = array( 'month-meta-original'=>'ASC', 'dates-meta-original'=>'ASC' );
			//
			// 	$res = 0;
			// 	foreach( $array as $k=>$v ){
			// 		if( $a->$k == $b->$k ) continue;
			//
			// 		$res = ( $a->$k < $b->$k ) ? -1 : 1;
			// 		if ( $v=='ASC' ) $res= -$res;
			// 		break;
			// 	}
			//
			// 	return $res;
			// }

			$args = array(
						'post_type' => 'post',
						'publish' => true,
						'paged' => get_query_var('paged'),
						'posts_per_page' => 10

						, 'meta_key' => 'number-date-meta-original'
						, 'orderby' => 'meta_value_num'
						, 'order' => 'ASC'
					);

			query_posts($args);

			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

			wp_reset_query();

			get_sidebar( 'content-bottom' );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
