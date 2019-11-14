<?php
/*
 * Template Name: Blog
 */
?>

<?php get_header(); ?>
    <div class="content-box">
    <?php get_template_part('content/content', 'name'); ?>
	<?php get_template_part('content/content', 'menu'); ?>
    <div class="blog-box">
        <h3><?php _e('Notatki', 'writertheme')?></h3>
        <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $wp_query = new WP_Query( 'posts&posts_per_page=5&paged='.$paged);
        if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
            <div class="post-box">
                <div class="blog-date"><?php the_date("d.m.Y"); ?></div>
                <div class="blog-thumbnail"><?php the_post_thumbnail('large'); ?></div>
                <span class="blog-excerpt"><?php echo the_excerpt(); ?></span>
                <a href="<?php the_permalink(); ?>"><button><?php _e('full post', 'writertheme')?></button></a>
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
            </div>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'writertheme'); ?></p>
        <?php endif; ?>
    </div>
<!--    <div class="language"><span>ang / pl</span></div>-->
<?php get_footer('photos'); ?>