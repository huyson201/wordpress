<div class="slides home-col-sm-12">
    <div class="container">
        <div id="flexslider" class="flexslider row">
            <?php
            $args = array(
                'posts_per_page'    => 5,
                'post_type'         => 'slider'
            );
            $the_query = new WP_Query($args);

            ?>
            <ul class="slides col-sm-12">

                <?php while ($the_query->have_posts()) :  $the_query->the_post() ?>

                    <li>
                        <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'thumnail')); ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
</div>