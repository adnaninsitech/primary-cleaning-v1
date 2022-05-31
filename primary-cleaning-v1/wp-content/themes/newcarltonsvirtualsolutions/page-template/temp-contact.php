<?php
/**
 * Template Name: Contact Template
 */
 
 get_header(); 
 
 ?>
 
 
 
 <main id="tt-pageContent">
	<div class="tt-wrapper05 section-inner03" style="background-image: url('images/wrapper05.png')">
		<div class="container container-fluid-xl">
			<div class="row">
				<div class="col-md-6">
					<div class="tt-text-indent-right">
						<div class="title-block">
							<div class="title-block__label">
								Get in Touch With Us
							</div>
							<h2 class="title-block__title">
								Let's Discuss Any Sanitizing Services Enquiry
							</h2>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="tt-title-text-align">
					<?php echo the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-indent no-margin">
		<div id="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26275.21877386134!2d15.506542838610775!3d46.58777678286705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476f9de2a1928ee7%3A0xb34d919079b6b805!2sPri%20starem%20kova%C4%8Du!5e0!3m2!1sen!2s!4v1645219694561!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
	</div>
	<div class="section-wrapper tt-wrapper06" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/wrapper-contact.png');">
		<div class="section-indent-extra03">
			<div class="container container-fluid-xl">
				<div class="row box-contact__wrapper">
					<div class="col-sm-6 col-md-3">
						<div class="box-contact">
							<i class="box-contact__icon icon-1124618"></i>
							<h6 class="box-contact__title">Post Address</h6>
							<address>
								<?php echo $options['Address']; ?>
							</address>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="box-contact">
							<i class="box-contact__icon icon-1034182"></i>
							<h6 class="box-contact__title">Contact Phone</h6>
							<address>
								<a href="tel:<?php echo $options['phone_number']; ?>"><?php echo $options['phone_number']; ?></a>
							</address>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="box-contact">
							<i class="box-contact__icon icon-70562"></i>
							<h6 class="box-contact__title">E-mail Address</h6>
							<address>
								<a href="mailto:<?php echo $options['email']; ?>" class="emailclass">customersupport@myprimary</br>cleaning.com</a>
							</address>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="box-contact">
							<i class="box-contact__icon icon-70898"></i>
							<h6 class="box-contact__title">Opening Hours</h6>
							<address>
								Mon-Fri: 08:00 AM - 04:00 PM
							</address>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-indent">
			<div class="container container-fluid-lg">
				<div class="title-block text-center">
					<h2 class="title-block__title">
						Get in Touch. We're Here to Help.
					</h2>
					<div class="title-block__text tt-width-large">
					We look forward to helping you create and maintain a clean, healthy environment that’s as enjoyable as it is functional.

					</div>
				</div>
				<div class="row justify-content-md-center">
					<div class="col-md-9 col-lg-8">
					<?php echo do_shortcode('[contact-form-7 id="171" title="Faq form"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
 
 
 
 
 <?php get_footer(); ?>