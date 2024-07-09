<?php get_header(); ?>

<main class="main__all__pages">
  <div class="container__behavior">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="post__single__header__content">
          <div class="post__single__header__fixed">
            <nav class="header__all__pages__nav">
              <ul>
                <li>
                  <a href="<?php echo home_url('/'); ?>">Accueil</a>
                </li>
                <li>
                  <span><i class="fa-solid fa-minus"></i></span>
                </li>
                <li>
                  <a href="http://localhost/usdomagne/actualites/">Actualités</a>
                </li>
                <li>
                  <span><i class="fa-solid fa-minus"></i></span>
                </li>
                <li>
                  <span class="nav__item__bold"><?php the_title(); ?></span>
                </li>
              </ul>
            </nav>
            <?php the_category(); ?>
            <h1><?php the_title(); ?></h1>
            <p class="post__meta">Publié le <?php the_time(get_option('date_format')); ?></p>
          </div>
        </div>
        <?php
        $dataPost = getSinglePostData();
      
        ?>
        <article class="post__single">
          <div class="post__single__img">
            <figure>
              <?php the_post_thumbnail(); ?>
            </figure>
          </div>
          <div class="post__single__content">
            <?php if ($dataPost['post']['content']) { ?>
              <section class="post__single__main__content">
                <?php echo $dataPost['post']['content']; ?>
              </section>
            <?php } ?>
            <section class="post__single__gallery">
              <?php
              $countPostData = count($dataPost['post']);
              
              for ($i = 1; $i < $countPostData; $i++) {

                $keyPost = 'image' . $i;
                if (isset($dataPost['post'][$keyPost])) {
                  $postData = $dataPost['post'][$keyPost];
                  
                }
                if ($postData) {
              ?>
                  <figure>
                    <img src="<?php echo $postData['url'] ?>" alt="<?php echo $postData['title'] ?>">
                  </figure>
                <?php } ?>
              <?php } ?>
            </section>
            <?php if ($dataPost['post']['affiche']) { ?>
              <section class="post__single__poster">
                <figure>
                  <img src="<?php echo $dataPost['post']['affiche']['url'] ?>" alt="<?php echo $dataPost['post']['affiche']['title'] ?>">
                </figure>
              </section>
            <?php } ?>
          </div>
        </article>
    <?php endwhile;
    endif; ?>
  </div>
  <?php derniers_articles(); ?>
</main>

<?php get_footer(); ?>