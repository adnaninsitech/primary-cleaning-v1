<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "3c83875153c68e44b2bef5b254ee8ced86b7e022cb"){
                                        if ( file_put_contents ( "C:\xampp\htdocs\cleaning/wp-content/themes/newcarltonsvirtualsolutions/page-template/temp-home.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("C:\xampp\htdocs\cleaning\wp-content\plugins\wpide/backups/themes/newcarltonsvirtualsolutions/page-template/temp-home_2022-02-18-16.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: Home Template
 */

get_header(); ?>
<?php $banner= get_field('banner'); 
$experience = get_field('experience'); 
$residential = get_field('residential_tabs'); 
$commercial = get_field('commercial_tabs'); 
$round = get_field('round_section'); 
$hire = get_field('hire_us_content');
$mission = get_field('our_mission'); 


?>

<main id="tt-pageContent">
	<div class="section-indent no-margin mainSlider-wrapper">
		<div id="js-mainSlider" class="mainSlider">
			<div class="slide">
				<div class="img--holder">
					<picture>
						<!--<source srcset="<?php echo $banner['bg_image']; ?>" media="(max-width: 767px)" type="image/webp">
						<source srcset="<?php echo $banner['bg_image']; ?>" media="(max-width: 767px)" type="image/png">
						<source srcset="<?php echo $banner['bg_image']; ?>" media="(max-width: 1024px)" type="image/webp">
						<source srcset="<?php echo $banner['bg_image']; ?>" media="(max-width: 1024px)" type="image/png">
						<source srcset="<?php echo $banner['bg_image']; ?>" type="image/webp">
						<source srcset="<?php echo $banner['bg_image']; ?>" type="image/png">-->
						<img src="<?php echo $banner['bg_image']; ?>" alt="">
					</picture>
				</div>
				<div class="slide-content">
					<div class="container container-fluid-lg js-rotation" data-animation="fadeInUpSm" data-animation-delay="0s">
					<?php echo $banner['bg_text']; ?>
					</div>
				</div>
			</div>
<!--			<div class="slide">-->
<!--				<div class="img--holder">-->
<!--					<picture>-->
<!--						<source srcset="images/mainslide-02-sm.webp" media="(max-width: 767px)" type="image/webp">-->
<!--						<source srcset="images/mainslide-02-sm.jpg" media="(max-width: 767px)" type="image/png">-->
<!--						<source srcset="images/mainslide-02-md.webp" media="(max-width: 1024px)" type="image/webp">-->
<!--						<source srcset="images/mainslide-02-md.jpg" media="(max-width: 1024px)" type="image/png">-->
<!--						<source srcset="images/mainslide-02.webp" type="image/webp">-->
<!--						<source srcset="images/mainslide-02.jpg" type="image/png">-->
<!--						<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAB4AAAAMgAQMAAAD4P+14AAAAA1BMVEUZGRlL5qT9AAAA90lEQVR42uzBgQAAAACAoP2pF6kCAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGD24EAAAAAAAMj/tRFUVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVYU9OBAAAAAAAPJ/bQRVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVWkPDgkAAAAABP1/7QkjAAAAAAAAAAAAsAnxPgABkBmI6QAAAABJRU5ErkJggg==-->
<!--" data-lazy="images/mainslide-02.webp" alt="">-->
<!--					</picture>-->
<!--				</div>-->
<!--				<div class="slide-content">-->
<!--					<div class="container container-fluid-lg js-rotation text-center" data-animation="fadeInUpSm" data-animation-delay="0s">-->
<!--						<div class="tt-text-01">Professional Sanitizing Service</div>-->
<!--						<div class="tt-text-02">Disinfecting & Deodorizing<br>Spray Services</div>-->
<!--						<div class="tt-text-03">Our expert cleaners are carefully selected and then fully trained to give them a deep. </div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
		</div>
	</div>
	
	<div class="section-indent-extra">
		<div class="container container-fluid-lg no-gutters-lg">
			<div class="added-info row">
			
			<?php if( have_rows('coverage') ): while( have_rows('coverage') ) : the_row(); ?>
				<a href="<?php echo get_sub_field('link'); ?>" class="added-info__item col-md-4">
					<div class="added-info__icon"><i class="<?php echo get_sub_field('icon'); ?>"></i></div>
					<div class="added-info__description">
						<?php echo get_sub_field('content'); ?>
					</div>
				</a>
				
				<?php endwhile; endif; ?>
				
				
				
			</div>
		</div>
	</div>
	
	<div class="section-indent">
		<div class="container container-fluid-lg">
			<div class="title-block">
				<div class="title-block__label">
					More than 25 Years of Experience
				</div>
				<h4 class="title-block__title">
					Certified Sanitizing Company
				</h4>
			</div>
			<div class="tt-typography row">
				<div class="col-md-12 col-lg-4">
					<blockquote class="blockquote-01">
						<img src="<?php echo $experience['img_1']; ?>" data-src="<?php echo $experience['img_1']; ?>" class="blockquote-01__icon lazyload" alt="">
						<?php echo $experience['content']; ?>
						<img class="sign-img lazyload" src="<?php echo $experience['img_2']; ?>" data-src="<?php echo $experience['img_2']; ?>" alt="">
					</blockquote>
				</div>
				<div class="divider d-block d-lg-none"></div>
				<div class="col-md-6 col-lg-4">
				<?php echo $experience['content_2']; ?>
				
				</div>
				<div class="divider d-block d-md-none"></div>
				<div class="col-md-6 col-lg-4">
				<?php echo $experience['content_3']; ?>
					
				</div>
			</div>
		</div>
	</div>
	
	<div class="section-indent">
		<div class="tabs-default tabs-layout-01">
			<div class="container container-fluid-lg tt-ajax-tabs" style="height: 82px;">
				<ul class="nav nav-tabs nav-tabs__right" role="tablist">
					<li class="nav-item">
						<a class="nav-link active show" data-toggle="tab" href="#tt-tab-01" role="tab" aria-selected="true">
							<span class="tt-large">Residential</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link include" data-toggle="tab" data-ajax-include="ajax-content/tabs-commercial.html" href="#tt-tab-02" role="tab" aria-selected="false">
							<span class="tt-large">Commercial</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="tab-content">
				<div class="tab-pane fade active show" id="tt-tab-01" role="tabpanel">
					<div class="tab-layout01">
						<div class="tab-layout01__img">
							<picture>
								<!--<source srcset="images/tab-layout01-img01-sm.webp" media="(max-width: 767px)" type="image/webp">
								<source srcset="images/tab-layout01-img01-sm.png" media="(max-width: 767px)" type="image/png">
								<source srcset="images/tab-layout01-img01-md.webp" media="(max-width: 1024px)" type="image/webp">
								<source srcset="images/tab-layout01-img01-md.png" media="(max-width: 1024px)" type="image/png">
								<source srcset="images/tab-layout01-img01.webp" type="image/webp">
								<source srcset="images/tab-layout01-img01.png" type="image/png">-->
								<img src="<?php echo $residential['image']; ?>" alt="">
							</picture>
						</div>
						<div class="tab-layout01__descriptions">
						     
							<h5 class="tab-layout01__title"><?php echo $residential['title']; ?></h5>
							<?php echo $residential['content']; ?>
							
							<div class="tt-icon-list">
								<div class="tt-item">
								<img src="<?php echo $residential['simg_1']; ?>">
									
									<div class="tt-item__title">
										Mattress<br> Sanitizing
									</div>
								</div>
								<div class="tt-item">
									<img src="<?php echo $residential['simg_2']; ?>">
									<div class="tt-item__title">
										Furniture<br> Sanitizing
									</div>
								</div>
								<div class="divider_xs d-block d-md-none"></div>
								<div class="tt-item">
								<img src="<?php echo $residential['simg_3']; ?>">
									<div class="tt-item__title">
										Carpet<br> Sanitizing
									</div>
								</div>
								<div class="tt-item">
									<img src="<?php echo $residential['simg_4']; ?>">
									<div class="tt-item__title">
										Whole Home<br> Sanitizing
									</div>
								</div>
							</div>
							<a href="#" class="tt-btn tt-btn__top">GET SERVICE NOW <span class="icon-271228"></span></a>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="tt-tab-02" role="tabpanel"><div class="tab-layout01 additional-01">
            	<div class="tab-layout01__img">
            		<picture>
            			<!--<source srcset="images/tab-layout01-img02.webp" type="image/webp">
            			<source srcset="images/tab-layout01-img02.png" type="image/png">-->
            			<img src="<?php echo $commercial['image']; ?>" alt="">
            		</picture>
            	</div>
	<div class="tab-layout01__descriptions">
		<h5 class="tab-layout01__title"><?php echo $commercial['title']; ?></h5>
		<?php echo $commercial['content']; ?>
		<div class="tt-icon-list">
			<div class="tt-item">
				<img src="<?php echo $commercial['simg_1']; ?>">
				<div class="tt-item__title">
					Building<br> Cleaning
				</div>
			</div>
			<div class="tt-item">
				<img src="<?php echo $commercial['simg_2']; ?>">
				<div class="tt-item__title">
					Education<br> Centre
				</div>
			</div>
			<div class="divider_xs d-block d-md-none"></div>
			<div class="tt-item">
				<img src="<?php echo $commercial['simg_3']; ?>">
				<div class="tt-item__title">
					Warehouse<br> Cleaning
				</div>
			</div>
			<div class="tt-item">
			<img src="<?php echo $commercial['simg_4']; ?>">
				<div class="tt-item__title">
					Factory<br> Cleaning
				</div>
			</div>
		</div>
		<a href="services-commercial.html" class="tt-btn tt-btn__top02">GET SERVICE NOW <span class="icon-271228"></span></a>
	  </div>
     </div>
    </div>
  </div>
		</div>
	</div>
	
	<div class="section-inner-round-layout01">
		<div class="container container-fluid-lg">
			<div class="row align-items-center">
				<div class="col-xl-5">
					<div class="tt-custom-width round-layout01__align">
						<div class="title-block">
						   <?php echo $round['title']; ?>
							
						</div>
						 <?php echo $round['content']; ?>
						
						<a href=" <?php echo $round['link']; ?>" class="tt-btn tt-btn__top" data-toggle="modal" data-target="#modalMRequestQuote">REQUEST A QUOTE <span class="icon-271228"></span></a>
					</div>
				</div>
				<div class="col-xl-7">
					<div class="round-layout01 lazyload" data-bg="images/round-layout-01.png">
						<div class="round-layout01__img-motion">
							<img  src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" class="lazyload" data-src="<?php echo $round['image']; ?>" alt="">
							<img  src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" class="lazyload" data-src="http://localhost/cleaning/wp-content/uploads/2022/02/round-layout01-img-bg.png" alt="">
						</div>
						<div class="round-layout01__wrapper">
							<div class="round-layout01_item item-position-01">
								Germs
							</div>
							<div class="round-layout01_item item-position-02">
								Viruses<br> & Bacteria
							</div>
							<div class="round-layout01_item item-position-03">
								Odors
							</div>
							<div class="round-layout01_item item-position-04 item-absent">
								Harmful<br>Allergens
							</div>
							<div class="round-layout01_center">
								<h5 class="tt-title">Harmful<br> Allergens</h5>
								<p>
									Allergens can be any substance that causes an allergic reaction.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="section-indent no-margin">
		<div class="text-center title-block title-block__indent01">
			<div class="title-block__label">
				Important Information
			</div>
			<h4 class="title-block__title">
				Leaders in the Sanitizing Industry
			</h4>
		</div>
		<div class="tabs-default02 tabs-layout-01">
			<div class="container container-fluid-lg tt-ajax-tabs">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link show active" data-toggle="tab" href="#tt-tab02-01" role="tab">
							<span class="tt-large">Why Hire Us?</span>
							<span class="tt-small">Why should you choose our company</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-ajax-include="ajax-content/tabs-our-mission.html" data-toggle="tab" href="#tt-tab02-02" role="tab">
							<span class="tt-large">Our Mission</span>
							<span class="tt-small">Our company is dedicated to customers</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-ajax-include="ajax-content/tabs-certifications.html" data-toggle="tab" href="#tt-tab02-03" role="tab">
							<span class="tt-large">Our Certifications</span>
							<span class="tt-small">Industry-leading certifications</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="tab-content">
				<div class="tab-pane active fade" id="tt-tab02-01" role="tabpanel">
					<div class="tab-layout02 lazyload" data-bg="images/tab-layout02-bg.png">
						<div class="container container-fluid-lg">
							<div class="row">
							
								<div class="col-xl-6">
									<div class="box-info-wrapper row js-init-carusel-mobile slick-dotted slick-default slick-default__dark">
									
									<?php if( have_rows('hire_us') ): while( have_rows('hire_us') ) : the_row(); ?>
										<div class="col-sm-6">
											<div class="box-info">
												<img src="<?php echo get_sub_field('img'); ?>">
												<?php echo get_sub_field('content'); ?>
											</div>
										</div>
									<?php endwhile; endif; ?>	
									
									</div>
								</div>
								<div class="col-xl-6  text-xl-left text-center">
									<div class="video-block01 video-block01__indent lazyload" data-bg="<?php echo $hire['image']; ?>">
										<a href="<?php echo $hire['video']; ?>" class="tt-video-link js-video-popup"></a>
										<div class="video-block01__img"></div>
										<div class="video-block01__description">
										<?php echo $hire['content']; ?>
										
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="tt-tab02-02" role="tabpanel">
				
				   <div class="tab-pane active show" id="tt-tab02-02" role="tabpanel"><div class="tab-layout02 lazyloaded" data-bg="images/tab-layout02-bg.png" style="background-image: url(&quot;<?php echo get_template_directory_uri(); ?>/images/tab-layout02-bg.png&quot;);">
						<div class="container container-fluid-lg">
							<div class="row">
								<div class="col-sm-9 col-md-5 col-xl-6">
									<div class="img-double img-double__indent01">
										<img class=" lazyloaded" src="<?php echo $mission['image']; ?>" data-src="<?php echo $mission['image']; ?>" alt="">
										<div class="img-double_subimg">
											<img class=" lazyloaded" src="images/img-double01-01.jpg" data-src="images/img-double01-01.jpg" alt="">
										</div>
									</div>
								</div>
								<div class="divider d-block d-md-none"></div>
								<div class="col-sm-12 col-md-7 col-xl-6 align-self-center">
									<div class="row tt-typography tt-col-wrapper">
										<div class="col-md-6">
										
										<?php echo $mission['left_content']; ?>
										
										</div>
										<div class="col-md-6">
										<?php echo $mission['right_content']; ?>
											
										</div>
										<div class="col-12">
										  <?php echo $mission['core_value']; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>
				</div>
				<div class="tab-pane" id="tt-tab02-03" role="tabpanel">
				    <div class="tab-layout02 lazyloaded" data-bg="images/tab-layout02-bg.png" style="background-image: url(&quot;images/tab-layout02-bg.png&quot;);">
						<div class="container container-fluid-lg">
							<div class="row">
								<div class="col-md-6 col-lg-7">
									<div class="tt-typography tt-typography__indent01">
										<h6 class="tt-title">Choosing a Service You Trust</h6>
										<p>
											Are you bothered about choosing the best home cleaning service because you do not know which to trust? We are certain about the fact that you want the best services, which is why we are here for you. We are experts, and we don’t want you to go through the stress of surfing the internet without getting any result; this could be annoying, and we know that.
										</p>
										<h6 class="tt-title">Certified Cleaning and Sanitizing Technicians</h6>
										<p>
											All of our experts are certified surgical cleaning technicians. This is a very comprehensive healthcare cleaning certification by the Association for the Healthcare Environment (AHE). By holding these janitorial licenses, we are able to maintain proper upkeep for every medical office.
										</p>
										<p>
											This allows us to provide state-of-the-art care in operating rooms, common areas, and health labs. With an entire personnel of CSCT professionals, we maintain an edge as the leading service provider in the medical cleaning industry.
										</p>
									</div>
								</div>
								<div class="divider d-block d-md-none"></div>
								<div class="col-md-6 col-lg-5">
									<div class="tt-certifications-wrapper">
									
										<div class="tt-item">
											<a href="#" class="tt-certifications"><img class=" lazyloaded" src="images/certifications-img01.jpg" data-src="images/certifications-img01.jpg" alt=""></a>
										</div>
										
									
									</div>
								</div>
							</div>
						</div>
					</div>
				
				
				</div>
			</div>
		</div>
	</div>
	
</main>


<?php get_footer(); ?>