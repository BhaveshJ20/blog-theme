<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

	<!-- <header class="page-header alignwide">
		<h1 class="page-title"><?php esc_html_e( 'Nothing here', 'twentytwentyone' ); ?></h1>
	</header>

	<div class="error-404 not-found default-max-width">
		<div class="page-content">
			<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentytwentyone' ); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div> -->
	<!--CONTENT START-->
	<section class="breadcrumbs">
	<div class="container clearfix">
		<div class="row">
			<div class="col-sm-8">
				<div class="page-title">
					<h3>404 NOT FOUND</h3>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="breadcrumbs-right">
					<?php get_breadcrumb(); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container">
	<div class="contentarea">
		<div class="search-results search-results2">
			<div class="title">
				<h3>Somethings wrong here...</h3>
			</div>
			<p>Sorry, but nothing matched your search terms. Please try again with some different keywords or Other category.</p>
			<form name="" method="">
				<div class="form-group clearfix">
					<div class="search-box">
						<input class="form-control" type="text" name="" placeholder="Search">
					</div>
					<div class="post-btn">
						<a class="green-btn" href="javascript:void(0);">SEARCH</a>
					</div>
				</div>
				<div class="post-btn">
					<a class="primary-btn" href="index2.html"><span class="arrow"><i class="fa fa-long-arrow-right"></i></span><span class="btn-text">GO TO HOME</span></a>
				</div>
			</form>
		</div>
	</div>
</section>
	
	<!--CONTENT END-->
<?php
get_footer();
