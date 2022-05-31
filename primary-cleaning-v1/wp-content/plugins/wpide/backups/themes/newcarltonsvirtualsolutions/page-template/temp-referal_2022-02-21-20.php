<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "37e37c9b895aa993a009729427d7a1e00935764917"){
                                        if ( file_put_contents ( "/home/creapkxk/insitechstaging.com/demo/primary-cleaning-v1/wp-content/themes/newcarltonsvirtualsolutions/page-template/temp-referal.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/creapkxk/insitechstaging.com/demo/primary-cleaning-v1/wp-content/plugins/wpide/backups/themes/newcarltonsvirtualsolutions/page-template/temp-referal_2022-02-21-20.php") )  ) ){
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
   
   
<?php  $section2 = get_field('section_2'); ?>   
    
<div class="section-inner tt-wrapper03 lazyload" data-bg="images/round-layout-01.png">
		<div class="container container-fluid-lg">
			<div class="row no-gutters">
				<div class="col-md-8 col-xl-7">
					<div class="title-block">
					<?php echo $section2['content_1']; ?>
						
					</div>
					<div class="row">
						<div class="col-md-6 col-lg-7">
						<?php echo $section2['content_2']; ?>
							</div>
						<div class="divider_sm d-block d-md-none"></div>
						<div class="col-md-6 col-lg-5">
						<?php echo $section2['content_3']; ?>
							
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
							
								<img src="<?php echo $section2['image']; ?>" alt="">
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



<?php  $section3 = get_field('section_3'); ?>	

<section class="refer-sec3">

    <div class="container">
         <div class="row">
            <div class="col-md-6">
                 <img src="<?php echo $section3['image']; ?>">
            </div>
            <div class="col-md-6">
                <?php echo $section3['content']; ?>
            </div>
         </div>
         <br><br><br>
         <div class="row">
            <div class="col-md-6">
                <?php echo $section3['content_2']; ?>
            </div>
            <div class="col-md-6">
            <img src="<?php echo $section3['image_2']; ?>">
               
            </div>
         </div>
    </div>


</section>
				
		

<?php get_footer(); ?>


