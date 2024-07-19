<?php
/*
  Template Name: Templage Default
*/
get_header();
?>
<main class="main__all__pages">
  <div class="template-default__container__behavior">
    <section class="left__section__image">
      <?php
      $data = getClubPageData();
      ?>
      <div class="swiper-wrapper">
        <?php if (is_array($data) && isset($data['club']['image-illustration1']['url']) && isset($data['club']['image-illustration1']['title'])) { ?>
          <div class="swiper-slide">
            <img src="<?php echo $data['club']['image-illustration1']['url'] ?>" alt="<?php echo $data['club']['image-illustration1']['title'] ?>">
          </div>
        <?php } ?>
        <?php if (is_array($data) && isset($data['club']['image-illustration2']['url']) && isset($data['club']['image-illustration2']['title'])) { ?>
          <div class="swiper-slide">
            <img src="<?php echo $data['club']['image-illustration2']['url'] ?>" alt="<?php echo $data['club']['image-illustration2']['title'] ?>">
          </div>
        <?php } ?>
        <?php if (is_array($data) && isset($data['club']['image-illustration3']['url']) && isset($data['club']['image-illustration3']['title'])) { ?>
          <div class="swiper-slide">
            <img src="<?php echo $data['club']['image-illustration3']['url'] ?>" alt="<?php echo $data['club']['image-illustration3']['title'] ?>">
          </div>
        <?php } ?>
        <?php if (is_array($data) && isset($data['club']['image-illustration4']['url']) && isset($data['club']['image-illustration4']['title'])) { ?>
          <div class="swiper-slide">
            <img src="<?php echo $data['club']['image-illustration4']['url'] ?>" alt="<?php echo $data['club']['image-illustration4']['title'] ?>">
          </div>
        <?php } ?>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </section>
    <section class="right__section__content">
      <div class="right__section__container">
        <header class="right__section__header">
          <h1><?php echo $data['club']['titre'] ?></h1>
          <span class="style__border__bottom"></span>
        </header>
        <?php if ($data['club']['navigation']) { ?>
          <div class="right__section__nav">
            <?php echo $data['club']['navigation'] ?>
          </div>
        <?php } ?>
        <?php if ($data['club']['image1'] && $data['club']['image2']) { ?>
          <div class="right__section__referees">
            <figure>
              <img src="<?php echo $data['club']['image1']['url'] ?>" alt="<?php echo $data['club']['image1']['title'] ?>">
            </figure>
            <figure>
              <img src="<?php echo $data['club']['image2']['url'] ?>" alt="<?php echo $data['club']['image2']['title'] ?>">
            </figure>
          </div>
        <?php } ?>
        <?php if ($data['club']['contenu-principal']) { ?>
          <div class="right__section__main__content">
            <?php echo $data['club']['contenu-principal'] ?>
          </div>
        <?php } ?>
        <?php if ($data['club']['carrousel']) { ?>
          <div class="right__section__gallery">
            <section class="right__section__gallery__content">
              <?php echo $data['club']['carrousel'] ?>
            </section>
          </div>
        <?php } ?>
        <?php if ($data['club']['contenu-secondaire']) { ?>
          <div class="right__section__second__content">
            <p><?php echo $data['club']['contenu-secondaire'] ?></p>
          </div>
        <?php } ?>
        <?php if ($data['club']['contenu-embarque']) { ?>
          <div class="right__section__embed__content">
            <?php echo $data['club']['contenu-embarque'] ?>
          </div>
        <?php } ?>
      </div>
    </section>
  </div>
</main>
<?php
get_footer();
?>