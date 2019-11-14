<?php get_header(); ?>
    <div class="content-box">
        <?php get_template_part('content/content', 'name'); ?>
        <div class="paper-box">
            <h1><?php _e('I write', 'writertheme')?></h1>
        </div>
        <?php get_template_part('content/content', 'menu'); ?>
<!--        <div class="language"><span>ang / pl</span></div>-->
<?php get_footer(); ?>