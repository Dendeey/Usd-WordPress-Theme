<?php get_header(); ?>
<main>
	<section class="laptop_wallpaper">
		<figure>
			<img src="<?php echo get_template_directory_uri() ?>/assets/img/fond_ecran_ordinateur.png" alt="Fond écran ordinateur">
		</figure>
	</section>
	<section class="mobile_wallpaper">
		<figure>
			<img src="<?php echo get_template_directory_uri() ?>/assets/img/fond_ecran_mobile.png" alt="Fond écran mobile">
		</figure>
	</section>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php the_content(); ?>
	<?php endwhile;
	endif; ?>
	<section class="section__partenaires">
		<h1 class="title__partenaires">Partenaires</h1>
		<div class="partenaires__items">
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
		</div>
	</section>


</main>
<?php get_footer(); ?>