<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php echo bloginfo('charset'); ?>">
    <title><?php echo bloginfo('title'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:title" content="Tender Shop" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Minimalist  Responsive eCommerce Template" />
    <meta property="og:url" content="http://ninetheme.com/" />
    <meta property="og:image" content="http://ninetheme.com/logo.png" />

    <link rel="icon" href="img/hsfavicon.png">
    <?php wp_head(); ?>


    <script type="text/javascript">
        WebFontConfig = {
            google: {
                families: ['Bangers', 'Lato']
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>
    <style type="text/css">
        /* Add Google Font name here */
        .wf-active {
            font-family: 'Lato', serif;
            font-size: 14px;
        }

        .wf-active .logo {
            font-family: 'Bangers', serif;
        }
    </style>
    <!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
    <!--[if IE 7]>
			<link rel="stylesheet" href="css/ie7.css" />
		<![endif]-->
</head>

<body <?php body_class(); ?>>

    <div class="header-container">
        <div class="container welcome">
            <div class="row">
                <div class="pull-left greet">
                    Welcome shopper, <a href="#">login here</a>
                </div>
                <div class="pull-right cart tright">

                    <div class="counter">
                        <a href="javascript:void(0);"><i class="fa fa-shopping-cart" aria-hidden="true"></i></i></i> Your cart </a> : <span class="theme"><?php echo WC()->cart->get_total(); ?></span>
                    </div>

                    <div class="cartbubble">
                        <div class="arrow-box">
                            <?php foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                                $_product   = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                                $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);
                                if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
                                    $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
                            ?>
                                    <div class="clearfix">
                                        <a href="#"><?php
                                                    if (!$product_permalink) {
                                                        echo wp_kses_post(apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key) . '&nbsp;');
                                                    } else {
                                                        echo wp_kses_post(apply_filters('woocommerce_cart_item_name', sprintf('<a href="%s">%s</a>', esc_url($product_permalink), $_product->get_name()), $cart_item, $cart_item_key));
                                                    } ?>
                                        </a> <span class="theme pull-right"><?php echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key); 
														?></span>
                                    </div>

                            <?php }
                            } ?>
                            <hr />

                            <div class="clearfix">
                                TOTAL <span class="theme pull-right"><?php echo WC()->cart->get_total(); ?></span>
                            </div>
                            <hr />
                            <div class="clearfix">
                                <a href="javascript:void(0)" id="closeit">Close</a>
                                <a href="<?php echo esc_url(wc_get_checkout_url()); ?>" class="btn theme btn-mini pull-right">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container head">
            <div class="row">
                <div class="col-sm-12 clearfix">
                    <div class="top row">
                        <div class="col-sm-8 logo text" style="display:none"><a href="<?php echo home_url(); ?>">TenderShop</a></div>
                        <div class="col-sm-8 logo image"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/highreslogo.png" alt="" /></a></div>
                        <div class="cart col-sm-4">
                            <form action="#" class="topsearch">
                                <input type="search" class="top-search" placeholder="Search" />
                                <button type="submit"><i class="icon-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-menu">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <nav class="horizontal-nav full-width">
                            <?php wp_nav_menu(
                                array(
                                    'theme_location' => 'header-menu',
                                    'container' => 'false',
                                    'menu_id' => 'nav',
                                    'menu_class' => 'nav'
                                )
                            ); ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>