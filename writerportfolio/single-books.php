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
            <h3></h3>
            <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="post-box text-post">
                    <div class="text-box">
                        <div class="text-title"><?php the_title(); ?> <span class="text-type"><?php
                                if(get_the_category()) echo '/'.get_the_category()[0]->name.'/';
                                ?></span></div>
                        <div class="book-thumbnail"><?php the_post_thumbnail('large'); ?></div>
                    </div>
                    <div class="book-description">
                        <span class="text-excerpt"><?php if(array_key_exists('description', get_post_custom())) echo get_post_custom()['description'][0];?></span>
                    </div>
                </div>
                <div class="photo-copyright"><?php if(array_key_exists('copyright', get_post_custom())) echo get_post_custom()['copyright'][0];?></div>
                <div class="scroll-pane">
                    <p><?php the_content() ?></p>
                </div>
                <div class="copyrights"><?php _e('/ All rights reserved.', 'writertheme')?><br>
                    <?php _e('Do not copy or distribute without author\'s permission.', 'writertheme')?>
                </div>
                <button class="book-button" onclick="location.href='<?php if(array_key_exists('pdf-link', get_post_custom())) echo get_post_custom()['pdf-link'][0];?>';"><?php _e('I want a pdf file', 'writertheme')?></button>
                <button class="book-button" onclick="location.href='<?php if(array_key_exists('ebook-link', get_post_custom())) echo get_post_custom()['ebook-link'][0];?>';"><?php _e('I want an e-book', 'writertheme')?></button>
            <?php endwhile; ?>

            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </div>
<!--        <div class="language"><span>ang / pl</span></div>-->
<?php get_footer(); ?>