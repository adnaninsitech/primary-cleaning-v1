<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "37e37c9b895aa993a009729427d7a1e0dda4ce2f0b"){
                                        if ( file_put_contents ( "/home/creapkxk/insitechstaging.com/demo/primary-cleaning-v1/wp-content/themes/newcarltonsvirtualsolutions/page-template/temp-service.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/creapkxk/insitechstaging.com/demo/primary-cleaning-v1/wp-content/plugins/wpide/backups/themes/newcarltonsvirtualsolutions/page-template/temp-service_2022-02-22-18.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: Services Template
 */

get_header(); ?>

<?php $sersec = get_field('ser_sec1'); ?>
<main id="tt-pageContent">
	<div class="tt-wrapper05 section-inner03" style="background-image: url('images/wrapper05.png')">
		<div class="container container-fluid-xl">
			<div class="row flex-sm-row-reverse">
				<div class="col-sm-5 col-md-6">
					<div class="extra-right-img">
						<picture>
							<source srcset="<?php echo $sersec['image']; ?>" type="image/webp">
							<source srcset="<?php echo $sersec['image']; ?>" type="image/png">
							<img src="	<?php echo $sersec['image']; ?>" alt="">
						</picture>
					</div>
				</div>
				<div class="divider d-block d-sm-none"></div>
				<div class="col-sm-7 col-md-6">
					<div class="tt-text-indent-right">
						<div class="title-block">
							<div class="title-block__label">
							<?php echo $sersec['title']; ?>
								
							</div>
							<h2 class="title-block__title">
								<?php echo $sersec['name']; ?>
							</h2>
						</div>
						<?php echo $sersec['content']; ?>
					</div>
				</div>

			</div>
		</div>
	</div>





<?php $section2= get_field('section_2'); ?>
<div class="section-indent no-margin">
		<div class="tt-wrapper01 wrapper-left-center section-inner02" style="background-image: url('images/wrapper-left-center.png')">
			<div class="container container-fluid-xl">
				<div class="row">
					<div class="col-md-5 col-xl-4">
						<div class="box-layout">
						
							<div class="item-box">
								<div class="item-box__title">
									<?php echo the_title(); ?>
								</div>
								<div class="item-box__content no-inner">
									<div class="tt-submenu">
									
									
									<?php  if( have_rows('serv_tabs') ): ?>
									<?php   while( have_rows('serv_tabs') ) : the_row();	?>
										<a href="#" class="tt-submenu__item active">
											<img src="<?php echo get_sub_field('image'); ?>">
											<div class="tt-submenu__text"><span><?php echo get_sub_field('name'); ?></span></div>
										</a>
										<?php endwhile ?>
										
										<?php endif; ?>
										
									</div>
								</div>
							</div>
							<div class="item-box">
								<div class="item-box__content">
									<div class="tt-subtitle">Our Contacts</div>
									<div class="tt-listicon">
										<div class="item">
											<div class="listicon__icon">
												<i class="icon-1124618"></i>
											</div>
											<div class="listicon__text">
												<?php echo $options['Address']; ?>
											</div>
										</div>
										<div class="item">
											<div class="listicon__icon">
												<i class="icon-70898"></i>
											</div>
											<div class="listicon__text">
												Mon-Fri 08:00 AM - 05:00 PM
											</div>
										</div>
										<a href="#mailto:info@santizex-site.com" class="item">
											<div class="listicon__icon">
												<i class="icon-70562"></i>
											</div>
											<div class="listicon__text">
													<?php echo $options['email']; ?>
											</div>
										</a>
										<a href="tel:1-800-654-3210" class="item">
											<div class="listicon__icon">
												<i class="icon-1034182"></i>
											</div>
											<div class="listicon__text">
											<?php echo $options['phone_number']; ?>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="divider d-block d-md-none"></div>
					<div class="col-md-7 col-xl-8">
						<div class="title-block title-block__indent-top">
							<h2 class="title-block__title">
								<?php echo $section2['title']; ?>
							</h2>
						</div>
						<p>
						<?php echo $section2['content']; ?>
						</p>
						<div class="row obj-top">
							<div class="col-sm-5 col-lg-6">
								<img src="<?php echo $section2['image']; ?>" data-src="<?php echo $section2['image']; ?>" class="lazyload tt-mobile-fullwidth" alt="">
							</div>
							<div class="divider d-block d-sm-none"></div>
							<div class="col-sm-7 col-lg-6">
							<?php echo $section2['content_2']; ?>
								
							</div>
						</div>
						 <?php echo $section2['list']; ?>
						<a href="<?php echo $section2['link']; ?>" class="tt-btn tt-btn__top">GET SERVICE NOW <span class="icon-271228"></span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?php $oricing = get_field('pricing'); ?>	
<div class="section-inner03">
		<div class="container container-fluid-xl wrapper-right-col lazyload" data-bg="images/wrapper-right-col.png">
			<div class="row align-items-center">
				<div class="col-md-6">
					<div class="col-indent-right">
						<div class="title-block">
							<div class="title-block__label">
								Our Pricing
							</div>
							<h2 class="title-block__title">
							 <?php echo $oricing['title']; ?>
							</h2>
						</div>
						<p><?php echo $oricing['content']; ?></p>
						<?php echo $oricing['listing']; ?>
					</div>
				</div>
				<div class="divider d-block d-md-none"></div>
				<div class="col-md-6">
					<div class="tt-table-wrapper01">
					
						<img src="<?php echo $oricing['image']; ?>">
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
<div class="section-indent no-margin">
		<div class="container container-fluid-lg">
			<div class="title-block text-center">
				<div class="title-block__label">
					Quickest Way to Sanitize
				</div>
				<h5 class="title-block__title">
					Why Steam Cleaning
				</h5>
			</div>
			<div class="row box01-wrapper text-center text-sm-left">
			<?php if( have_rows('steam') ): while( have_rows('steam') ) : the_row(); ?>
			
				<div class="col-sm-6 col-md-4">
					<div class="box01 text-center">
						<div class="box01__img box01__img-round"><a href="#"><img class="lazyload" src="<?php echo get_sub_field('image'); ?>" data-src="<?php echo get_sub_field('image'); ?>" alt=""></a></div>
						<h6 class="box01__title"><a href="#"><?php echo get_sub_field('title'); ?></a></h6>
						<p><?php echo get_sub_field('content'); ?></p>
					</div>
				</div>
				
				<?php endwhile; endif; ?>
				
			</div>
		</div>
	</div>
	
</main>

<?php get_footer(); ?>