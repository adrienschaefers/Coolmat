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

	<!-- Ici on ajout un query pour montrer qu'un seul post de catégorie "menu" -->
	<?php query_posts( 'posts_per_page= 1&category_name=menu&orderby=rand'); ?>
	<?php if (have_posts()) : $item_number = 1 ; while (have_posts()) : the_post(); ?>

	<div class="hero">
		<div class="hero-inner container">
			<h1 class="hero-text lowercase">
			<!-- Ici on utilise le template tag pour choper le nom du site -->
				<span class="hero-sitename"><?php bloginfo('name') ?></span> 
				<?php the_title(); ?>
			</h1>
			<p class="hero-description lowercase">
				<span class="magenta"><?php bloginfo('description') ?>
			</p>
		</div>
	</div>

	<?php ;
		endwhile;
		endif;
	?>

	
	<!-- Here we query for our new intro custom post type and get just
		one single post -->

	<?php query_posts( 'posts_per_page= 1&post_type=intro'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<!-- TODO : make this dynamic -->
			<div class="intro" id="intro">
				<div class="intro-inner">
					<h2 class="intro-title"><?php the_title(); ?></h2>
					<div class="intro-text"><?php the_content(); ?></div>
				</div>
			</div>
		<?php ;
			endwhile;
			endif;
		?>



	<h2 class="food-title container" id="food">Menu</h2>

	<div class="grid">
		<?php
// Ici on réecrit un query pour overrider les instructions donner plus haut
		query_posts( 'posts_per_page=20&category_name=menu' );
		if ( have_posts() ) :
			/* Start the Loop */
			$item_number = 1;
			while ( have_posts() ) :
				the_post();
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */			
				?>
		

			<?php	get_template_part( 'template-parts/content', get_post_type() );

				$item_number ++;
			endwhile;
			the_posts_navigation();
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
	</div>

	<h2 class="map-title container" id="map">direction to coolmat</h2>


	<!-- Here we query for our location custom post types -->
	<?php query_posts( 'post_type=location'); ?>
	<!-- Then we loop over them  -->
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="location grid">
			<div class="map">
				<div class="map-inner">

				<!-- Firstly we check if the map custom filled in -->
					<?php if(get_field('map')): ?>

				<!-- If it is, we output  it here -->
						<?php the_field('map'); ?>
					<?php endif; ?>
		
				</div> 
			</div>

			<div class="map-text">
				<?php the_content(); ?>
			</div>
		</div>

		<?php endwhile; endif; ?>
	</div>
	</main><!-- #main -->

<?php
get_footer();
