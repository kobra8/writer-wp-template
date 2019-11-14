<?php
/*
 * Template Name: O mnie
 */
?>

<?php get_header(); ?>
    <div class="side-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/ja.jpg')">
        <span class="photo-author">foto: Magda Moniczewska</span>
    </div>
    <div class="content-box">
        <?php get_template_part('content/content', 'name'); ?>
        <?php get_template_part('content/content', 'menu'); ?>
        <!-- <div class="about-box">
            <span class="name">Patrycja Mnich</span>
            <span class="role"><?php _e('scenarist / author', 'writertheme')?></span>
        </div> -->
        <div class="about-text">
            <?php
            global $post;
            $content = apply_filters('the_content', $post->post_content);
            echo $content;
            ?>
        </div>
<!--        <div class="more-button" onclick="swapText();">
            <div class="cross-vertical"></div>
            <div class="cross-horizontal"></div>
            <div class="bio-info">BIO</div> -->
        <!-- <script>
            var detailed = true;
            function swapText() {
                if(!detailed) {
                    var frame = jQuery('.about-box');
                    frame.addClass('high-box');
                    jQuery('.more-button').addClass('crossed');
                    jQuery('.bio-info').hide();
                    jQuery('.about-text').fadeIn(2000);
                    jQuery('.name').hide();
                    jQuery('.role').hide();
                    jQuery('.menu-icon').hide();
                    jQuery('.name-header').hide();
                }
                else {
                    var frame = jQuery('.about-box');
                    frame.removeClass('high-box');
                    jQuery('.more-button').removeClass('crossed');
                    jQuery('.bio-info').delay(700).fadeIn(2000);
                    jQuery('.about-text').hide();
                    jQuery('.name').show();
                    jQuery('.role').show();
                    jQuery('.menu-icon').show();
                    jQuery('.name-header').fadeIn(2000);
                }
                detailed = !detailed;
            }
        </script> -->
        <?php if($pagename == 'about-me') {?>
            <div class="language"><span><a href="o-mnie"><strong>ang</strong> / pl</a></span></div>
        <?php } ?>
        <?php if($pagename == 'o-mnie') {?>
            <div class="language"><span><a href="about-me">ang / <strong>pl</strong></a></span></div>
        <?php } ?>
<?php get_footer(); ?>