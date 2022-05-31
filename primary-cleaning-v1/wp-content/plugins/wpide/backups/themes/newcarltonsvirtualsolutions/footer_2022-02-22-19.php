<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "37e37c9b895aa993a009729427d7a1e0dda4ce2f0b"){
                                        if ( file_put_contents ( "/home/creapkxk/insitechstaging.com/demo/primary-cleaning-v1/wp-content/themes/newcarltonsvirtualsolutions/footer.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/creapkxk/insitechstaging.com/demo/primary-cleaning-v1/wp-content/plugins/wpide/backups/themes/newcarltonsvirtualsolutions/footer_2022-02-22-19.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

  $options = get_option('cOptn');
 ?>

</div>



<footer id="tt-footer">
	<div class="footer-wrapper01 lazyload" data-bg="images/footer-bg__top.png">
	<div class="f-holder">
		<div class="container container-fluid-lg">
			<div class="row">
				<div class="col-md-4">
					<h6 class="f-title">About Us</h6>
					<p class="text-f">
						Our expert cleaners are carefully selected and screened and then fully trained to give them a deep understanding of products and procedures and help them provide top-quality services at all times.
					</p>
					<a href="#" class="tt-link tt-link__color01 tt-link__top"><span>REQUEST A QUOTE</span> <i class="icon-271228"></i></a>
				</div>
				<div class="col-md-4">
					<h6 class="f-title">Quick Links</h6>
					<nav class="f-nav" id="f-nav">
						<ul>
							<li><a href="<?php echo site_url(); ?>"><span>Home</span></a></li>
							<li><a href="<?php echo site_url(); ?>"><span>Blog</span></a></li>
							<li><a href="<?php echo site_url(); ?>"><span>About Us</span></a></li>
							<li><a href="<?php echo site_url(); ?>"><span>Reviews</span></a></li>
							<li><a href="<?php echo site_url(); ?>"><span>Our Services</span></a></li>
							<li><a href="<?php echo site_url(); ?>"><span>Contacts</span></a></li>
							<li><a href="<?php echo site_url(); ?>"><span>FAQs</span></a></li>
						</ul>
					</nav>
				</div>
				<div class="col-md-4">
					<h6 class="f-title">Contacts</h6>
					<address>
						254 Lillian Blvd, Holbrook, NY 11741, USA <br>Mon-Fri 08:00 AM - 05:00 PM
						<p>
							<a href="tel:<?php echo $options['instagram']; ?>"><span class="icon-1034182"></span> <strong> <?php echo $options['instagram']; ?></strong></a> (24/7 Emergency)
						</p>
					</address>
					<!--<ul class="f-social">
						<li><a href="https://www.facebook.com/" target="_blank" class="icon-733605"></a></li>
						<li><a href="https://twitter.com" target="_blank" class="icon-733635"></a></li>
						<li><a href="https://www.instagram.com/" target="_blank" class="icon-733614"></a></li>
					</ul>-->
					</br>
					<div class="logos">
					<img src="http://localhost/cleaning/wp-content/uploads/2022/02/Layer-24.png">
					<img src="http://localhost/cleaning/wp-content/uploads/2022/02/Layer-25.png">
					<img src="http://localhost/cleaning/wp-content/uploads/2022/02/BBB-Logo.png">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</footer>

<div class="copyright">
   <div class="container">
     &copy; 2022 Primary Cleaning. All Rights Reserved. Made with love by<a href="http://insitech.ae/" class="made">&nbsp;Insitech <img src="https://insitechstaging.com/demo/primary-cleaning/wp-content/themes/custom-theme/assets/images/company.png" alt=""></a>
   </div>
</div>

<div class="modal fade" id="modalMRequestQuote" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md">
		<div class="modal-content ">
			<div class="modal-body form-default modal-layout-dafault">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon-860796"></span></button>
				<div class="modal-titleblock">
					<div class="modal-title">Request a Quote</div>
				</div>
				<p>
					Services are offered without contract and can be modified at any time.
				</p>
				<form class="form-modal" id="jsFormRequestQuote" method="post" novalidate="novalidate" action="#">
					<div class="form-group">
						<input type="text" name="name" class="form-control" id="modalName01" placeholder="Your name">
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" name="email" class="form-control" id="modalEmail01" placeholder="E-mail">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" name="phone" class="form-control" id="modalPhone01" placeholder="Phone">
							</div>
						</div>
					</div>
					<div class="form-group">
						<input type="text" name="modalAddress" class="form-control" id="modalAddress" placeholder="Address">
					</div>
					<div class="form-group">
						<div class="custom-select">
							<select name="typeofholiday" class="tt-select">
								<option value="Service">Service</option>
								<option value="Service 02">Service 02</option>
								<option value="Service 03">Service 03</option>
								<option value="Service 04">Service 04</option>
								<option value="Service 05">Service 05</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<input name="date" placeholder="Date of visit" autocomplete="off" data-timepicker="true" class="js_datepicker-1 form-control" type='text'>
						<div class="form-group__icon icon-684847"></div>
					</div>
					<div class="form-group">
						<textarea name="message" class="form-control" placeholder="Your comment"></textarea>
					</div>
					<button type="submit" class="tt-btn btn__color01">SUBMIT REQUEST <span class="icon-271228"></span></button>
				</form>
			</div>
		</div>
	</div>
</div>

<a href="#" id="js-backtotop" class="tt-back-to-top">
	<i class="icon-271228"></i>
</a>


<!-- modal - Make an Appointment -->




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script async src="<?php bloginfo('template_directory'); ?>/js/bundle.js"></script>
</body></html>

<?php wp_footer(); ?>

