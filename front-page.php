<?php get_header(); ?>
<main>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php the_content(); ?>
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

	<?php endwhile;
	endif; ?>
</main>
<?php get_footer(); ?>