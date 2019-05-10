<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package fcptcn
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container page404">
				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title page404title"> <a href="">Oops! That page can't be found.</a></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'fcptcn' ); ?></p>

						<?php
							get_search_form();
						?>

						<p class="warningLogo"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></p>


					</div><!-- .page-content -->
				</section><!-- .error-404 -->
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
