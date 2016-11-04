<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">

		<div class="sliderTop" dir="rtl">
			<div class="sliderTop__slide sliderTopSlide">
				<p><img class="sliderTopSlide__img" src="wp-content/uploads/2016/10/slide11.png" /></p>
				<p class="sliderTopSlide__caption sliderTopSlide__caption--slide1">НАЧНИ БИЗНЕС <br/>С ВДОХНОВЕНИЯ</p>
			</div>
			<div class="sliderTop__slide sliderTopSlide">
				<p><img class="sliderTopSlide__img" src="wp-content/uploads/2016/10/slide2.png" /></p>
				<p class="sliderTopSlide__caption sliderTopSlide__caption--slide2">СЕРИЯ ЯРКИХ<br/>СОБЫТИЙ</p>
			</div>
			<div class="sliderTop__slide sliderTopSlide">
				<p><img class="sliderTopSlide__img" src="wp-content/uploads/2016/10/slide3.png" /></p>
				<p class="sliderTopSlide__caption sliderTopSlide__caption--slide3">повышение личной<br/>эффективности</p>
			</div>
			<div class="sliderTop__slide sliderTopSlide">
				<p><img class="sliderTopSlide__img" src="wp-content/uploads/2016/10/slide4.png" /></p>
				<p class="sliderTopSlide__caption  sliderTopSlide__caption--slide4">продвижение<br/>своего проекта</p>
			</div>
		</div>

		<div class="sliderBottomWrapper">
			<?php echo do_shortcode('[slick-slider design="design-molpred-events" category="9" dots="false" arrows="false" autoplay="true" autoplay_interval="5000"]'); ?>

			<div class="sliderBottomWrapper__leftBlock sliderBottomLeftBlock">
				<a href="/register"><img class="sliderBottomWrapper__img" src="wp-content/uploads/2016/10/slide_register.png" /></a>
			</div>
			<div class="sliderBottomWrapper__rightBlock sliderBottomRightBlock">
				<a href="https://molpredsk.ru/wp-content/uploads/2016/11/Zayavka-1.doc" download><img class="sliderBottomWrapper__img" src="wp-content/uploads/2016/10/send_idea.png" /></a>
			</div>
		</div>

		<?php //the_content(); ?>

		<div class="colsFlex colsFlexGrid colsFlexGrid--video">
			<?php
				$args = array(
							'post_type' => 'videos',
							'publish' => true,
							'paged' => get_query_var('paged'),
							'posts_per_page' => 1
					 	);
				query_posts($args);
				while ( have_posts() ) : the_post();
			?>
				<article class="colFlex colFlex--2" id="post-<?php the_ID(); ?>" >
					<h3 class="subTitle">Наш ВИДЕОПОТОК</h3>
					<div class="videoWrapper colFlexImgWrapper">
						<div class="videoWrapper__poster"></div>
						<?php the_content(); ?>
					</div>
				</article>
			<?php
				endwhile;
				wp_reset_query();
			?>



			<?php
				$args = array(
							'post_type' => 'galleries',
							'publish' => true,
							'paged' => get_query_var('paged'),
							'posts_per_page' => 1
					 	);
				query_posts($args);
				while ( have_posts() ) : the_post();
			?>
				<article class="colFlex colFlex--2" id="post-<?php the_ID(); ?>" >
					<h3 class="subTitle"><span>Фото</span> <a class="subTitle__link" href="<?php echo get_permalink( 485 ); ?>">СМОТРеть ВСЕ видео/фото ></a></h3>

					<?php if ( has_post_thumbnail() ) { ?>
						<a class="colFlexImgWrapper post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
							<?php the_post_thumbnail( 'large', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
						</a>
					<?php } ?>
				</article>
			<?php
				endwhile;
				wp_reset_query();
			?>
		</div>



		<h3 class="subTitle"><span>Новости</span> <a class="subTitle__link" href="<?php echo get_permalink( 248 ); ?>">СМОТРеть ВСЕ НОВОСТИ ></a></h3>
		<div class="colsFlex colsFlexGrid">
			<?php
				$args = array(
							'post_type' => 'news',
							'publish' => true,
							'paged' => get_query_var('paged'),
							'posts_per_page' => 1
					 	);
				query_posts($args);
				while ( have_posts() ) : the_post();
			?>
				<article class="colFlex colFlex--2" id="post-<?php the_ID(); ?>" >
					<?php if ( has_post_thumbnail() ) { ?>
						<a class="colFlexImgWrapper post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
							<?php the_post_thumbnail( 'large', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
						</a>
					<?php } ?>
					<p class="colsFlexGrid__section"><a href="<?php echo get_permalink( 248 ); ?>">Новости</a></p>
					<?php the_title( sprintf( '<h2 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					<div class="colFlexExcerpt">
						<?php the_excerpt(); ?>
					</div>
				</article>
			<?php
				endwhile;
				wp_reset_query();
			?>



			<?php
				$args = array(
							'post_type' => 'media',
							'publish' => true,
							'paged' => get_query_var('paged'),
							'posts_per_page' => 1
					 	);
				query_posts($args);
				while ( have_posts() ) : the_post();
			?>
				<article class="colFlex colFlex--2" id="post-<?php the_ID(); ?>" >
					<?php if ( has_post_thumbnail() ) { ?>
						<a class="colFlexImgWrapper post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
							<?php the_post_thumbnail( 'large', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
						</a>
					<?php } ?>
					<p class="colsFlexGrid__section"><a href="<?php echo get_permalink( 290 ); ?>">СМИ о нас</a></p>
					<?php the_title( sprintf( '<h2 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					<div class="colFlexExcerpt">
						<?php the_excerpt(); ?>
					</div>
				</article>
			<?php
				endwhile;
				wp_reset_query();
			?>



			<?php
				$args = array(
							'post_type' => 'stories',
							'publish' => true,
							'paged' => get_query_var('paged'),
							'posts_per_page' => 1
					 	);
				query_posts($args);
				while ( have_posts() ) : the_post();
			?>
				<article class="colFlex colFlex--2" id="post-<?php the_ID(); ?>" >
					<?php if ( has_post_thumbnail() ) { ?>
						<a class="colFlexImgWrapper post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
							<?php the_post_thumbnail( 'large', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
						</a>
					<?php } ?>
					<p class="colsFlexGrid__section"><a href="<?php echo get_permalink( 412 ); ?>">Истории успеха</a></p>
					<?php the_title( sprintf( '<h2 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					<div class="colFlexExcerpt">
						<?php the_excerpt(); ?>
					</div>
				</article>
			<?php
				endwhile;
				wp_reset_query();
			?>



			<?php
				$args = array(
							'post_type' => 'news',
							'publish' => true,
							'paged' => get_query_var('paged'),
							'posts_per_page' => 1,
							'offset' => 1
					 	);
				query_posts($args);
				while ( have_posts() ) : the_post();
			?>
				<article class="colFlex colFlex--2" id="post-<?php the_ID(); ?>" >
					<?php if ( has_post_thumbnail() ) { ?>
						<a class="colFlexImgWrapper post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
							<?php the_post_thumbnail( 'large', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
						</a>
					<?php } ?>
					<p class="colsFlexGrid__section"><a href="<?php echo get_permalink( 248 ); ?>">Новости</a></p>
					<?php the_title( sprintf( '<h2 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					<div class="colFlexExcerpt">
						<?php the_excerpt(); ?>
					</div>
				</article>
			<?php
				endwhile;
				wp_reset_query();
			?>
		</div>

		<h3 class="subTitle"><span>Истории успеха</span> <a class="subTitle__link" href="<?php echo get_permalink( 412 ); ?>">ЭТИ и другие истории успеха ></a></h3>
		<?php echo do_shortcode('[slick-slider design="design-molpred-stories" category="8" dots="false" arrows="false" autoplay="true" autoplay_interval="5000"]'); ?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
