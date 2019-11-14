<?php
/*
 * Template Name: E-booki
 */
?>

<?php get_header(); ?>
    <div class="content-box">
    <?php get_template_part('content/content', 'name'); ?>
	<?php get_template_part('content/content', 'menu'); ?>
    <div class="blog-box">
        <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $wp_query = new WP_Query( 'post_type=books&paged='.$paged);
        if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
            <div class="post-box text-post space-after">
                <div class="text-box">
                    <div class="text-title"><?php the_title(); ?> <span class="text-type"><?php
                            if(get_the_category()) echo '/'.get_the_category()[0]->name.'/';
                            ?></span></div>
                    <div class="text-thumbnail"><?php the_post_thumbnail('large'); ?></div>
                </div>
                <div class="text-description">
                    <span class="text-excerpt"><?php echo the_excerpt(); ?></span>
                    <a href="<?php the_permalink(); ?>"><button><?php _e('download this e-book', 'writertheme')?></button></a>
                </div>
            </div>
        <?php endwhile; ?>
            <div class="pagination">
                <?php
                echo get_the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => '<',
                    'next_text' => '>',
                    'screen_reader_text' => ' '
                ));
                ?>
                <p><?php _e('More e-books soon...', 'writertheme')?></p>
            </div>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'writertheme'); ?></p>
        <?php endif; ?>
    </div>
<!--    <div class="language"><span>ang / pl</span></div>-->
<?php get_footer(); ?>