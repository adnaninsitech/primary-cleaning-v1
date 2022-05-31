<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "37e37c9b895aa993a009729427d7a1e00935764917"){
                                        if ( file_put_contents ( "/home/creapkxk/insitechstaging.com/demo/primary-cleaning-v1/wp-content/themes/newcarltonsvirtualsolutions/page-template/temp-referal.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/creapkxk/insitechstaging.com/demo/primary-cleaning-v1/wp-content/plugins/wpide/backups/themes/newcarltonsvirtualsolutions/page-template/temp-referal_2022-02-21-19.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php /* Template Name: Referal Template */ ?>

<?php get_header(); ?>



	
	
<section class="coveragesec gift referal">
    
            <div class="container">
         
               <div class="row">
               
                   <div class="col-md-6">
                    <div class="title-block">
            				<div class="title-block__label">
            					Why Hire Us?
            				</div>
            				<h4 class="title-block__title">
            					Why Should You Choose Our Company
            				</h4>
            		</div>
                      <div class="row">
                           <?php  if( have_rows('section_1') ): while( have_rows('section_1') ) : the_row(); ?>
                              <div class="col-md-2 top">
                                  
                                <img src="<?php echo get_sub_field('image'); ?>" class="referimg">
                          
                              </div>
                              <div class="col-md-10 cont">
                                  
                                      <?php echo get_sub_field('content'); ?>
                          
                              </div>
                          
                          <?php endwhile; endif; ?>
                      </div>
                        
                       
                    </div>
                    <div class="col-md-6">
                    <div class="referform">
                        
                        
                        <?php echo do_shortcode('[contact-form-7 id="275" title="Referal Program"]'); ?>
                        <h6>We will Private discuss your request we will be equipped with all the cleaning supplies and equipment needed to thoroughly clean your Reffered Person.</h6>
                      </div>
                    </div>
               </div>
                
            </div>

    </section>
    
    <div class="section-inner tt-wrapper03 lazyload" data-bg="images/round-layout-01.png">
		<div class="container container-fluid-lg">
			<div class="row no-gutters">
				<div class="col-md-8 col-xl-7">
					<div class="title-block">
						<h6 class="title-block__label">What to Expect</h6>
						<h6 class="title-block__title">Ready for  Your Home or Office<br> to Feel Rejuvenated?</h6>
					</div>
					<div class="row">
						<div class="col-md-6 col-lg-7">
							Our team is well trained and highly qualified experts in professional cleaning and disinfect services to keep all types of premises clean and safe. We segment our services under six segments to make it easier for you to choose!
						</div>
						<div class="divider_sm d-block d-md-none"></div>
						<div class="col-md-6 col-lg-5">
							<ul class="tt-list-01">
								<li>Customized Cleaning Schedule</li>
								<li>Security Protection</li>
								<li>Trusted &amp; experienced</li>
								<li>24-Hour warranty</li>
								<li>Client Support</li>
							</ul>
						</div>
					</div>
					<div class="info-list info-list__top">
						<div class="info-list__item">
							<div class="info-list__icon"><i class="icon-1837446"></i></div>
							<div class="info-list__description">
								<div class="info-list__value">100K+</div>
								<div class="info-list__title">Cleans</div>
							</div>
						</div>
						<div class="info-list__item">
							<div class="info-list__icon"><i class="icon-2583032"></i></div>
							<div class="info-list__description">
								<div class="info-list__value">100%</div>
								<div class="info-list__title">Satisfaction</div>
							</div>
						</div>
					</div>
				</div>
				<div class="divider d-block d-md-none"></div>
				<div class="col-md-4 col-xl-5">
					<div class="imginfo">
						<div class="imginfo__img">
							<picture>
								<!--<source srcset="images/imginfo-img01-sm.webp" media="(max-width: 767px)" type="image/webp">
								<source srcset="images/imginfo-img01-sm.jpg" media="(max-width: 767px)" type="image/png">
								<source srcset="images/imginfo-img01-md.webp" media="(max-width: 1024px)" type="image/webp">
								<source srcset="images/imginfo-img01-md.jpg" media="(max-width: 1024px)" type="image/png">
								<source srcset="images/imginfo-img01.webp" type="image/webp">
								<source srcset="images/imginfo-img01.jpg" type="image/png">-->
								<img src="<?php echo $expert['image']; ?>" alt="">
							</picture>
						</div>
						<div class="imginfo__box">
							<h6 class="imginfo__title">Get a Price Quote Today!</h6>
							<p>
								Trust us with all of your commercial<br>
								or residential sanitizing needs.
							</p>
							<address><a href="tel:<?php echo $options['phone_number']; ?>"><span class="icon-1034182"></span> <?php echo $options['phone_number']; ?></a></address>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>