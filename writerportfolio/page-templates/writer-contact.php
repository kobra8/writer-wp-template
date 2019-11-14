<?php
/*
 * Template Name: Kontakt
 */
?>

<?php get_header(); ?>
    <div class="content-box">
        <?php get_template_part('content/content', 'name'); ?>
        <?php get_template_part('content/content', 'menu'); ?>
        <div class="contact-box">
            <p class="contact-text"><?php
                global $post;
                $content = apply_filters('the_content', $post->post_content);
                echo wp_strip_all_tags($content);
                ?>
            </p>
            <?php echo do_shortcode( '[contact-form-7 id="8" title="Contact form 1"]' ); ?>
        </div>
        <span class="photo-info">/ zdjęcia do wybranych tekstów: Jakub Mysiński</span>
        <span class="code-info">/ kod strony: Tomasz Danel</span>
<!--        <div class="language"><span>ang / pl</span></div>-->
<?php get_footer(); ?>