<?php

/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if (!defined('ABSPATH')) {
	exit;
}

if ($related_products) : ?>

	<section class="row cross-product">


		<?php foreach ($related_products as $related_product) :
			// var_dump($related_product);
		?>
			<?php
			$post_object = get_post($related_product->get_id());
			// var_dump($post_object);
			?>
			<article class=" col-sm-3 product-box">
				<div class="product-inner">
					<?php if ($related_product->is_on_sale()) : ?>
						<span class="onsale">SALE</span>
					<?php endif; ?>
					<div class="view view-thumb">
						<div class="image"><img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($post_object->ID))[0]; ?>" alt="" /></div>
						<div class="mask">
							<p><?php echo $post_object->post_content ?></p>
							<a href="product.html" class="info">View</a> <a href="checkout.html" class="info">Buy</a>
						</div>
					</div>
					<h2 class="price">
						<?php if ($related_product->is_on_sale()) : ?>
							<span class="price-old"> $<?php echo $related_product->get_regular_price(); ?>
							</span><span class="price-new">$<?php echo $related_product->get_sale_price(); ?></span>
						<?php else : ?>
							<span class="price-new"><?php echo $related_product->get_price_html(); ?></span>
						<?php endif; ?>
					</h2>
					<p><a href="<?php the_permalink(); ?>"><?php echo $post_object->post_title ?></a></p>
				</div>
			</article>
			<?php
			//  woocommerce_product_loop_start(); 
			// var_dump(woocommerce_product_loop_start());
			?>


			<?php

			// setup_postdata($GLOBALS['post'] = &$post_object); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

			// wc_get_template_part('content', 'product');
			?>

		<?php endforeach; ?>

		<?php //woocommerce_product_loop_end(); 
		?>

	</section>
<?php
endif;

wp_reset_postdata();
