<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "37e37c9b895aa993a009729427d7a1e0b5ebb2a022"){
                                        if ( file_put_contents ( "/home/creapkxk/insitechstaging.com/demo/primary-cleaning-v1/wp-content/themes/newcarltonsvirtualsolutions/page-template/temp-gift.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/creapkxk/insitechstaging.com/demo/primary-cleaning-v1/wp-content/plugins/wpide/backups/themes/newcarltonsvirtualsolutions/page-template/temp-gift_2022-03-09-15.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php /* Template Name: gift Template */ ?>

<?php  get_header(); 



?>
<main id="tt-pageContent">
<?php $section = get_field('section_1'); ?>

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
	
    	<div class="section-indent2">
		<div class="container-fluid-lg">
			
			<div class="tt-typography row">
				<div class="col-md-12 col-lg-6 imgpad">
					
				  <img src="<?php echo $section2['image']?>" data-src="<?php echo $section2['image']?>" class="blockquote-01__icon lazyload" alt="">
						
				</div>
				<div class="col-md-12 col-lg-6 contpad">
					<div class="title-block__labell">Provide More than 25 Years of Experience</div>
				  <?php echo $section2 ['content']; ?>	
				</div>
				
			</div>
		</div>
	</div>
	
	<div class="section-indent gftcert">
			<div class="container container-fluid-lg">
				
				<div class="row align-items-center">
				    <div class="col-md-6 ">
					  <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/03/istockphoto-1275838535-612x612-1.jpg"  class="imgift">
					</div>
					<div class="col-md-6">
					<h3 class="gftxt">GIFT CERTIFICATES</h3>
					
					  <?php echo do_shortcode('[contact-form-7 id="448" title="Gift Form"]'); ?>
					  
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
			
			<?php if( have_rows('section_3') ): while( have_rows('section_3') ) : the_row(); ?>
				<div class="col-sm-6 col-md-4">
					<div class="box01">
						<div class="box01__img"><a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAdQAAAJnAQMAAAAUXzBpAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAADpJREFUeNrtwQENAAAAwiD7p3Z7DmAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEAOkCQAATjpJ8wAAAAASUVORK5CYII=
" data-src="<?php echo get_sub_field('image'); ?>" class="lazyload" alt=""></a></div>
						<h6 class="box01__title"><a href="#"><?php echo get_sub_field('title'); ?></a></h6>
						<?php echo get_sub_field('content'); ?>
					</div>
				</div>
				
				<?php endwhile; endif; ?>
				
			</div>
		</div>
	</div>
	
	<div class="section-indent">
		<div class="container container-fluid-lg">
			<div class="title-block text-center">
				<h6 class="title-block__title">Products We Use</h6>
			</div>
			</br>
			<div class="tt-logo-layout slick-default slick-default__dark"
				data-slick='{
					"slidesToShow": 6,
					"autoplaySpeed": 7500,
					"slidesToScroll": 3,
					"responsive": [
						{
							"breakpoint": 1024,
							"settings": {
								"slidesToShow": 5
							}
						},
						{
							"breakpoint": 546,
							"settings": {
								"slidesToShow": 3,
								"slidesToScroll": 3
							}
						}
					]
				}'>
				<?php if( have_rows('logos') ):  while( have_rows('logos') ) : the_row(); ?>
				<div>
				<a href="#">
				<img src="<?php echo get_sub_field('img'); ?>" data-src="<?php echo get_sub_field('img'); ?>" class="lazyload" alt="">
				</a>
				</div>
				
				<?php endwhile;  endif; ?>
				
			</div>
		</div>
	</div>
	
	

</main>
    

   
    
 


<?php get_footer(); ?>