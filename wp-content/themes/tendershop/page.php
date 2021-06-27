<?php get_header(); ?>

<?php if (is_checkout() || is_cart()) : ?>
    <?php if (have_posts()) : while (have_posts()) : the_post();
            the_content();
        endwhile;
    else : ?>
        <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
<?php endif; ?>
<?php get_footer(); ?>