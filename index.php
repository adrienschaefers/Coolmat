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

	<h2 class="food-title container" id="food">Menu</h2>

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

	<h2 class="map-title container">direction to coolmat</h2>
	
	<div class="map-container">

		<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.9531939287017!2d126.86218631492683!3d37.55616653248025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c9c03c38738ad%3A0x1eff909f2c04315c!2s284-10%20Yeomchang-dong%2C%20Gangseo-gu%2C%20Seoul%2C%20Cor%C3%A9e%20du%20Sud!5e0!3m2!1sfr!2sfr!4v1623166259755!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>

		<div class="map-text">
			<div class="text">
				<h3>Business name</h3>
				<h4><?php bloginfo( "title" )?></h4>
			</div>
			<div class="text">
				<h3>Adress</h3>
				<h4>284-10 Yeomchang-dong, Gangseo-gu, Seoul</h4>
			</div>
			<div class="text">
				<h3>Phone Number</h3>
				<h4>02-9999-9999</h4>
			</div>
			<div class="text">
				<h3>Direction</h3>
				<h4>Get out of gate 3 and walk straight down for about
				200 meters. You will see Cool Mat on your left.</h4>
			</div>

		</div>
	</div>
	</main><!-- #main -->

<?php
get_footer();
