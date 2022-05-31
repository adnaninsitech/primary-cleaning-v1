<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "37e37c9b895aa993a009729427d7a1e00935764917"){
                                        if ( file_put_contents ( "/home/creapkxk/insitechstaging.com/demo/primary-cleaning-v1/wp-content/themes/newcarltonsvirtualsolutions/page-template/temp-referal.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/creapkxk/insitechstaging.com/demo/primary-cleaning-v1/wp-content/plugins/wpide/backups/themes/newcarltonsvirtualsolutions/page-template/temp-referal_2022-02-21-18.php") )  ) ){
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
                        <h3>Request For The Referral Program	</h3>
                        
                        <?php echo do_shortcode('[contact-form-7 id="275" title="Referal Program"]'); ?>
                         
                      </div>
                    </div>
               </div>
                
            </div>

    </section>

<?php get_footer(); ?>