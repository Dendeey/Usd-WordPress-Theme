<?php if (!is_front_page()) { ?>
    <section class="swiper-slider">
        <h1 class="title__partenaires">Partenaires</h1>
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partenaires/BreizhCola_logo.webp" alt="" class="swiper-sponsor"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partenaires/CAFPI.webp" alt="" class="swiper-sponsor"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partenaires/CAPCLIMAT.webp" alt="" class="swiper-sponsor"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partenaires/CLOUET.webp" alt="" class="swiper-sponsor"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partenaires/Crit_logo.webp" alt="" class="swiper-sponsor"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partenaires/Denual_logo.webp" alt="" class="swiper-sponsor"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partenaires/FERRON.webp" alt="" class="swiper-sponsor"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partenaires/groupama.png" alt="" class="swiper-sponsor"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partenaires/KerBtp_logo.webp" alt="" class="swiper-sponsor"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partenaires/LaCaveDesSaveurs_logo.webp" alt="" class="swiper-sponsor"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partenaires/LeComptoir_logo.webp" alt="" class="swiper-sponsor"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partenaires/lmconstruction.png" alt="" class="swiper-sponsor"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partenaires/motorcraft.png" alt="" class="swiper-sponsor"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partenaires/PLANCHAIS.webp" alt="" class="swiper-sponsor"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partenaires/plombreizh.png" alt="" class="swiper-sponsor"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partenaires/Safe_logo.webp" alt="" class="swiper-sponsor"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partenaires/SoCooc_logo.webp" alt="" class="swiper-sponsor"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partenaires/stephaneplaza.png" alt="" class="swiper-sponsor"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partenaires/superu.png" alt="" class="swiper-sponsor"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partenaires/t&c.png" alt="" class="swiper-sponsor"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partenaires/tiriault.png" alt="" class="swiper-sponsor"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partenaires/VAND.png" alt="" class="swiper-sponsor"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partenaires/vousfinancer.png" alt="" class="swiper-sponsor"></div>
            </div>
        </div>
    </section>
<?php } ?>

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
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<?php wp_footer(); ?>
</body>

</html>