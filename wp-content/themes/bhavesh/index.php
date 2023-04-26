<?php get_header(); ?>

<!--SLIDER START-->
	
<section class="home-banner">
		<div class="container clearfix">
			<div class="row">
				<div class="col-sm-8">
					<div class="welcome-banner">
						<?php
							echo do_shortcode('[smartslider3 slider="2"]');
						?>
						<!-- <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner" role="listbox">
								<div class="item active">
									<img src="<?php echo get_template_directory_uri();?>/images/slide1.jpg" alt="slide Image" />
									<div class="carousel-caption">
										<h1>WELCOME TO <span>BLOG</span> THEME</h1>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis et sem sed sollicitudin.Aliquam commodo felis non eget facilisis vitae, turpis tortor, praesent sodales in pellentesque sit. </p>
										<button type="button" onClick="window.location='blog.html';" class="white-bigbtn">LEARN MORE</button> 
									</div>
								</div>
								<div class="item">
									<img src="<?php echo get_template_directory_uri();?>/images/slide2.jpg" alt="slide Image" />
									<div class="carousel-caption">
										<h1>WELCOME TO <span>BLOG</span> THEME</h1>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis et sem sed sollicitudin.Aliquam commodo felis non eget facilisis vitae, turpis tortor, praesent sodales in pellentesque sit. </p>
										<button type="button" onClick="window.location='blog.html';" class="white-bigbtn">LEARN MORE</button> 
									</div>
								</div>
							</div>
								<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
									<span class="arrow-left" aria-hidden="true"><i class="fa fa-long-arrow-left"></i></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
									<span class="arrow-right" aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
									<span class="sr-only">Next</span>
								</a>
						</div> -->
					</div>
				</div>
				<div class="col-sm-4">
					<div class="home-banner-post">
					<?php
						echo do_shortcode('[smartslider3 slider="3"]');
					?>
						 <!-- <div id="carousel-example-generic-1" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner" role="listbox">
								<div class="item active">
									<img src="<?php echo get_template_directory_uri();?>/images/img1.jpg" alt="slide Image" />
										<div class="home-banner-post-details">
											<h3><a href="blog-details.html">Lorem ipsum dolor sit amet</a> </h3>
											<div class="home-banner-post-details-cont clearfix">
												<p><span><i class="fa fa-calendar"></i></span> Oct 06, 2015</p>
												<p><a href="author.html"><span><i class="fa fa-user"></i></span> By Admin</a></p>
												<p><a href="javascript:void(0);"><span><i class="fa fa-eye"></i></span> 23</a></p>
												<p><a href="author.html"><span><i class="fa fa-comment"></i></span> 6</a></p>
											</div>
										</div>
								</div>
								<div class="item">
									<img src="<?php echo get_template_directory_uri();?>/images/img1.jpg" alt="slide Image" />
									<div class="home-banner-post-details">
										<h3><a href="blog-details.html">Lorem ipsum dolor sit amet</a> </h3>
										<div class="home-banner-post-details-cont clearfix">
											<p><span><i class="fa fa-calendar"></i></span> Oct 06, 2015</p>
											<p><a href="author.html"><span><i class="fa fa-user"></i></span> By Admin</a></p>
											<p><a href="javascript:void(0);"><span><i class="fa fa-eye"></i></span> 23</a></p>
											<p><a href="author.html"><span><i class="fa fa-comment"></i></span> 6</a></p>
										</div>
									</div>
								</div>
							</div>
								<a class="left carousel-control" href="#carousel-example-generic-1" role="button" data-slide="prev">
									<span class="arrow-left" aria-hidden="true"><i class="fa fa-arrow-circle-o-left"></i></i></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" href="#carousel-example-generic-1" role="button" data-slide="next">
									<span class="arrow-right" aria-hidden="true"><i class="fa fa-arrow-circle-o-right"></i></span>
									<span class="sr-only">Next</span>
								</a>
						</div>	 -->
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!--SLIDER END-->

  <!--CONTENT START-->
	<section>
		<div class="container clearfix">
			<div class="row">
				<div class="col-sm-8">
				<!--CONTENTAREA START-->
					<div class="contentarea">
						<div class="row clearfix">
							<div class="col-sm-6">
								<div class="post-content">
									<div class="post-image">
										<a href="blog-details.html"><img src="<?php echo get_template_directory_uri();?>/images/p1.jpg" alt="" ></a>
										<div class="favourite">
											<a href="javascript:void(0);"><i class="fa fa-heart"></i></a>
										</div>
									</div>
									<div class="post-text">
										<div class="post-info clearfix">
											<p><span><i class="fa fa-calendar"></i></span> Oct 06, 2015</p>
											<p><a href="author.html"><span> <i class="fa fa-user"></i></span> By Admin</a></p>
											<p><a href="javascript:void(0);"><span> <i class="fa fa-eye"></i></span> 23</a></p>
											<p><a href="author.html"><span> <i class="fa fa-comment"></i></span> 6</a></p>
										</div>
										<hr>
										<h3>
											<a href="blog-details.html">This is a Standard Post</a>
										</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
										</p>
										<div class="post-btn">
											<a class="primary-btn" href="blog-details.html"><span class="arrow"><i class="fa fa-long-arrow-right"></i></span><span class="btn-text">READ MORE</span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="post-content">
									<div class="post-image">
										<a href="blog-details.html"><img src="<?php echo get_template_directory_uri();?>/images/p2.jpg" alt="" ></a>
										<div class="favourite">
											<a href="javascript:void(0);"><i class="fa fa-heart"></i></a>
										</div>
									</div>
									<div class="post-text">
										<div class="post-info clearfix">
											<p><span><i class="fa fa-calendar"></i></span> Oct 06, 2015</p>
											<p><a href="author.html"><span> <i class="fa fa-user"></i></span> By Admin</a></p>
											<p><a href="javascript:void(0);"><span> <i class="fa fa-eye"></i></span> 23</a></p>
											<p><a href="author.html"><span> <i class="fa fa-comment"></i></span> 6</a></p>
										</div>
										<hr>
										<h3>
											<a href="blog-details.html">This is a Standard Post</a>
										</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
										</p>
										<div class="post-btn">
											<a class="primary-btn" href="blog-details.html"><span class="arrow"><i class="fa fa-long-arrow-right"></i></span><span class="btn-text">READ MORE</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row alter_post-content clearfix">
							<div class="col-sm-6">
								<div class="post-content">
									<div class="post-image">
										<a href="blog-details.html"><img src="<?php echo get_template_directory_uri();?>/images/p3.jpg" alt="" ></a>
										<div class="favourite">
											<a href="javascript:void(0);"><i class="fa fa-heart"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="post-content">
									<div class="post-text post-text2">
										<div class="post-info max-post-info clearfix">
											<p><span><i class="fa fa-calendar"></i></span> Oct 06, 2015</p>
											<p><a href="author.html"><span> <i class="fa fa-user"></i></span> By Admin</a></p>
											<p><a href="javascript:void(0);"><span> <i class="fa fa-eye"></i></span> 23</a></p>
											<p><a href="author.html"><span> <i class="fa fa-comment"></i></span> 6</a></p>
										</div>
										<hr>
										<h3>
											<a href="blog-details.html">This is a Standard Post</a>
										</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore aliqua. Ut enim ad minim veniam, quis nostrud exercitation laboris nisi ut aliquip ex ea commodo consequat. </p>
										<div class="post-btn">
											<a class="primary-btn" href="blog-details.html"><span class="arrow"><i class="fa fa-long-arrow-right"></i></span><span class="btn-text">READ MORE</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row alter_post-content clearfix">
							<div class="col-sm-6">
								<div class="post-content">
									<div class="post-image">
										<a href="blog-details.html"><img src="<?php echo get_template_directory_uri();?>/images/p4.jpg" alt="" ></a>
										<div class="favourite">
											<a href="javascript:void(0);"><i class="fa fa-heart"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="post-content">
									<div class="post-text post-text2">
										<div class="post-info max-post-info clearfix">
											<p><span><i class="fa fa-calendar"></i></span> Oct 06, 2015</p>
											<p><a href="author.html"><span> <i class="fa fa-user"></i></span> By Admin</a></p>
											<p><a href="javascript:void(0);"><span> <i class="fa fa-eye"></i></span> 23</a></p>
											<p><a href="author.html"><span> <i class="fa fa-comment"></i></span> 6</a></p>
										</div>
										<hr>
										<h3>
											<a href="blog-details.html">This is a Standard Post</a>
										</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore aliqua. Ut enim ad minim veniam, quis nostrud exercitation laboris nisi ut aliquip ex ea commodo consequat. </p>
										<div class="post-btn">
											<a class="primary-btn" href="blog-details.html"><span class="arrow"><i class="fa fa-long-arrow-right"></i></span><span class="btn-text">READ MORE</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row alter_post-content clearfix">
							<div class="col-sm-6">
								<div class="post-content">
									<div class="post-image">
										<a href="blog-details.html"><img src="<?php echo get_template_directory_uri();?>/images/p5.jpg" alt="" ></a>
										<div class="favourite">
											<a href="javascript:void(0);"><i class="fa fa-heart"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="post-content">
									<div class="post-text post-text2">
										<div class="post-info max-post-info clearfix">
											<p><span><i class="fa fa-calendar"></i></span> Oct 06, 2015</p>
											<p><a href="author.html"><span> <i class="fa fa-user"></i></span> By Admin</a></p>
											<p><a href="javascript:void(0);"><span> <i class="fa fa-eye"></i></span> 23</a></p>
											<p><a href="author.html"><span> <i class="fa fa-comment"></i></span> 6</a></p>
										</div>
										<hr>
										<h3>
											<a href="blog-details.html">This is a Standard Post</a>
										</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore aliqua. Ut enim ad minim veniam, quis nostrud exercitation laboris nisi ut aliquip ex ea commodo consequat. </p>
										<div class="post-btn">
											<a class="primary-btn" href="blog-details.html"><span class="arrow"><i class="fa fa-long-arrow-right"></i></span><span class="btn-text">READ MORE</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row alter_post-content clearfix">
							<div class="col-sm-6">
								<div class="post-content">
									<div class="post-image">
										<a href="blog-details.html"><img src="<?php echo get_template_directory_uri();?>/images/p6.jpg" alt="" ></a>
										<div class="favourite">
											<a href="javascript:void(0);"><i class="fa fa-heart"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="post-content">
									<div class="post-text post-text2">
										<div class="post-info max-post-info clearfix">
											<p><span><i class="fa fa-calendar"></i></span> Oct 06, 2015</p>
											<p><a href="author.html"><span> <i class="fa fa-user"></i></span> By Admin</a></p>
											<p><a href="javascript:void(0);"><span> <i class="fa fa-eye"></i></span> 23</a></p>
											<p><a href="author.html"><span> <i class="fa fa-comment"></i></span> 6</a></p>
										</div>
										<hr>
										<h3>
											<a href="blog-details.html">This is a Standard Post</a>
										</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore aliqua. Ut enim ad minim veniam, quis nostrud exercitation laboris nisi ut aliquip ex ea commodo consequat. </p>
										<div class="post-btn">
											<a class="primary-btn" href="blog-details.html"><span class="arrow"><i class="fa fa-long-arrow-right"></i></span><span class="btn-text">READ MORE</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--CONTENTAREA END-->
				
				<!--SIDEBAR START-->
				<div class="col-sm-4">
					<?php get_sidebar(); ?>
				</div>
				<!--SIDEBAR END-->
			</div>
		</div>
	</section>
	
	<!--CONTENT END-->
<?php get_footer(); ?>
