<?php

/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

defined('ABSPATH') || exit;

?>
<?php
do_action('woocommerce_before_cart'); ?>
<div class="container">
	<section class="order">
		<div class="row standard">
			<header class="col-sm-12 prime">
				<h3>Your Cart</h3>
			</header>
		</div>
		<div class="row cart">
			<div class="col-sm-12">
				<div class="wrap-table">
					<form class="woocommerce-cart-form" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
						<?php do_action('woocommerce_before_cart_table'); ?>
						<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents table" cellspacing="0">
							<thead>
								<tr>
									<td width="70%"><?php esc_html_e('Item', 'woocommerce'); ?></td>
									<td width="10%"><?php esc_html_e('Price', 'woocommerce'); ?></td>
									<td width="10%"><?php esc_html_e('Quantity', 'woocommerce'); ?></td>
									<td width="10%"><?php esc_html_e('Total', 'woocommerce'); ?></td>
								</tr>
							</thead>
							<tbody>
								<?php do_action('woocommerce_before_cart_contents'); ?>
								<?php
								foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
									$_product   = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
									$product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);
									if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
										$product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
								?>
										<tr class="woocommerce-cart-form__cart-item <?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">
											<td>
												<div class="cart-img pull-left hidden-phone">
													<?php
													// get image 
													$thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(array(100, 78.89)), $cart_item, $cart_item_key);
													if (!$product_permalink) {
														echo $thumbnail;
													} else {
														printf('<a href="%s">%s</a>', esc_url($product_permalink), $thumbnail); // PHPCS: XSS ok.
													}
													?>
												</div>
												<div class="item pull-left">
													<?php
													// xoá sản phẩm
													echo apply_filters(
														'woocommerce_cart_item_remove_link',
														sprintf(
															'<a href="%s" ><i class="icon-cancel-circled"></i></a>',
															esc_url(wc_get_cart_remove_url($cart_item_key)),
														),
														$cart_item_key
													);
													?>
													<?php
													if (!$product_permalink) {
														echo apply_filters(
															'woocommerce_cart_item_name',
															$_product->get_name(),
															$cart_item,
															$cart_item_key
														) . '&nbsp;';
													} else {
														echo apply_filters(
															'woocommerce_cart_item_name',
															sprintf('<a href="%s">%s</a>', esc_url($product_permalink), $_product->get_name()),
															$cart_item,
															$cart_item_key
														);
													}
													// Backorder notification.
													if ($_product->backorders_require_notification() && $_product->is_on_backorder($cart_item['quantity'])) {
														echo apply_filters(
															'woocommerce_cart_item_backorder_notification',
															'<p class="backorder_notification">' . esc_html__('Available on backorder', 'woocommerce') . '</p>',
															$product_id
														);
													}
													?>
												</div>
											</td>
											<td><i><?php
													echo apply_filters(
														'woocommerce_cart_item_price',
														WC()->cart->get_product_price($_product),
														$cart_item,
														$cart_item_key
													);
													?></i></td>
											<td><?php
												if ($_product->is_sold_individually()) {
													$product_quantity = sprintf('1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key);
												} else {
													$product_quantity = woocommerce_quantity_input(
														array(
															'input_name'   => "cart[{$cart_item_key}][qty]",		   // tên input	
															'input_value'  => $cart_item['quantity'],		 		  // số lượng của item
															'max_value'    => $_product->get_max_purchase_quantity(), // số lượng sản phẩm còn trong shop
															'min_value'    => '1',
															'product_name' => $_product->get_name(),				  // tên sản phẩm	
															'classes' => array('my-qty-input')						  // gắn các class cho input
														),
														$_product,
														true
													);
												}
												echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item);
												?></td>
											<td><strong><?php
														echo apply_filters(
															'woocommerce_cart_item_subtotal',
															WC()->cart->get_product_subtotal($_product, $cart_item['quantity']),
															$cart_item,
															$cart_item_key
														);
														?></strong></td>
										</tr>
								<?php
									}
								}
								?>
								<tr>
									<td colspan="3">
										<div class="item">Total</div>
									</td>
									<td><?php echo WC()->cart->get_total(); ?></td>
								</tr>
							</tbody>
						</table>
						<div class="row cart-pay">
							<div class="col-sm-6">Additional comments (optional) <br /><textarea rows="3"></textarea> </div>
							<div class="col-sm-6 cart-checkout">
								<button type="submit" class="btn" name="update_cart"><i class="fas fa-sync-alt"></i>
									Update Cart</button>
								<?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>
								<a href="<?php echo esc_url(wc_get_checkout_url()); ?>" class="btn theme alt wc-forward">
									<i class="icon-check"></i> Checkout
								</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</div>
<?php do_action('woocommerce_after_cart'); ?>