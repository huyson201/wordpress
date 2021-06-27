<?php get_header(); ?>






<div class="homepagecontainer">
    <?php get_template_part('slider');?>
    <div class="clearfix"></div>

    <section class="home-panel promo">
        <div class="container" style="display:block">
            <div class="row">
                <article class="col-sm-4"><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/banner/samplepromo.png" alt="" /></a></article>
                <article class="col-sm-4"><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/banner/samplepromo.png" alt="" /></a></article>
                <article class="col-sm-4"><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/banner/samplepromo.png" alt="" /></a></article>
            </div>
        </div>
    </section>
    <div class="container home">
        <section class="feat">
            <div class="row">
                <div class="col-sm-12">
                    <h6 class="subhead theme"><strong>FEATURED ITEMS</strong></h6>
                    <div class="tab-content row">
                        <div class="tab-pane active" id="feat">
                            <?php
                            $tax_query[] = array(
                                'taxonomy' => 'product_visibility',
                                'field'    => 'name',
                                'terms'    => 'featured',
                                'operator' => 'IN',
                            );
                            ?>
                            <?php $args = array('post_type' => 'product', 'posts_per_page' => 6, 'ignore_sticky_posts' => 1, 'tax_query' => $tax_query); ?>
                            <?php $getposts = new WP_query($args); ?>
                            <?php global $wp_query;
                            $wp_query->in_the_loop = true; ?>
                            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                <?php global $product; ?>
                                <article class="col-sm-4 product-box">
                                    <div class="product-inner">
                                        <div class="view view-thumb">
                                            <div class="image">
                                                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>" alt="<?php the_title(); ?>" />
                                            </div>
                                            <div class="mask">
                                                <a href="<?php the_permalink(); ?>"></a>
                                                <p><?php the_content(); ?></p>
                                                <a href="<?php the_permalink(); ?>" class="info">View</a> <a href="<?php bloginfo('url'); ?>?add-to-cart=<?php the_ID(); ?>" class="info">Buy</a>
                                            </div>
                                        </div>
                                        <h2 class="price">
                                            <?php if ($product->is_on_sale()) : ?>
                                                <span class="price-old"><?php echo $product->get_price_html(); ?></span> <span class="price-new"><?php echo $product->get_sale_price(); ?></span>
                                            <?php else : ?>
                                                <span class="price-new"><?php echo $product->get_price_html(); ?></span>
                                            <?php endif; ?>
                                        </h2>
                                        <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                    </div>
                                </article>

                            <?php endwhile;
                            wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="subhead theme brands"><strong>DESIGNER BRANDS</strong></h6>
            <div class="tab-brand">
                <div id="flexcarousel-brands" class="flexslider">
                <?php
                    $args = array(
                        'posts_per_page'    => 8,
                        'post_type'         => 'brand'
                    );
                    $the_query = new WP_Query($args);
                    ?>
                    <ul class="slides">
                        <?php while ($the_query->have_posts()) :  $the_query->the_post() ?>
                            <li>
                                <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'thumnail')); ?>
                            </li>
                        <?php endwhile; ?>
                      
                    </ul>
                </div>
            </div>
        </section>
    </div>
</div>



<?php get_footer(); ?>