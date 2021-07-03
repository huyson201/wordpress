<?php

/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

get_header();
do_action('woocommerce_before_single_product');
$product = wc_get_product(get_the_ID());
$children = $product->get_children();
?>
<div class="container">
    <section class="single">
        <div class="row">
            <header class="col-sm-12 prime">
                <h3>
                    <?php
                    /**
                     * woocommerce_before_main_content hook.
                     *
                     * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                     * @hooked woocommerce_breadcrumb - 20
                     */
                    do_action('woocommerce_before_main_content');
                    ?>
                </h3>
            </header>
        </div>
        <div class="row">
            <div class="col-sm-5">

                <div class="wrap">
                    <ul id="owl-carousel-slider" class="owl-carousel">
                        <?php
                        $attachment_ids = $product->get_gallery_image_ids();
                        ?>

                        <li><a href="#"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>" alt="<?php the_title(); ?>" /></a></li>

                        <?php
                        foreach ($attachment_ids as $attachment_id) {
                        ?>
                            <li><a href="<?php echo wp_get_attachment_url($attachment_id) ?>"><img src="<?php echo wp_get_attachment_url($attachment_id) ?>" /></a></li>

                        <?php
                        }
                        ?>
                    </ul>
                    <ul id="owl-carousel-slider-gallery" class="owl-carousel">
                        <?php
                        foreach ($attachment_ids as $attachment_id) {
                        ?>
                            <li><a href="<?php echo wp_get_attachment_url($attachment_id) ?>"><img src="<?php echo wp_get_attachment_url($attachment_id) ?>" /></a></li>
                        <?php
                        }
                        ?>
                    </ul>

                </div>
            </div>
            <div class="col-sm-7">

                <div class="details wrapper">
                    <p style="text-transform: uppercase;"><small>&#8220; <?php the_title(); ?> &#8221;</small></p>
                    <p class="price"><i class="fas fa-tags"></i>
                        <span class="price-old">
                            <?php
                            if ($product->is_on_sale() && count($children) > 0) {
                                echo '$' . $product->get_available_variation($children[0])['display_regular_price'];
                            }
                            ?>
                        </span>
                        <span class="price-new"> $ <?php echo $product->get_price(); ?></span>
                    </p>
                    <form class="cart" action="#" method="post">
                        <?php
                        // Get product attributes
                        $attributes = $product->get_attributes();
                        if (!$attributes) {
                        ?>
                            <p>
                                <select name="#" id="#">
                                    <option value="freesize">FreeSize</option>
                                </select>
                            </p>
                            <p>
                                <select name="#" id="#">
                                    <option value="no-color">No other color</option>
                                </select>
                            </p>
                            <?php
                        } else {
                            // var_dump($product->get_attribute_taxonomy_names());
                            foreach ($attributes as $attribute) {
                                $koostis =  wc_get_product_terms($product->id, $attribute['name'], array('fields' => 'names'));
                                if (!empty($koostis)) {
                            ?>
                                    <p>
                                        <select name="#" id="#">
                                            <?php
                                            foreach ($koostis as $pa) {
                                            ?>
                                                <option value="<?php echo $pa ?>"><?php echo $pa ?></option>
                                            <?php
                                            } ?>
                                        </select>
                                    </p>
                        <?php
                                }
                            }
                        }
                        ?>

                        <div class="clearfix">
                            <div class="pull-left qty">
                                <?php
                                $value = 0;
                                if ($product->get_stock_quantity() > 0) {
                                    $value = $product->get_stock_quantity();
                                } else if ($product->is_in_stock()) {
                                    $value = 999;
                                } else {
                                    $value = 0;
                                } ?>
                                <input type="text" class="qty" name="quantity" id="qty" 
                                <?php if ($product->get_stock_quantity() > 0 || $product->is_in_stock()) { ?> value="1" <?php } else { ?> value="0" <?php }  ?>">
                                <input type="hidden" name="product-instock" id="product-instock" value="<?php echo $value ?>">
                                <div class="total">
                                    <a href="javascript:void(0);" onclick="plus();"><i class="fas fa-plus-square"></i></a>
                                    <a href="javascript:void(0);" onclick="minus();"><i class="fas fa-minus-square"></i></a>
                                </div>
                            </div>
                            <div class="pull-left">
                                <button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>" 
                                class="btn theme">Add to Cart</button>
                            </div>
                        </div>
                    </form>
                    <?php do_action('woocommerce_after_add_to_cart_form'); ?>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6 decidernote">Hard to decide? Ask you friends :)</div>
                        <div class="col-sm-6 decider">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-google-plus"></i></a>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                    <hr>

                    <div class="accordion" id="accordion2">
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#description">
                                    <i class="icon-layout theme"></i> Product Description
                                </a>
                            </div>
                            <div id="description" class="accordion-body collapse">
                                <div class="-iaccordionnner">
                                    <?php the_content(); ?>
                                </div>
                            </div>

                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#sizing">
                                    <i class="icon-layout theme"></i> Product Sizing
                                </a>
                            </div>
                            <div id="sizing" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>SIZE</th>
                                                <th>WIDTH</th>
                                                <th>LENGTH</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($children as $value) {
                                                $variation = $product->get_available_variation($value);
                                                if (!empty($variation['attributes']['attribute_pa_size'])) {
                                            ?>
                                                    <tr>
                                                        <td style="text-transform: uppercase;"><?php echo $variation['attributes']['attribute_pa_size'] ?></td>
                                                        <td><?php echo $variation['dimensions']['width'] ?> cm</td>
                                                        <td><?php echo $variation['dimensions']['height'] ?> cm</td>
                                                    </tr>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



        <div class="row">
            <div class="col-sm-12">
                <div class="cross-wrapper">
                    <hr />
                    <header>Wear it with</header>
                    <?php

                    $args = array(
                        'posts_per_page' => 4,
                        'columns'        => 4,
                        'orderby'        => 'rand',
                        'order'          => 'desc',
                    );
                    //array_map : mảng callback. thực hiện lấy product related
                    // Truyền biến related_products sang related.php
                    $args['related_products'] = array_filter(
                        array_map('wc_get_product', wc_get_related_products($product->get_id(), $args['posts_per_page'])),
                        'wc_products_array_filter_visible'
                    );
                    // var_dump(wc_get_related_products($product->get_id(), $args['posts_per_page']));
                    // die();
                    $args['related_products'] = wc_products_array_orderby($args['related_products'], $args['orderby']);

                    // Set global loop values.
                    // wc_set_loop_prop('name', 'related');
                    // wc_set_loop_prop('columns', $args['columns']);
                    wc_get_template('single-product/related.php', $args);
                    ?>
                </div>
            </div>
        </div>

    </section>
</div>
<script>
    function plus() {
        var plus = document.getElementById('qty');
        const instock = document.getElementById('product-instock');
        if (plus.value == instock.value || instock.value == 0) {
            alert("The product quantity in stock is not enough");
        } else {
            plus.value++;
        }
        plus.innerHTML = plus.value;

    }

    function minus() {
        var plus = document.getElementById('qty');
        if (plus.value <= 1) {
            alert("The quantity value can't equal 0");
        } else {
            plus.value--;
        }
        plus.innerHTML = plus.value;
    }
</script>
<?php get_footer(); ?>