<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mastanews
 */

get_header(); ?>

<?php while(have_posts()):the_post();?>
<?php $post_id = get_the_ID();?>

		<?php
			$old_view_count = get_post_meta($post_id,'view_count',true);
			update_post_meta($post_id,'view_count',($old_view_count+1));
	?>
	<section>
		<div class="container">
			<!-- .left content -->
			<div class="col-sm-8 col-md-8">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12 pad" data-category="1, 5" data-sort="Busy streets">
							<!-- .grid -->
							<div class="life-style-post-text grid2">
								<div class="col-md-12 pad">
									<?php echo get_the_post_thumbnail($post_id,'full',array('alt'=>get_the_title(),'class'=>'img-responsive'))?>
								</div>
								<div class="col-md-12 pad">
									<!-- .blog-text -->
									<?php
									$author_id = get_the_author_meta( 'ID' );
									?>
									<div class="blog-text-post">
										<h1><a href="<?php the_permalink()?>"><?php the_title();?></a></h1>
										<span class="post-date"><?php echo get_the_date('F j,  Y'); ?>  |
											<?php
											$the_categories = get_the_category();
											if ( ! empty( $the_categories ) && ! is_wp_error( $the_categories ) ) {

												$comma = '';
												foreach ($the_categories as $the_category) {
													echo $comma.'<a class="category-link" name="' . $the_category->taxonomy . '" href="' . esc_url(home_url("/")) . $the_category->taxonomy . '/' . $the_category->slug . '">' . ucfirst($the_category->name) . '</a>';
													$comma = ', ';

													$category_slug = $the_category->slug;
													$category_id[] = $the_category->id;
												}

											}

											?>   |   by
											 <a class="category-link" href="<?php echo get_author_posts_url( $author_id, $author_nicename ); ?>"><?php the_author(); ?></a>
											 |  <i class="fa fa-eye" aria-hidden="true"></i> <?php echo get_post_meta($post_id,'view_count',true)?></span>
										<p><?php the_content();?>
										</p>

										<!-- .blog-tags-social -->
										<div class="blog-tags-social row">
											<div class="blog-tag col-sm-6 col-md-6"><a href="#tag/house/" rel="tag">HOUSE</a><a href="#tag/properties/" rel="tag">PROPERTIES</a><a href="#tag/summer/" rel="tag">SUMMER</a></div>
											<div class="blog-social col-sm-6 col-md-6">
												<ul class="social-list">
													<li class="box"><a href="#"><i class="fa fa-facebook"></i></a></li>
													<li class="box"><a href="#"><i class="fa fa-twitter"></i></a></li>
													<li class="box"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
													<li class="box"><a href="#"><i class="fa fa-google-plus"></i></a></li>
													<li class="box"><a href="#"><i class="fa fa-linkedin"></i></a></li>
												</ul>
											</div>
										</div>
										<!-- /.blog-tags-social -->

									</div>
									<!-- /.blog-text -->
								</div>
							</div>
							<!-- /.grid -->
						</div>
					</div>
				</div>
			</div>
			<!-- /.left content -->
			<!-- .right content -->
			<div class="col-sm-4 col-md-4">
				<?php get_sidebar('singlepage')?>
			</div>
			<!-- /.right content -->
		</div>
	</section>

<?php endwhile;?>
<?php
get_footer();
