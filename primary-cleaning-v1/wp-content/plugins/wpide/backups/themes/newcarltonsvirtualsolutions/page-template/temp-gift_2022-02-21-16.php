<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "37e37c9b895aa993a009729427d7a1e00935764917"){
                                        if ( file_put_contents ( "/home/creapkxk/insitechstaging.com/demo/primary-cleaning-v1/wp-content/themes/newcarltonsvirtualsolutions/page-template/temp-gift.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/creapkxk/insitechstaging.com/demo/primary-cleaning-v1/wp-content/plugins/wpide/backups/themes/newcarltonsvirtualsolutions/page-template/temp-gift_2022-02-21-16.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php /* Template Name: gift Template */ ?>

<?php echo get_header(); 



?>

<?php $section = get_field('section_1'); ?>
<main id="tt-pageContent">
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
			<div class="row">
               
                   <div class="col-md-4">
                       <div class="fpara">
                          <?php echo $section['content']; ?>
                       </div>
                       </br></br>

                       <img src="<?php echo $section['img_1']; ?>">
                       </br> </br>
                        
                       <?php echo $section['content_2']; ?>
                    </div>
                    <div class="col-md-8">
                    
                       <img src="<?php echo $section['right_image']; ?>">
                         
                      
                    </div>
               </div>
			
		</div>
	</div>
	<?php $section2 = get_field('section_2'); ?>   
	
	<!--<section class="coveragesec gift">
            <div class="container-fluid">
               <div class="row">
                   <div class="col-md-1">
                   </div>
                   <div class="col-md-7">
                          <img src="<?php echo $section2['image']?>">
                    </div>
                    <div class="col-md-4">
                          <?php echo $section2['content']; ?>
                    </div>
               </div>
               
            </div>
    
    
    </section>-->
    
    	<div class="section-indent2">
		<div class="container container-fluid-lg">
			
			<div class="tt-typography row">
				<div class="col-md-12 col-lg-7">
					
				  <img src="<?php echo $section2['image']?>" data-src="<?php echo $section2['image']?>" class="blockquote-01__icon lazyload" alt="">
						
				</div>
				<div class="col-md-12 col-lg-5">
					<div class="title-block__labell">Provide More than 25 Years of Experience</div>
				  <?php echo $section2 ['content']; ?>	
				</div>
				
			</div>
		</div>
	</div>
	
	
	<div class="section-indent">
		<div class="container container-fluid-lg">
			<div class="title-block text-center">
				<div class="title-block__label">
					We Care for People
				</div>
				<h5 class="title-block__title">
					How Our Company Works
				</h5>
				<div class="title-block__text">
					When you choose us as a service partner we bring expertise and experience as standard.
				</div>
			</div>
			<div class="row box01-wrapper text-center text-sm-left">
			<?php if( have_rows('repeater_field_name') ): while( have_rows('repeater_field_name') ) : the_row(); ?>
				<div class="col-sm-6 col-md-4">
					<div class="box01">
						<div class="box01__img"><a href="#"><img src="images/about-img-02.jpg" data-src="images/about-img-02.jpg" class=" lazyloaded" alt=""></a></div>
						<h6 class="box01__title"><a href="#">Pick a Time</a></h6>
						<p>
							Select the day and time for your service and get instant, affordable pricing.
						</p>
					</div>
				</div>
				
				<?php endwhile; endif; ?>
				<div class="col-sm-6 col-md-4">
					<div class="box01">
						<div class="box01__img"><a href="#"><img src="images/about-img-03.jpg" data-src="images/about-img-03.jpg" class=" lazyloaded" alt=""></a></div>
						<h6 class="box01__title"><a href="#">Book instantly</a></h6>
						<p>
							We'll confirm your appointment and take care of payment electronically and securely.
						</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="box01">
						<div class="box01__img"><a href="#"><img src="images/about-img-04.jpg" data-src="images/about-img-04.jpg" class=" lazyloaded" alt=""></a></div>
						<h6 class="box01__title"><a href="#">Your Pro Arrives</a></h6>
						<p>
							An experienced, fully-equipped professional will show up on time at your doorstep.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	</main>
    

   
    
 


<?php get_footer(); ?>