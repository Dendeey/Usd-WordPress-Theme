<?php get_header(); ?>

<?php
if (is_category()) {
	$title = "Catégorie : " . single_tag_title('', false);
} elseif (is_tag()) {
	$title = "Étiquette : " . single_tag_title('', false);
} elseif (is_search()) {
	$title = "Vous avez recherché : " . get_search_query();
} else {
	$title = 'Actualités';
}
?>

<main class="main__all__pages">
	<section class="header__all__pages">
		<div class="header__all__pages__container container__behavior">
			<nav class="header__all__pages__nav">
				<ul>
					<li>
						<a href="<?php echo home_url('/'); ?>">Accueil</a>
					</li>
					<li>
						<span><i class="fa-solid fa-minus"></i></span>
					</li>
					<li>
						<span class="nav__item__bold">Actualités</span>
					</li>
				</ul>
			</nav>
			<div class="header__all__pages__title">
				<h1>Actualités</h1>
				<span class="style__border__bottom"></span>
			</div>
		</div>
	</section>
	<section class="actualites__content">
		<div class="actualites__content__container container__behavior">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<a href="<?php the_permalink(); ?>" class="post__link">
						<article class="post">
							<figure>
								<?php the_post_thumbnail(); ?>
							</figure>
							<div>
								<p class="post__meta">
									Publié le <?php the_time(get_option('date_format')); ?>
								</p>
								<h2><?php the_title(); ?></h2>
							</div>
							<span class="post__border__bottom"></span>
						</article>
					</a>
			<?php endwhile;
			endif; ?>
		</div>
		<div class="posts__pagination__nav">
			<?php the_posts_pagination(); ?>
		</div>
	</section>
</main>

<?php get_footer(); ?>