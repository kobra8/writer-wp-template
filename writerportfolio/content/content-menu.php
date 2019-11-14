<div class="menu-header">
    <a class="nav-link" href="<?php echo esc_url( home_url( '/o-mnie' ) ); ?>">o mnie</a>
	<a class="nav-link" href="<?php echo esc_url( home_url( '/ksiazka' ) ); ?>">książka</a>
	<a class="nav-link" href="<?php echo esc_url( home_url( '/film' ) ); ?>">film</a>
	<a class="nav-link" href="<?php echo esc_url( home_url( '/publikacje-i-scenariusze' ) ); ?>">publikacje i scenariusze</a>
	<a class="nav-link" href="<?php echo esc_url( home_url( '/teksty' ) ); ?>">teksty</a>
	<a class="nav-link" href="<?php echo esc_url( home_url( '/e-booki' ) ); ?>">e-booki</a>
	<a class="nav-link" href="<?php echo esc_url( home_url( '/blog' ) ); ?>">notatki</a>
	<a class="nav-link" href="<?php echo esc_url( home_url( '/kontakt' ) ); ?>">kontakt</a>
</div>
<div class="menu-icon" onclick="displayMenu()"><div></div></div>
<script>
    var menu = false;

    function displayMenu() {
        if(menu) {
            jQuery('.menu-screen .menu-list a').each(function(index) {
                jQuery(this).delay(100*(5-index)).queue(function() {
                    jQuery(this).removeClass('rolled-in').dequeue();
                });
            });
            jQuery('.menu-screen').delay(1000).fadeOut(500);
            jQuery('.menu-icon').removeClass("displayed");
            jQuery('.menu-icon').addClass("animated-menu-icon");
        } else {
            jQuery('.menu-screen').fadeIn(500, function() {
                jQuery('.menu-screen .menu-list a').each(function(index) {
                    jQuery(this).delay(100*index).queue(function() {
                        jQuery(this).addClass('rolled-in').dequeue();
                    });
                });
            });
            jQuery('.menu-icon').addClass("displayed");
            jQuery('.menu-icon').removeClass("animated-menu-icon");
        }
        menu = !menu;
    }

    jQuery('.menu-icon').hover(function() {
        if(!jQuery('.menu-icon').hasClass('displayed'))
            jQuery('.menu-icon').addClass("animated-menu-icon");
    }, function() {
        jQuery('.menu-icon').removeClass("animated-menu-icon");
    });

    jQuery(function(){
    var current = location.pathname;
    console.log(current);
    if(current === '/'){
           return;
        }
    jQuery('.menu-header a').each(function(){
        var $this = jQuery(this);
        var attrHref = $this.attr('href').slice(25).concat('/');
        console.log($this.attr('href').slice(25).concat('/'));
        // if the current path is like this link, make it active
        if(attrHref.indexOf(current) !== -1){
            $this.addClass('active');
        }
    })
})


</script>
<div class="menu-screen">
    <h3>Menu</h3>
    <div class="menu-list">
        <a href="<?php echo esc_url( home_url( '/o-mnie' ) ); ?>">o mnie</a>
	    <a href="<?php echo esc_url( home_url( '/ksiazka' ) ); ?>">książka</a>
        <a href="<?php echo esc_url( home_url( '/film' ) ); ?>">film</a>
        <a href="<?php echo esc_url( home_url( '/publikacje-i-scenariusze' ) ); ?>">publikacje i scenariusze</a>
	    <a href="<?php echo esc_url( home_url( '/teksty' ) ); ?>">teksty</a>
	    <a href="<?php echo esc_url( home_url( '/e-booki' ) ); ?>">e-booki</a>
	    <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">notatki</a>
	    <a href="<?php echo esc_url( home_url( '/kontakt' ) ); ?>">kontakt</a>
    </div>
    <div class="social-links">
        <a href="https://www.facebook.com/patrycja.nowak.7509"><div class="align-left">Facebook</div></a>
        <a href="https://www.instagram.com/czampurta/"><div class="align-right">Instagram</div></a>
    </div>
</div>