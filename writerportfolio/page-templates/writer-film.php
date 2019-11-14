<?php
/*
 * Template Name: Film
 */
?>

<?php get_header(); ?>
    <div class="side-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/kalina_jedrusik_pion.jpg')">
    </div>
    <div class="content-box">
        <?php get_template_part('content/content', 'name'); ?>
	    <?php get_template_part('content/content', 'menu'); ?>
        <div class="content-text">
            <?php
            global $post;
            $content = apply_filters('the_content', $post->post_content);
            echo $content;
            ?>
        </div>
<?php get_footer(); ?>