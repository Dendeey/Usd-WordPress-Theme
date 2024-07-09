<footer class="site__footer">
    <a class="footer__logo" href="<?php echo home_url('/'); ?>">
        <img class="footer__logo__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_usd.png" alt="Logo footer">
    </a>
    <div class="footer__nav">
        <div class="footer__nav__item">
            <a class="footer__nav__item__title" href="#">Club</a>
            <nav>
                <?php wp_nav_menu(array(
                    'theme_location' => 'burger-club_dropdown',
                    'container' => 'ul', // afin d'éviter d'avoir une div autour 
                    'menu_class' => 'burger__club', // ma classe personnalisée  
                )); ?>
            </nav>
        </div>
        <div class="footer__nav__item">
            <a class="footer__nav__item__title" href="#"><span>é</span>quipes</a>
            <nav>
                <?php wp_nav_menu(array(
                    'theme_location' => 'burger-equipes_dropdown',
                    'container' => 'ul', // afin d'éviter d'avoir une div autour 
                    'menu_class' => 'burger__equipes', // ma classe personnalisée  
                )); ?>
            </nav>
        </div>
        <div class="footer__nav__item">
            <?php wp_nav_menu(array(
                'theme_location' => 'footer-menu',
                'container' => 'ul', // afin d'éviter d'avoir une div autour 
                'menu_class' => 'footer__burger__menu', // ma classe personnalisée  
            )); ?>
        </div>
        <div class="footer__nav__item">
            <p>Nous suivre</p>
            <nav class="footer__nav__social__media">
                <a class="footer__nav__social__media__icon" href="https://www.instagram.com/usdomagne/" target="_blank"><i class="fa-brands fa-square-instagram fa-2xl"></i></a>
                <a class="footer__nav__social__media__icon" href="https://www.facebook.com/usdomagne?locale=fr_FR" target="_blank"><i class="fa-brands fa-square-facebook fa-2xl"></i></a>
            </nav>
        </div>
    </div>
    <div class="footer__section__gallery">
        <figure>
            <img class="footer__section__img__item" src="<?php echo get_template_directory_uri(); ?>/assets/img/slogan_usd_yellowborder.png" alt="Slogan usd">
        </figure>
    </div>
    <?php wp_nav_menu(array(
        'theme_location' => 'footer',
        'container' => 'ul', // afin d'éviter d'avoir une div autour 
        'menu_class' => 'footer__menu', // ma classe personnalisée  
    )); ?>
</footer>

<?php wp_footer(); ?>
</body>

</html>