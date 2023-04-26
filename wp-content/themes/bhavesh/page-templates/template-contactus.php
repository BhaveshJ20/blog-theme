<?php
/**
* Template Name: Contact Us
**/
?>
<?php get_header(); ?>
<!--CONTENT START-->
<section class="breadcrumbs">
	<div class="container clearfix">
		<div class="row">
			<div class="col-sm-8">
				<div class="page-title">
					<h3>CONTACT US</h3>
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
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.118679277544!2d72.76641441493464!3d21.14767478593407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be052787c8e0cd3%3A0xd9e8cba8b329cc64!2sSNS%20Atria!5e0!3m2!1sen!2sin!4v1640844522901!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>

<section class="container clearfix">
    <div class="row">
        <!--CONTENTAREA START-->
        <div class="col-sm-8">
            <div class="contentarea">
                <div class="contact-form">
                    <div class="title">
                        <h3>GET IN TOUCH!</h3>
                    </div>
                    <?php echo do_shortcode('[contact-form-7 id="127" title="contact form 2"]') ?>
                </div>
            </div>
        </div>
        <!--CONTENTAREA END-->
        
        <!--SIDEBAR START-->
        <div class="col-sm-4">
            <div class="sidebar">
                <div class="box">
                    <div class="box-heading clearfix">
                        <h5>OFFICE</h5>
                    </div>
                    <div class="box-content">
                        <div class="list2">
                            <ul>
                                <li>
                                    Address : Hill 95, 1012 California
                                </li>
                                <li>
                                    Phone : +1 123456 7890
                                </li>
                                <li>
                                    Fax : +88 (0) 123456 7890
                                </li>
                                <li>
                                    Email : <a href="#">yourmail@company.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--SIDEBAR END-->
    </div>
</section>
<!--CONTENT END-->

<?php get_footer(); ?>