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
                    <div id="flexslider-product" class="">
                        <ul class="slides">
                            <li><a href="#"><img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()))[0]; ?>" alt="<?php the_title(); ?>" /></a></li>
                            <!-- <li><a href="img/products/3.gif"><img src="img/products/3.gif" /></a></li>
                            <li><a href="img/products/4.gif"><img src="img/products/4.gif" /></a></li>
                            <li><a href="img/products/5.gif"><img src="img/products/5.gif" /></a></li> -->
                        </ul>
                    </div>
                    <div id="flexcarousel-product" class="flexslider visible-desktop">
                        <ul class="slides">
                            <li><img src="img/products/1.gif" alt="" /></li>
                            <li><img src="img/products/3.gif" alt="" /></li>
                            <li><img src="img/products/4.gif" alt="" /></li>
                            <li><img src="img/products/5.gif" alt="" /></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-7">

                <div class="details wrapper">
                    <p style="text-transform: uppercase;"><small>&#8220; <?php the_title() ?> &#8221;</small></p>
                    <p class="price"><i class="fas fa-tags"></i> $ <?php echo wc_get_product(get_the_ID())->get_price(); ?></p>
                    <form action="#">
                        <p>
                            <select name="#" id="#">
                                <option value="#">Size</option>
                                <option value="small">small</option>
                                <option value="medium">medium</option>
                                <option value="large">large</option>
                            </select>
                        </p>
                        <p>
                            <select name="#" id="#">
                                <option value="#">Color</option>
                                <option value="black">black</option>
                                <option value="blue">blue</option>
                                <option value="grey">green</option>
                            </select>
                        </p>
                        <div class="clearfix">
                            <div class="pull-left qty">
                                <input type="text" class="qty" value="1">
                                <div class="total">
                                    <a href="#"><i class="fas fa-plus-square"></i></a>
                                    <a href="#"><i class="fas fa-minus-square"></i></a>
                                </div>
                            </div>
                            <div class="pull-left"><a href="checkout.html" class="btn theme">Add to Cart</a></div>
                        </div>
                    </form>
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
                                <button class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" data-target="#description" >
                                    <i class="icon-layout theme"></i> Product Description
                                </button>
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
                            <div id="sizing" class="accordion-body collapse in">
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
                                            <tr>
                                                <td>Small</td>
                                                <td>46 cm</td>
                                                <td>71cm</td>
                                            </tr>
                                            <tr>
                                                <td>Medium</td>
                                                <td>51</td>
                                                <td>74</td>
                                            </tr>
                                            <tr>
                                                <td>Large</td>
                                                <td>56</td>
                                                <td>76</td>
                                            </tr>
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
                    /**
                     * Hook: woocommerce_after_single_product_summary.
                     *
                     * @hooked woocommerce_output_product_data_tabs - 10
                     * @hooked woocommerce_upsell_display - 15
                     * @hooked woocommerce_output_related_products - 20
                     */
                    do_action('ts_add_woocommerce_support');
                    ?>
                    <!-- <section class="row cross-product">
                        <article class=" col-sm-3 product-box">
                            <div class="product-inner">
                                <span class="onsale">SALE</span>
                                <div class="view view-thumb">
                                    <div class="image"><img src="img/products/4.gif" alt="" /></div>
                                    <div class="mask">
                                        <p>Sample Product HumbleShopSample Product HumbleShopSample Product HumbleShopSample Product HumbleS..</p>
                                        <a href="product.html" class="info">View</a> <a href="checkout.html" class="info">Buy</a>
                                    </div>
                                </div>
                                <h2 class="price">
                                    <span class="price-old">$120.68</span> <span class="price-new">$39.60</span>
                                </h2>
                                <p><a href="product.html">Sample Product Tendershop</a></p>
                            </div>
                        </article>
                        <article class=" col-sm-3 product-box">
                            <div class="product-inner">
                                <div class="view view-thumb">
                                    <div class="image"><img src="img/products/1.gif" alt="" /></div>
                                    <div class="mask">
                                        <p>Sample Product HumbleShopSample Product HumbleShopSample Product HumbleShopSample Product HumbleS..</p>
                                        <a href="product.html" class="info">View</a> <a href="checkout.html" class="info">Buy</a>
                                    </div>
                                </div>
                                <h2 class="price">
                                    <span class="price-old">$120.68</span> <span class="price-new">$39.60</span>
                                </h2>
                                <p><a href="product.html">Sample Product Tendershop</a></p>
                            </div>
                        </article>
                        <article class=" col-sm-3 product-box">
                            <div class="product-inner">
                                <span class="onsale">SALE</span>
                                <div class="view view-thumb">
                                    <div class="image"><img src="img/products/3.gif" alt="" /></div>
                                    <div class="mask">
                                        <p>Sample Product HumbleShopSample Product HumbleShopSample Product HumbleShopSample Product HumbleS..</p>
                                        <a href="product.html" class="info">View</a> <a href="checkout.html" class="info">Buy</a>
                                    </div>
                                </div>
                                <h2 class="price">
                                    <span class="price-old">$120.68</span> <span class="price-new">$39.60</span>
                                </h2>
                                <p><a href="product.html">Sample Product Tendershop</a></p>
                            </div>
                        </article>
                        <article class=" col-sm-3 product-box">
                            <div class="product-inner">
                                <div class="view view-thumb">
                                    <div class="image"><img src="img/products/5.gif" alt="" /></div>
                                    <div class="mask">
                                        <p>Sample Product HumbleShopSample Product HumbleShopSample Product HumbleShopSample Product HumbleS..</p>
                                        <a href="product.html" class="info">View</a> <a href="checkout.html" class="info">Buy</a>
                                    </div>
                                </div>
                                <h2 class="price">
                                    <span class="price-old">$120.68</span> <span class="price-new">$39.60</span>
                                </h2>
                                <p><a href="product.html">Sample Product Tendershop</a></p>
                            </div>
                        </article>
               
                    </section>
                    -->
                </div>
            </div>
        </div>

    </section>
</div>