<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>


	<!-- include office features -->
	<?php include 'office-features.php'; ?>
	

	<!-- creatix scaffolder -->
	<div class="row">
		<div class="col-8">	

			<div id="primary" class="content-area">
				<div id="content" class="site-content" role="main">
				<?php if ( have_posts() ) : ?>
		
					<?php /* The loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', get_post_format() ); ?>
					<?php endwhile; ?>
		
					<?php twentythirteen_paging_nav(); ?>
		
				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>
				<?php endif; ?>
		
				</div><!-- #content -->
			</div><!-- #primary -->
	
		<!-- creatix scaffolder -->
		</div> <!-- END col-8 -->
		<div class="col-4">
			<?php get_sidebar(); ?>
		</div> <!-- END col-4 -->
	</div> <!-- END row -->


<?php get_footer(); ?>