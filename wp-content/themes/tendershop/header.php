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
                        <a href="javascript:void(0);"><i class="fa fa-shopping-cart" aria-hidden="true"></i></i></i> Your cart </a> : <span class="theme">$139</span>
                    </div>

                    <div class="cartbubble">
                        <div class="arrow-box">

                            <div class="clearfix">
                                <a href="#">Sample Tshirt Stripes...</a> <span class="theme pull-right">$55</span>
                            </div>

                            <div class="clearfix">
                                <a href="#">Sample Dress in cart</a> <span class="theme pull-right">$73</span>
                            </div>

                            <div class="clearfix">
                                <a href="#">Sample Socks in cart</a> <span class="theme pull-right">$11</span>
                            </div>
                            <hr />

                            <div class="clearfix">
                                TOTAL <span class="theme pull-right">$139</span>
                            </div>
                            <hr />
                            <div class="clearfix">
                                <a href="javascript:void(0)" id="closeit">Close</a>
                                <a href="checkout.html" class="btn theme btn-mini pull-right">Checkout</a>
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