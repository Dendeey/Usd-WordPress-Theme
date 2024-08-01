<?php
/*
  Template Name: Templage Teams
*/
get_header();
?>

<main>

  <?php
  $dataDef = getDefTeamsPageData();

  $dataGar = getGarTeamsPageData();

  $dataMil = getMilTeamsPageData();

  $dataAtt = getAttTeamsPageData();

  $dataStaff = getStaffTeamsPageData();

  $dataWidgets = getScorencoWidgetsTeamPage();
  ?>
  <section class="swiper-header">
    <nav class="header-container">
      <ul>
        <li>
          <a href="#">Accueil</a>
          <span>-</span>
          <p>Equipes séniors</p>
        </li>
        <li>
          <p>équipes séniors</p>
        </li>
      </ul>
    </nav>
  </section>
  <section class="main_swiper">

    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/nouveau_site_usd.png" alt="osef">
      </div>

      <div class="swiper-slide">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/nouveau_site_usd.png" alt="osef">
      </div>


      <div class="swiper-slide">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/nouveau_site_usd.png" alt="osef">
      </div>

    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </section>

  <section class="teams__navigation">

    <section class="teams__classement-calendrier__navigation">
      <button id="classement__teams__anchor">Classement</button>
      <button id="calendrier-resultats__teams__anchor">
        <span>Résultats</span>
        <span>/</span>
        <span>Calendrier</span>
      </button>
    </section>

    <section class="teams__gallery__navigation">
      <ul>
        <li><button id="gardiens">Gardiens</button></li>
        <li><button id="defenseurs">Défenseurs</button></li>
        <li><button id="milieux">Milieux</button></li>
        <li><button id="attaquants">Attaquants</button></li>
        <li><button id="staff">Staff</button></li>
      </ul>
    </section>

  </section>

  <div class="container__behavior">

    <section id="gardiens__target" class="teams__gallery">

      <section class="teams__gallery__header">
        <h2>Gardiens</h2>
      </section>

      <section class="teams__gallery__content">
        <?php
        $countGarData = count($dataGar['gar']);

        for ($g = 1; $g < $countGarData; $g++) {

          $keyGar = 'gar' . $g;
          if (isset($dataGar['gar'][$keyGar])) {
            $garData = $dataGar['gar'][$keyGar];
          }
          if ($garData) {
        ?>
            <figure>
              <img src="<?php echo $garData['url'] ?>" alt="<?php echo $garData['title'] ?>" loading="lazy">
            </figure>
          <?php } ?>
        <?php } ?>
      </section>

      <span class="style__border__bottom"></span>
    </section>

    <section id="defenseurs__target" class="teams__gallery">

      <section class="teams__gallery__header">
        <h2>Défenseurs</h2>
      </section>

      <section class="teams__gallery__content">
        <?php
        $countDefData = count($dataDef['def']);

        for ($i = 1; $i < $countDefData; $i++) {

          $keyDef = 'def' . $i;
          if (isset($dataDef['def'][$keyDef])) {
            $defData = $dataDef['def'][$keyDef];
          }
          if ($defData) {
        ?>
            <figure>
              <img src="<?php echo $defData['url'] ?>" alt="<?php echo $defData['title'] ?>" loading="lazy">
            </figure>
          <?php } ?>
        <?php } ?>
      </section>

      <span class="style__border__bottom"></span>
    </section>

    <section id="milieux__target" class="teams__gallery">

      <section class="teams__gallery__header">
        <h2>Milieux</h2>
      </section>

      <section class="teams__gallery__content">
        <?php
        $countMilData = count($dataMil['mil']);

        for ($m = 1; $m < $countMilData; $m++) {

          $keyMil = 'mil' . $m;
          if (isset($dataMil['mil'][$keyMil])) {
            $milData = $dataMil['mil'][$keyMil];
          }
          if ($milData) {
        ?>
            <figure>
              <img src="<?php echo $milData['url'] ?>" alt="<?php echo $milData['title'] ?>" loading="lazy">
            </figure>
          <?php } ?>
        <?php } ?>
      </section>

      <span class="style__border__bottom"></span>
    </section>

    <section id="attaquants__target" class="teams__gallery">

      <section class="teams__gallery__header">
        <h2>Attaquants</h2>
      </section>

      <section class="teams__gallery__content">
        <?php
        $countAttData = count($dataAtt['att']);

        for ($a = 1; $a < $countAttData; $a++) {

          $keyAtt = 'att' . $a;
          if (isset($dataAtt['att'][$keyAtt])) {
            $attData = $dataAtt['att'][$keyAtt];
          }
          if ($attData) {
        ?>
            <figure>
              <img src="<?php echo $attData['url'] ?>" alt="<?php echo $attData['title'] ?>" loading="lazy">
            </figure>
          <?php } ?>
        <?php } ?>
      </section>

      <span class="style__border__bottom"></span>
    </section>

    <section id="staff__target" class="teams__gallery">

      <section class="teams__gallery__header">
        <h2>Staff</h2>
      </section>

      <section class="teams__gallery__content">
        <?php
        $countStaffData = count($dataStaff['staff']);

        for ($s = 1; $s < $countStaffData; $s++) {

          $keyStaff = 'staff' . $s;
          if (isset($dataStaff['staff'][$keyStaff])) {
            $staffData = $dataStaff['staff'][$keyStaff];
          }
          if ($staffData) {
        ?>
            <figure>
              <img src="<?php echo $staffData['url'] ?>" alt="<?php echo $staffData['title'] ?>" loading="lazy">
            </figure>
          <?php } ?>
        <?php } ?>
      </section>

    </section>

  </div>

  <section class="teams__widgets">
    <?php if ($dataWidgets['widget']['widget1']) { ?>
      <section id="classement__teams">
        <h3>Classement</h3>
        <span class="style__border__bottom"></span>
        <?php echo $dataWidgets['widget']['widget1']; ?>
      </section>
    <?php } ?>

    <?php if ($dataWidgets['widget']['widget2']) { ?>
      <section id="calendrier-resultats__teams">
        <h3>Résultats<span>/</span>Calendrier</h3>
        <span class="style__border__bottom"></span>
        <?php echo $dataWidgets['widget']['widget2']; ?>
      </section>
    <?php } ?>
  </section>

</main>
<?php
get_footer();
?>