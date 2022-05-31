<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "37e37c9b895aa993a009729427d7a1e0dda4ce2f0b"){
                                        if ( file_put_contents ( "/home/creapkxk/insitechstaging.com/demo/primary-cleaning-v1/wp-content/themes/newcarltonsvirtualsolutions/page-template/temp-about.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/creapkxk/insitechstaging.com/demo/primary-cleaning-v1/wp-content/plugins/wpide/backups/themes/newcarltonsvirtualsolutions/page-template/temp-about_2022-02-22-13.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * Template Name: About Template
 */
 
 get_header(); 
 
 ?>
 
<main id="tt-pageContent"> 

<?php $section1= get_field('section_1'); ?>
 <div class="section-indent">
		<div class="container container-fluid-lg">
			<div class="title-block">
				<!--<div class="title-block__label">
					More than 25 Years of Experience
				</div>-->
				<h4 class="title-block__title">
					Covid Info
				</h4>
				
				
			</div>
			<div class="tt-typography row">
				<div class="col-md-6 col-lg-6">
			<?php echo $section1['left_content']; ?>
					
				</div>
				<div class="col-md-6 col-lg-6">
					<p>This is other</p>
				</div>
			</div>
		</div>
	</div>
 
</main> 
 <?php get_footer(); ?>