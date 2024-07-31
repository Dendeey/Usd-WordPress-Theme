<?php
/*
  Template Name: Templage Default Bis
*/
get_header();
?>

<?php

$dataBis = getTemplateDefaultBisData();

?>

<main>
    <section class="header__template__bis">
        <?php if ($dataBis['bis']['mainPicture']) { ?>
            <section class="header__bis__main__image">
                <figure>
                    <img src="<?php echo $dataBis['bis']['mainPicture']['url'] ?>" alt="<?php echo $dataBis['bis']['mainPicture']['title'] ?>">
                </figure>
            </section>
        <?php } ?>
        <div class="header__template__bis__container">
            <div>
                <nav class="header__template__bis__nav">
                    <ul>
                        <li>
                            <a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a>
                        </li>
                        <li>
                            <span><i class="fa-solid fa-minus"></i></span>
                        </li>
                        <li>
                            <span class="nav__item__bold"><?php echo the_title(); ?></span>
                        </li>
                    </ul>
                </nav>
                <div class="header__template__bis__title">
                    <h1><?php echo the_title(); ?></h1>
                    <span class="style__border__bottom"></span>
                </div>
            </div>

        </div>
    </section>
    <div class="container__behavior">

        <?php if ($dataBis['bis']['convocs']) { ?>
            <section class="template__bis__convocs">
                <?php echo $dataBis['bis']['convocs'] ?>
            </section>
        <?php } ?>

        <?php if ($dataBis['bis']['title1']) { ?>
            <section class="template__bis__first__gallery">

                <h2><?php echo $dataBis['bis']['title1'] ?>
                    <span class="style__border__bottom"></span>
                </h2>


                <?php if ($dataBis['bis']['gallery1']) { ?>
                    <section>
                        <?php echo $dataBis['bis']['gallery1'] ?>
                    </section>
                <?php } ?>
            </section>
        <?php } ?>

        <?php if ($dataBis['bis']['title2']) { ?>
            <section class="template__bis__second__gallery">

                <h3><?php echo $dataBis['bis']['title2'] ?>
                    <span class="style__border__bottom"></span>
                </h3>

                <?php if ($dataBis['bis']['gallery2']) { ?>
                    <section>
                        <?php echo $dataBis['bis']['gallery2'] ?>
                    </section>
                <?php } ?>
            </section>
        <?php } ?>

        <?php if ($dataBis['bis']['commonContent']) { ?>
            <section class="template__bis__common__content">
                <section class="template__bis__common__content__item">
                    <?php echo $dataBis['bis']['commonContent'] ?>
                </section>
            </section>
        <?php } ?>

    </div>
</main>
<?php
get_footer();
?>