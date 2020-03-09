<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mastanews


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 *
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
				*/
?>
<?php get_header();?>

<?php
//$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
?>
<header class="inner-header">
	<div class="container">
		<div class="col-sm-6 col-md-6">
			<?php $cat = get_category( get_query_var( 'cat' ) );?>
			<span class="banner-link"><a href="<?php esc_url(home_url('/'));?>"> Home </a> / <a href="<?php echo esc_url(home_url("/")).$cat->taxonomy.'/'.$cat->slug;?>"><?php echo single_cat_title()?></a></span>
			<h1><?php echo single_cat_title()?></h1>
		</div>

	</div>
</header>
<section>
	<div class="container">


		<?php if ( have_posts() ) : ?>
		<!-- .left content -->
		<div class="col-sm-8 col-md-8">
			<!-- .title -->
			<div class="col-md-12 pad filtr-container">

				<?php while ( have_posts() ) : the_post();?>

						<?php $post_id = get_the_ID()?>
				<!-- .life-style-post-text -->
				<div class="life-style-post-text filtr-item" data-category="1, 5" data-sort="Busy streets">
					<div class="col-sm-4 col-md-4 pad">
						<?php echo get_the_post_thumbnail($post_id,'medium',array(alt=>get_the_title(),'class'=>'img-responsive'))?>
					</div>
					<div class="col-sm-8 col-md-8">
						<?php $link = '<a class="post-list-link" href="'.get_the_permalink().'">Read more</a>';?>
						<!-- .blog-text -->
						<div class="blog-text">
							<h3><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>
							<span class="post-date">Posted On <?php echo get_the_date('M j,  Y'); ?></span>
							<span class="post-comment"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo get_post_meta($post_id,'view_count',true);?></span>
							<p><?php echo wp_trim_words(get_the_content(),50,"...".$link)?></p>
						</div>
						<!-- /.blog-text -->
					</div>
				</div>
				<!-- /.life-style-post-text -->

				<?php endwhile;?>

			</div>


			<div class="text-center">
			<?php the_posts_pagination(array(

			'prev_text' => __('<i class="fa fa-angle-left" aria-hidden="true"></i> Prev', 'mastanews'),
			'next_text' => __('Next <i class="fa fa-angle-right" aria-hidden="true"></i>', 'mastanews'),
			'screen-reader-text' => '&nbsp',
			));
			?>

		</div>

		</div>


	<?php endif;?>

		<!-- .right content -->
		<div class="col-sm-4 col-md-4">
			<?php get_sidebar('list');?>
		</div>
		<!-- /.right content -->
	</div>
</section>


<?php get_footer();?>