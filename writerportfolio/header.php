<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>" media="all" />
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<script>
    jQuery.each( jQuery('*'), function() {
        if( jQuery(this).width() > jQuery('body').width()) {
            console.log("Wide Element: ", jQuery(this), "Width: ", jQuery(this).width());
        }
    });
</script>

