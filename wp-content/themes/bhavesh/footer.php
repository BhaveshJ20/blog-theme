<footer class="footer">
	<section class="container">
		<div class="footer-top clearfix">
			<div class="row">
				<div class="col-sm-4">
					<div class="abouts">
					<?php dynamic_sidebar( 'footer-1' ); ?>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="contact-details">
						<div class="footer-heading">
							<h2 class="">Contact Us</h2>
						</div>
						<div class="footer_contact_form">
						<?php dynamic_sidebar( 'footer-2' ); ?>
							<!-- <form name="" method="">
								<div class="form-group">
									<input name="" class="form-control" type="text" placeholder="Name">
								</div>
								<div class="form-group">
									<input name="" class="form-control" type="email" placeholder="Email">
								</div>
								<div class="form-group">
									<textarea class="form-control" rows="2" placeholder="Comment" ></textarea>
								</div>
								<div class="form-group">
									<input name="" class="form-control submit" type="submit" placeholder="Send Us">
								</div>
							</form> -->
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="instagram_phpotos">
						<div class="footer-heading">
							<h2 class="">Instagram Photos</h2>
						</div>
						<?php dynamic_sidebar( 'footer-3' ); ?>
						<!-- <div class="instagram_photos_list clearfix">
							<ul>
								<li><a href="https://www.instagram.com/?hl=en" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/img4.jpg" alt=""></a></li>
								<li><a href="https://www.instagram.com/?hl=en" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/img2.jpg" alt=""></a></li>
								<li><a href="https://www.instagram.com/?hl=en" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/img3.jpg" alt=""></a></li>
								<li><a href="https://www.instagram.com/?hl=en" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/img5.jpg" alt=""></a></li>
								<li><a href="https://www.instagram.com/?hl=en" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/img6.jpg" alt=""></a></li>
								<li><a href="https://www.instagram.com/?hl=en" target="_blank"><img src="<?php echo get_template_directory_uri();?>/images/img7.jpg" alt=""></a></li>
							</ul>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="footer-bottom">
		<div class="container clearfix">
			<div class="copyright">
				<?php
						$copyright = get_field('copyright','option');
				?>
						<?php echo $copyright;?>
			</div>
			<div class="social-icon"> 
			<?php
				$twitter = get_field('twitter','option');
				$facebook = get_field('facebook','option');
				$pinterest = get_field('pinterest','option');
				$rss = get_field('rss','option');
				$instagram = get_field('instagram','option');
			?>
				<a href="<?php echo $twitter;?>"><i class="fa fa-twitter"></i></a> 
				<a href="<?php echo $facebook;?>"><i class="fa fa-facebook"></i></a>
				<a href="<?php echo $pinterest;?>"><i class="fa fa-pinterest"></i></a>
				<a href="<?php echo $rss;?>"><i class="fa fa-rss"></i></a>  
				<a href="<?php echo $instagram;?>"><i class="fa fa-instagram"></i></a>
			</div>
		</div>
	</section>
</footer>
	

<script src="<?php echo get_template_directory_uri();?>/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/lightbox.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/owl.carousel.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/custom.js"></script>

<?php wp_footer(); ?>
</body>
</html>
