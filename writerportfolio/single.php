<?php get_header(); ?>
    <script>
        jQuery(function()
        {
            jQuery('.scroll-pane').jScrollPane().getVerticalScrollBar().setPreferredSize(new Dimension(10,0));
        });
    </script>
    <div class="content-box">
        <?php get_template_part('content/content', 'name'); ?>
        <?php get_template_part('content/content', 'menu'); ?>
        <div class="blog-box">
        <h3><?php _e('Notatki', 'writertheme')?></h3>
        <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="post-box">
                <div class="blog-date"><?php the_date("d.m.Y"); ?></div>
                <div class="blog-thumbnail"><?php the_post_thumbnail('large'); ?></div>
                <span class="blog-excerpt"><?php echo the_excerpt(); ?></span>
            </div>
            <div class="scroll-pane">
                <p><?php the_content() ?></p>
            </div>
            <div class="copyrights"><?php _e('/ All rights reserved.', 'writertheme')?><br>
                <?php _e('Do not copy or distribute without author\'s permission.', 'writertheme')?></div>
            <div class="pagination pagination-single">
                <?php previous_post_link('%link', '<'); next_post_link('%link', '>'); ?>
            </div>
        <?php endwhile; ?>

        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </div>
  
<!--    <div class="language"><span>ang / pl</span></div>-->
<?php get_footer(); ?>