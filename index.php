<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coolmat
 */

get_header();
?>

	<main id="primary" class="site-main">

	<!-- On mettre notre section hero ici 
	todo : make it dynamic ! 
	-->
	<div class="hero">
		<div class="hero-inner container">
			<h1 class="hero-text">
			<!-- Ici on utilise le template tag pour choper le nom du site -->
				<span class="hero-sitename"><?php bloginfo('name') ?></span> fried seaweed roll
			</h1>
			<p class="hero-description">
				<span class="magenta"><?php bloginfo('name') ?></span> is a restaurant that creates future flavor nostalgia
				of street food.
			</p>
		</div>
	</div>

<!-- TODO : make this dynamic -->
	<div class="intro" id="intro">
		<div class="intro-inner">
			<h2 class="intro-title">introducing coolmat</h2>
			<p class="intro-text">Street food that was born in tough times. Street food that everybody loves.
				<span class="yellow"><br>Cool mat</span> is on a mission to provide future 
				flavor nostalgia of street food for men, 
				women, children, grandpas and grandmas.
				we only use the best ingredients.</p>
		</div>
	</div>

	<div class="food-title" id="food">Menu</div>

	<div class="food-grid">
		<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );
			endwhile;
			the_posts_navigation();
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
	</div>

	</main><!-- #main -->

<?php
get_footer();
