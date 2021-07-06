<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header('shop');
do_action('woocommerce_before_single_product');

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */


?>
<header class="woocommerce-products-header">
	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action('woocommerce_archive_description');
	?>
</header>
<?php

if (woocommerce_product_loop()) : ?>
	<?php if (is_shop()) : ?>
		
		<div class="container">
			<div class="row">
				<header class="col-sm-12 prime mt-3">
					<h3>Plain Shirts</h3>
				</header>
			</div>
			<section class="product">
				<div class="row">
					<div class="col-md-3">
						<div class="sidebar">
							<section>
								<h5>Categories</h5>
								<nav>
									<ul>
										<?php
										// get categories
										$args = array(
											'type'			=> 'product',
											'child_of'		=> 0,
											'parent'		=> 0,
											'hide_empty'	=> 0,
											'taxonomy'		=> 'product_cat',
										);

										$categories = get_categories($args);
										?>
										<?php foreach ($categories as $category) : ?>
											<li><a href="<?php echo get_term_link($category->slug, 'product_cat') ?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php echo " " . $category->name; ?></a></li>
										<?php endforeach; ?>
									</ul>
								</nav>
							</section>
							<section>
								<h5>Best Seller</h5>
								<a href="#">
									<article class="clearfix">
										<div class="thumb visible-desktop flip"><img src="<?php echo get_template_directory_uri(); ?>/img/tt.png" alt=""></div>
										<div class="info">Sample Best Products <br><span class="price theme">$55</span></div>
									</article>
								</a>
								<a href="#">
									<article class="clearfix">
										<div class="thumb visible-desktop flip"><img src="<?php echo get_template_directory_uri(); ?>/img/tt.png" alt=""></div>
										<div class="info">Sample Best Products <br><span class="price theme">$55</span></div>
									</article>
								</a>
								<a href="#">
									<article class="clearfix">
										<div class="thumb visible-desktop flip"><img src="<?php echo get_template_directory_uri(); ?>/img/tt.png" alt=""></div>
										<div class="info">Sample Best Products <br><span class="price theme">$55</span></div>
									</article>
								</a>
							</section>
							<section>
								<h5>Advertisement</h5>
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ttt.png" class="img-polaroid" alt="" style="max-width: 95%;"></a>
							</section>
						</div>
					</div>
					<div class="col-md-9">
						<div class="row no-gutters">
							<?php
							global $paged;
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$args = array(
								'post_type' => 'product',
								'posts_per_page' => 12,
								'paged' => $paged
							);
							$get_posts = new WP_query($args);
							?>
							<?php while ($get_posts->have_posts()) : $get_posts->the_post();
								global $product; ?>
								<article class="col-md-4 product-box px-2">
									<div class="product-inner">
										<?php if ($product->is_on_sale()) {
											echo '<span class="onsale">SALE</span>';
										} ?>
										<div class="view view-thumb">
											<div class="image"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>" alt="<?php the_title(); ?>" alt="" /></div>
											<div class="mask">
												<?php the_content() ?>
												<a href="<?php the_permalink(); ?>" class="info">View</a> <a href="<?php get_permalink('shop');?>?add-to-cart=<?php the_ID(); ?>" class="info">Buy</a>
											</div>
										</div>
										<h2 class="price">
											<?php if ($product->is_on_sale()) : ?>
												<span class="price-old">$<?php echo $product->get_regular_price(); ?></span> <span class="price-new">$<?php echo $product->get_sale_price(); ?></span>
											<?php else : ?>
												<span class="price-new"><?php echo $product->get_price_html(); ?></span>
											<?php endif; ?>
										</h2>
										<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
									</div>
								</article>
							<?php endwhile; ?>
						</div>
						<nav class="pagination" role="navigation">
							<?php echo paginate_links(); ?>
						</nav>
					</div>
				</div>
			</section>
		</div>
	<?php endif; ?>

<?php else :
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action('woocommerce_no_products_found');
endif;

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
// do_action('woocommerce_after_main_content');

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
// do_action('woocommerce_sidebar');

get_footer('shop');
