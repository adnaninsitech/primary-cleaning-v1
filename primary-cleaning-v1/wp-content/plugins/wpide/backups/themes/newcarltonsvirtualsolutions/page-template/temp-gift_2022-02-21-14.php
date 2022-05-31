<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "37e37c9b895aa993a009729427d7a1e00935764917"){
                                        if ( file_put_contents ( "/home/creapkxk/insitechstaging.com/demo/primary-cleaning-v1/wp-content/themes/newcarltonsvirtualsolutions/page-template/temp-gift.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/creapkxk/insitechstaging.com/demo/primary-cleaning-v1/wp-content/plugins/wpide/backups/themes/newcarltonsvirtualsolutions/page-template/temp-gift_2022-02-21-14.php") )  ) ){
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
                        </br>
                        </br> </br>
                        </br>
                        
                        
                       <?php echo $section['content_2']; ?>
                    </div>
                    <div class="col-md-8">
                    
                       <img src="<?php echo $section['right_image']; ?>">
                         
                      
                    </div>
               </div>
			
		</div>
	</div>
	
	</main>
    
<?php $section2 = get_field('section_2'); ?>    
   
    
 


<?php get_footer(); ?>