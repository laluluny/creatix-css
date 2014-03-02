<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<!-- creatix scaffolder -->
	<div class="row">
		<div class="col-8">	
		
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>
				<?php twentythirteen_post_nav(); ?>
				<?php comments_template(); ?>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

		<!-- creatix scaffolder -->
		</div> <!-- END col-8 -->
		<div class="col-4">
			<?php get_sidebar(); ?>
		</div> <!-- END col-4 -->
	</div> <!-- END row -->


<?php get_footer(); ?>